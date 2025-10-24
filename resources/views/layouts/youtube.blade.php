<style>
  .youtube-lazy-wrapper {
    position: relative;
    width: 100%;
    max-width: 100%;
    aspect-ratio: 16 / 9;
    /* Perfect for responsive height */
    border-radius: 10px;
    overflow: hidden;
    background-color: #000;
  }

  .youtube-thumbnail {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    cursor: pointer;
    transition: opacity 0.3s ease;
    z-index: 2;
  }

  .youtube-play-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 64px;
    height: 64px;
    background: url('/assets/img/icons/play-button.png') no-repeat center;
    background-size: contain;
    opacity: 0.9;
    z-index: 3;
  }


  .youtube-lazy-wrapper iframe {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    border: none;
  }
</style>


<section id="video" class="section video-section" style="background-color: #f9f9f9; padding: 50px 0;" itemscope itemtype="https://schema.org/VideoObject">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 style="color:#44137c;" itemprop="name"><b>Watch Our Introduction Video</b></h2>
        <p class="mb-4" itemprop="description">
          Learn more about our mission, vision, and how we provide high-quality Quran education to students worldwide. This introduction video explains our teaching methodology and commitment to Islamic education.
        </p>
        <div class="video-container">
          <div class="youtube-lazy-wrapper" data-video-id="YZYoqH3RsGk" data-local-thumb="{{asset('assets/img/video-thumb.webp')}}" itemprop="video">
            <div class="youtube-thumbnail">
              <div class="youtube-play-button"></div>
            </div>
          </div>
        </div>
        {{-- <div class="mt-3">
          <p class="text-muted small">
            <strong>Duration:</strong> 2 minutes 30 seconds | 
            <strong>Language:</strong> English | 
            <strong>Category:</strong> Educational
          </p>
          <a href="{{ route('home.video') }}" class="btn btn-outline-primary btn-sm mt-2">
            <i class="bi bi-play-circle me-1"></i>Watch Full Video Page
          </a>
        </div> --}}
      </div>
    </div>
  </div>
</section>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "VideoObject",
  "name": "Rooh Ul Quran Academy Introduction - Online Quran Classes",
  "description": "Learn more about Rooh Ul Quran Academy's mission, vision, and how we provide high-quality Quran education to students worldwide. Watch our introduction video to understand our teaching methods and approach to online Quran learning.",
  "thumbnailUrl": "https://img.youtube.com/vi/YZYoqH3RsGk/maxresdefault.jpg",
  "uploadDate": "2024-01-01T08:00:00+00:00",
  "duration": "PT2M30S",
  "contentUrl": "https://www.youtube.com/watch?v=YZYoqH3RsGk",
  "embedUrl": "https://www.youtube.com/embed/YZYoqH3RsGk",
  "url": "https://www.youtube.com/watch?v=YZYoqH3RsGk",
  "publisher": {
    "@type": "Organization",
    "name": "Rooh Ul Quran Academy",
    "url": "https://roohulquranacademy.com",
    "logo": {
      "@type": "ImageObject",
      "url": "https://roohulquranacademy.com/assets/img/tab-logo.webp"
    }
  },
  "author": {
    "@type": "Organization",
    "name": "Rooh Ul Quran Academy"
  },
  "keywords": ["online quran classes", "quran academy", "islamic education", "quran learning", "tajweed", "hifz"],
  "genre": "Educational",
  "inLanguage": "en",
  "isAccessibleForFree": true,
  "interactionStatistic": {
    "@type": "InteractionCounter",
    "interactionType": "https://schema.org/WatchAction",
    "userInteractionCount": "1000"
  }
}
</script>


{{-- youutbe js --}}

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const wrappers = document.querySelectorAll('.youtube-lazy-wrapper');

    wrappers.forEach(wrapper => {
      const videoId = wrapper.dataset.videoId;
      const thumbDiv = wrapper.querySelector('.youtube-thumbnail');

      // Set thumbnail background prioritizing locally cached image
      const setThumbnailBackground = (url) => {
        thumbDiv.style.backgroundImage = `url(${url})`;
      };

      const localUrl = wrapper.dataset.localThumb;
      const maxResUrl = `https://img.youtube.com/vi/${videoId}/maxresdefault.jpg`;
      const hqUrl = `https://img.youtube.com/vi/${videoId}/hqdefault.jpg`;

      const tryImage = (url, onFail) => {
        const img = new Image();
        img.onload = function () {
          // Guard against tiny placeholder
          if ((this.naturalWidth || 0) < 400 || (this.naturalHeight || 0) < 225) {
            return onFail && onFail();
          }
          setThumbnailBackground(url);
        };
        img.onerror = function () { onFail && onFail(); };
        img.src = url;
      };

      if (localUrl) {
        // Try local → YouTube maxres → YouTube hq
        tryImage(localUrl, () => tryImage(maxResUrl, () => setThumbnailBackground(hqUrl)));
      } else {
        tryImage(maxResUrl, () => setThumbnailBackground(hqUrl));
      }

      // On click, replace with iframe
      thumbDiv.addEventListener('click', function () {
        const iframe = document.createElement('iframe');
        iframe.setAttribute('src', `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0`);
        iframe.setAttribute('title', 'YouTube video player');
        iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
        iframe.setAttribute('allowfullscreen', '');

        wrapper.innerHTML = ''; // Clear everything
        wrapper.appendChild(iframe);
      });
    });
  });
</script>