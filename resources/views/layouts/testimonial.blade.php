<style>
  #testimonials {
    background-color: #f5f5f5;
  }

  .testimonial-card {
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 100%;
    margin: 0;
    box-sizing: border-box;
  }

  .badge-card {
    bottom: -20px;
    transform: translateX(-50%);
  }

  .badge-card i {
    font-size: 2rem;
    color: #e5a72a;
  }

  .swiper.testimonial-slider {
    width: 100%;
    max-width: 420px;
    height: auto;
  }

  .swiper-slide {
    width: 100% !important;
    height: auto;
    display: flex;
    justify-content: stretch;
    align-items: stretch;
    box-sizing: border-box;
  }

  .swiper-slide .testimonial-card {
    width: 100%;
    max-width: 100%;
    flex: 1 1 auto;
  }

  .testimonial-slider {
    padding-bottom: 0.5rem;
  }

  .testimonial-slider .swiper-pagination {
    position: relative;
    margin-top: 0.75rem;
    bottom: 0 !important;
  }

  .google-reviews-link-wrap {
    margin-top: 1rem;
    margin-bottom: 1.75rem;
  }

  .google-reviews-link {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    padding: 0.65rem 1.15rem;
    border-radius: 50px;
    background: #122F2A;
    color: #fff !important;
    font-weight: 700;
    font-size: 0.95rem;
    text-decoration: none !important;
    box-shadow: 0 4px 12px rgba(18, 47, 42, 0.18);
  }

  .google-reviews-link:hover {
    background: #1A685B;
    color: #fff !important;
  }

  @media (max-width: 768px) {
    .swiper.testimonial-slider {
      max-width: 100%;
    }

    .swiper-slide {
      width: 100% !important;
    }

    .testimonial-card {
      max-width: 100%;
    }

    .google-reviews-link {
      width: 100%;
      justify-content: center;
    }
  }

  .swiper-pagination-bullet {
    width: 12px;
    height: 12px;
    background: #333;
    opacity: 0.5;
    margin: 8px;
    border-radius: 50%;
    position: relative;
  }

  .swiper-pagination-bullet::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    width: 48px;
    height: 48px;
    transform: translate(-50%, -50%);
    background: transparent;
    pointer-events: none;
  }

  .swiper-pagination-bullet-active {
    background: #007bff;
    opacity: 1;
  }

  .testimonial-slider:not(.swiper-initialized) .swiper-wrapper {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
  }

  .testimonial-slider:not(.swiper-initialized) .swiper-slide {
    flex: 0 0 auto;
    width: 100%;
    max-width: 420px;
  }

  .testimonial-slider:not(.swiper-initialized) .swiper-pagination {
    display: none;
  }

  .google-review-meta {
    font-size: 0.85rem;
    color: #6c757d;
  }

  .testimonial-head {
    margin-bottom: 1.35rem;
  }

  .testimonial-eyebrow {
    display: block;
    color: #dc3545;
    font-size: 1rem;
    font-weight: 700;
    margin-bottom: 0.4rem;
  }

  .testimonial-title-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 0.85rem;
    margin-bottom: 0.75rem;
  }

  .testimonial-title {
    color: #122F2A;
    font-size: clamp(1.35rem, 2.4vw, 1.75rem);
    font-weight: 800;
    line-height: 1.3;
    margin: 0;
    flex: 1 1 auto;
    min-width: 0;
  }

  .testimonial-title span {
    color: #212529;
  }

  .google-review-badge {
    display: inline-flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 0.35rem;
    font-size: 0.85rem;
    color: #5f6368;
    margin: 0;
  }

  .google-review-badge svg {
    width: 16px;
    height: 16px;
    flex-shrink: 0;
  }

  .google-reviews-embed {
    min-height: 320px;
    max-height: 480px;
    overflow: auto;
  }

  .testimonial-nav {
    display: flex;
    align-items: center;
    gap: 0.45rem;
    flex-shrink: 0;
    margin: 0;
  }

  .testimonial-nav .swiper-button-prev,
  .testimonial-nav .swiper-button-next {
    position: static;
    width: 38px;
    height: 38px;
    margin: 0;
    border-radius: 50%;
    background: #fff;
    border: 1px solid #e5e7eb;
    color: #dc3545;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.06);
  }

  .testimonial-nav .swiper-button-prev::after,
  .testimonial-nav .swiper-button-next::after {
    font-size: 13px;
    font-weight: 700;
  }

  .testimonial-nav .swiper-button-prev:hover,
  .testimonial-nav .swiper-button-next:hover {
    background: #dc3545;
    border-color: #dc3545;
    color: #fff;
  }

  .testimonial-nav .swiper-button-disabled {
    opacity: 0.35;
    pointer-events: none;
  }

  @media (max-width: 575px) {
    .testimonial-title-row {
      align-items: flex-start;
    }

    .testimonial-title {
      font-size: 1.28rem;
    }

    .testimonial-nav {
      margin-top: 0.15rem;
    }

    .testimonial-nav .swiper-button-prev,
    .testimonial-nav .swiper-button-next {
      width: 34px;
      height: 34px;
    }
  }
