#!/bin/bash

# Testimonial Fix Script for Live Server
# Run this script on your live server

echo "🔧 Fixing Testimonials on Live Server..."

# Navigate to project directory
cd public_html

# Create backup
echo "📦 Creating backup..."
cp resources/views/layouts/testimonial.blade.php resources/views/layouts/testimonial.blade.php.backup
cp resources/views/main.blade.php resources/views/main.blade.php.backup

# Fix 1: Add missing div tag in slide 2
echo "🔨 Fixing HTML structure..."
sed -i '134a\              <div class="testimonial-card p-4 rounded shadow bg-white">' resources/views/layouts/testimonial.blade.php

# Fix 2: Improve CSS loading with fallback
echo "🎨 Fixing CSS loading..."
sed -i '48a\    <link rel="stylesheet" href="{{ asset('\''assets/vendor/swiper/swiper-bundle.min.css'\'') }}" media="print" onload="this.media='\''all'\''">' resources/views/main.blade.php

# Fix 3: Improve JavaScript with better error handling
echo "⚡ Fixing JavaScript initialization..."

# Replace the Swiper script section
cat > /tmp/swiper_script.js << 'EOF'
    <!-- Swiper loaded conditionally only when needed -->
    <script>
        (function(){
            const hasSwiper = document.querySelector('.init-swiper, .testimonial-slider');
            if (hasSwiper) {
                // Try local asset first, fallback to CDN
                const s = document.createElement('script');
                s.src = '{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}';
                s.onload = function() {
                    initializeSwiper();
                };
                s.onerror = function() {
                    console.warn('Local Swiper failed, trying CDN...');
                    // Fallback to CDN
                    const cdnScript = document.createElement('script');
                    cdnScript.src = 'https://unpkg.com/swiper/swiper-bundle.min.js';
                    cdnScript.onload = function() {
                        initializeSwiper();
                    };
                    cdnScript.onerror = function() {
                        console.error('Both local and CDN Swiper failed to load');
                    };
                    document.head.appendChild(cdnScript);
                };
                document.head.appendChild(s);
            }
            
            function initializeSwiper() {
                // Wait for DOM to be fully ready
                if (document.readyState === 'loading') {
                    document.addEventListener('DOMContentLoaded', initSwiper);
                } else {
                    initSwiper();
                }
            }
            
            function initSwiper() {
                setTimeout(function() {
                    try {
                        const swiperContainer = document.querySelector('.testimonial-slider');
                        if (!swiperContainer) {
                            console.error('Testimonial slider container not found');
                            return;
                        }
                        
                        const swiper = new Swiper('.testimonial-slider', {
                            loop: true,
                            pagination: {
                                el: '.swiper-pagination',
                                clickable: true,
                            },
                            autoplay: {
                                delay: 5000,
                                disableOnInteraction: false,
                                pauseOnMouseEnter: true,
                            },
                            // Performance optimizations
                            watchOverflow: true,
                            updateOnWindowResize: true,
                            observer: true,
                            observeParents: true,
                            // Add error handling
                            on: {
                                init: function() {
                                    console.log('Swiper initialized successfully');
                                },
                                error: function(error) {
                                    console.error('Swiper error:', error);
                                }
                            }
                        });

                        // Reduce layout thrashing on resize
                        window.addEventListener('resize', () => {
                            requestAnimationFrame(() => swiper.update());
                        });
                    } catch (error) {
                        console.error('Swiper initialization failed:', error);
                    }
                }, 200);
            }
        })();
    </script>
EOF

# Replace the old Swiper script with the new one
# This is a complex replacement, so we'll do it manually
echo "⚠️  Manual step required:"
echo "1. Open resources/views/main.blade.php"
echo "2. Find the Swiper script section (around line 359)"
echo "3. Replace it with the content from /tmp/swiper_script.js"

# Fix 4: Improve fallback CSS
echo "🎯 Adding better fallback CSS..."
cat >> resources/views/layouts/testimonial.blade.php << 'EOF'

  /* Enhanced fallback styles */
  .testimonial-slider:not(.swiper-initialized) .swiper-wrapper {
    overflow: visible;
  }

  .testimonial-slider:not(.swiper-initialized) .swiper-slide {
    opacity: 1;
    transform: none;
  }
EOF

echo "✅ Testimonial fixes applied!"
echo "📝 Next steps:"
echo "1. Manually replace the Swiper script in main.blade.php with the content from /tmp/swiper_script.js"
echo "2. Clear any caches if you have them"
echo "3. Test the testimonials on your live site"

echo "🔍 To verify the fixes:"
echo "1. Check browser console for any Swiper errors"
echo "2. Verify Swiper assets are loading"
echo "3. Test testimonial slider functionality"
