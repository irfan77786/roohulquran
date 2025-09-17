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


<section id="video" class="section video-section" style="background-color: #f9f9f9; padding: 50px 0;">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 style="color:#44137c;"><b>Watch Our Introduction</b></h2>
        <p class="mb-4">
          Learn more about our mission, vision, and how we provide high-quality Quran education to students worldwide.
        </p>
        <div class="video-container">
          <div class="youtube-lazy-wrapper" data-video-id="YZYoqH3RsGk">
            <div class="youtube-thumbnail">
              <div class="youtube-play-button"></div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "VideoObject",
    "name": "Rooh Ul Quran Academy Introduction",
    "description": "Learn more about our mission, vision, and how we provide high-quality Quran education to students worldwide.",
    "thumbnailUrl": "https://img.youtube.com/vi/YZYoqH3RsGk/maxresdefault.jpg",
    "uploadDate": "2024-01-01T08:00:00+00:00",
    "duration": "PT2M30S",
    "contentUrl": "https://www.youtube.com/watch?v=YZYoqH3RsGk",
    "embedUrl": "https://www.youtube.com/embed/YZYoqH3RsGk"
  }
</script>


{{-- youutbe js --}}

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const wrappers = document.querySelectorAll('.youtube-lazy-wrapper');

    wrappers.forEach(wrapper => {
      const videoId = wrapper.dataset.videoId;
      const thumbDiv = wrapper.querySelector('.youtube-thumbnail');

      // Set thumbnail background with fallback if maxres is unavailable
      const setThumbnailBackground = (url) => {
        thumbDiv.style.backgroundImage = `url(${url})`;
      };

      const maxResUrl = `https://img.youtube.com/vi/${videoId}/maxresdefault.jpg`;
      const hqUrl = `https://img.youtube.com/vi/${videoId}/hqdefault.jpg`;

      const testImage = new Image();
      testImage.onload = function () {
        // Some videos return a 120x90 placeholder even though "load" fires; guard by size
        if ((this.naturalWidth || 0) < 400 || (this.naturalHeight || 0) < 225) {
          setThumbnailBackground(hqUrl);
        } else {
          setThumbnailBackground(maxResUrl);
        }
      };
      testImage.onerror = function () {
        setThumbnailBackground(hqUrl);
      };
      testImage.src = maxResUrl;

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