</style>
@php
  $driver = config('google-reviews.driver', 'embed');
  $embedId = config('google-reviews.embed.id');
  $embedProvider = config('google-reviews.embed.provider', 'sociablekit');
  $useEmbed = $driver === 'embed' && filled($embedId);

  $reviewsPayload = $googleReviews ?? ['source' => 'fallback', 'rating' => 5, 'total' => 0, 'reviews' => [], 'maps_url' => null];
  $reviews = $reviewsPayload['reviews'] ?? [];
  $overallRating = $reviewsPayload['rating'] ?? null;
  $totalReviews = $reviewsPayload['total'] ?? count($reviews);
  $mapsUrl = $reviewsPayload['maps_url'] ?? config('google-reviews.maps_url');
  $fromGoogle = in_array($reviewsPayload['source'] ?? '', ['business_profile', 'places', 'sociablekit'], true) || $useEmbed;
@endphp
<section id="testimonials" class="py-5" style="background-color: #f5f5f5;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6" data-aos="fade-up">
        @if($useEmbed)
          <span class="testimonial-eyebrow">{{ $fromGoogle ? 'Google Reviews' : 'Our Testimonial' }}</span>
          <h2 class="testimonial-title">
            Why Students Love <span>Learning</span> Quran with&nbsp;Us
          </h2>
          <div class="google-reviews-embed mb-3">
            @if($embedProvider === 'elfsight')
              <script src="https://static.elfsight.com/platform/platform.js" async></script>
              <div class="elfsight-app-{{ $embedId }}" data-elfsight-app-lazy></div>
            @else
              {{-- SociableKIT free Google reviews widget --}}
              <div class="sk-ww-google-reviews" data-embed-id="{{ $embedId }}"></div>
              <script src="https://widgets.sociablekit.com/google-reviews/widget.js" defer></script>
            @endif
          </div>

          @if($mapsUrl)
            <div class="google-reviews-link-wrap">
              <a href="{{ $mapsUrl }}" target="_blank" rel="noopener noreferrer" class="google-reviews-link">
                See all reviews on Google
                <span aria-hidden="true">→</span>
              </a>
            </div>
          @endif
        @else
          <div class="testimonial-head">
            <span class="testimonial-eyebrow">{{ $fromGoogle ? 'Google Reviews' : 'Our Testimonial' }}</span>
            <div class="testimonial-title-row">
              <h2 class="testimonial-title">
                Why Students Love <span>Learning</span> Quran with&nbsp;Us
              </h2>
              <div class="testimonial-nav">
                <div class="swiper-button-prev testimonial-prev" aria-label="Previous review"></div>
                <div class="swiper-button-next testimonial-next" aria-label="Next review"></div>
              </div>
            </div>
            @if($fromGoogle && $overallRating)
              <div class="google-review-badge">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                  <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                  <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                  <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                </svg>
                <strong>{{ number_format((float) $overallRating, 1) }}</strong>
                <span style="color: #ffc107;">{{ str_repeat('★', (int) round($overallRating)) }}</span>
                <span>based on {{ number_format((int) $totalReviews) }} Google reviews</span>
              </div>
            @endif
          </div>

          <div class="swiper testimonial-slider">
            <div class="swiper-wrapper">
              @forelse($reviews as $review)
                @php
                  $rating = (int) ($review['rating'] ?? 5);
                  $author = trim(strip_tags((string) ($review['author'] ?? 'Google User'))) ?: 'Google User';
                  $photo = $review['photo'] ?? null;
                  $reviewText = trim(strip_tags(html_entity_decode((string) ($review['text'] ?? ''), ENT_QUOTES | ENT_HTML5, 'UTF-8')));
                  $initial = mb_strtoupper(mb_substr($author, 0, 1));
                @endphp
                <div class="swiper-slide">
                  <div class="testimonial-card p-4 rounded shadow bg-white">
                    <div class="rating mb-3 d-flex align-items-center justify-content-between">
                      <span class="stars" style="color: #ffc107; font-size: 1.5rem;">{{ str_repeat('★', $rating) }}{{ str_repeat('☆', max(0, 5 - $rating)) }}</span>
                      @if($fromGoogle)
                        <svg viewBox="0 0 24 24" width="18" height="18" aria-label="Google review">
                          <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                          <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                          <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                          <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                        </svg>
                      @endif
                    </div>
                    <p class="mb-4">{{ \Illuminate\Support\Str::limit($reviewText, 220) }}</p>
                    <div class="d-flex align-items-center">
                      <div class="position-relative review-avatar" style="width: 50px; height: 50px; flex-shrink: 0; overflow: hidden; border-radius: 50%;">
                        <div class="rounded-circle d-flex align-items-center justify-content-center text-white fw-bold review-avatar-fallback"
                          style="width: 50px; height: 50px; background: #4285F4; font-size: 1.25rem;">
                          {{ $initial }}
                        </div>
                        @if($photo)
                          <img src="{{ $photo }}" alt="" class="rounded-circle review-avatar-img"
                            style="position: absolute; inset: 0; width: 50px; height: 50px; object-fit: cover;"
                            loading="lazy" referrerpolicy="no-referrer"
                            onerror="this.remove()">
                        @endif
                      </div>
                      <div class="ms-3">
                        <h3 class="mb-0" style="font-size: 1.1rem;">{{ $author }}</h3>
                      </div>
                    </div>
                  </div>
                </div>
              @empty
                <div class="swiper-slide">
                  <div class="testimonial-card p-4 rounded shadow bg-white">
                    <p class="mb-0">
                      @if($driver === 'embed')
                        Add your free SociableKIT embed ID to <code>GOOGLE_REVIEWS_EMBED_ID</code> in <code>.env</code>.
                      @else
                        Reviews will appear here once Google is connected.
                      @endif
                    </p>
                  </div>
                </div>
              @endforelse
            </div>
            <div class="swiper-pagination"></div>
          </div>

          @if($mapsUrl)
            <div class="google-reviews-link-wrap">
              <a href="{{ $mapsUrl }}" target="_blank" rel="noopener noreferrer" class="google-reviews-link">
                See all reviews on Google
                <span aria-hidden="true">→</span>
              </a>
            </div>
          @endif

          <script>
            setTimeout(function() {
              const swiperContainer = document.querySelector('.testimonial-slider');
              const pagination = document.querySelector('.swiper-pagination');
              if (swiperContainer && !swiperContainer.swiper && pagination) {
                pagination.style.display = 'none';
              }
            }, 3000);
          </script>
        @endif
      </div>

      <div class="col-lg-6 text-center position-relative" data-aos="fade-up" data-aos-delay="200">
        <img src="{{ asset('assets/img/ai/happystudent.webp') }}" alt="quran student" class="img-fluid rounded"
          style="max-height: 400px;" loading="lazy">
        <div
          class="badge-card position-absolute bottom-0 start-50 translate-middle-x bg-white shadow p-3 rounded d-flex align-items-center"
          style="margin-bottom: -30px;">
          <i class="bi bi-mortarboard text-danger" style="font-size: 2rem;"></i>
          <div class="ms-3 text-start">
            @if($fromGoogle && !$useEmbed && $totalReviews)
              <h4 class="mb-0 text-danger">{{ number_format((int) $totalReviews) }}+</h4>
              <p class="mb-0">Google Reviews</p>
            @else
              <h4 class="mb-0 text-danger">400+</h4>
              <p class="mb-0">Satisfied Students</p>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
