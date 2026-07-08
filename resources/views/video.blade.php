@extends('main')

@section('title')
Watch Our Introduction Video - Rooh Ul Quran Academy
@endsection

@section('meta_description')
Watch our introduction video to learn about Rooh Ul Quran Academy's mission, vision, and teaching methodology. Discover how we provide high-quality online Quran education to students worldwide.
@endsection

@section('meta_keywords')
rooh ul quran academy video, introduction video, online quran classes video, islamic education video, quran learning video
@endsection

@section('content')

<style>
    .video-hero {
        background-color: #F6F3EE;
        background-image: url('{{ asset('assets/img/hero-quran-banner.png') }}');
        background-size: cover;
        background-position: center bottom;
        background-repeat: no-repeat;
        color: #122F2A;
        padding: 70px 0 80px;
        min-height: 580px;
        text-align: center;
        position: relative;
    }

    @media (max-width: 991px) {
        .video-hero {
            padding: 50px 0 60px;
            min-height: auto;
            background-position: 70% bottom;
        }
    }
    
    .video-container-main {
        max-width: 800px;
        margin: 0 auto;
        background: white;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    
    .video-wrapper {
        position: relative;
        width: 100%;
        aspect-ratio: 16/9;
        border-radius: 10px;
        overflow: hidden;
        background: #000;
    }
    
    .video-info {
        margin-top: 30px;
        text-align: left;
    }
    
    .video-meta {
        display: flex;
        gap: 20px;
        margin-bottom: 20px;
        flex-wrap: wrap;
    }
    
    .meta-item {
        display: flex;
        align-items: center;
        gap: 8px;
        color: #666;
    }
    
    .meta-item i {
        color: #122F2A;
    }
</style>

<!-- Video Hero Section -->
<section class="video-hero">
    <div class="container">
        <h1 class="display-4 fw-bold mb-4">Watch Our Introduction Video</h1>
        <p class="lead">Learn about our mission, vision, and commitment to providing high-quality Quran education</p>
    </div>
</section>

<!-- Main Video Section -->
<section class="py-5" itemscope itemtype="https://schema.org/VideoObject">
    <div class="container">
        <div class="video-container-main">
            <div class="video-wrapper" itemprop="video">
                <iframe 
                    src="https://www.youtube.com/embed/YZYoqH3RsGk?rel=0&modestbranding=1" 
                    title="Rooh Ul Quran Academy Introduction Video"
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen
                    style="width: 100%; height: 100%; border: none;">
                </iframe>
            </div>
            
            <div class="video-info">
                <h2 itemprop="name" class="h3 mb-3">Rooh Ul Quran Academy Introduction - Online Quran Classes</h2>
                <p itemprop="description" class="text-muted mb-4">
                    Learn more about Rooh Ul Quran Academy's mission, vision, and how we provide high-quality Quran education to students worldwide. Watch our introduction video to understand our teaching methods and approach to online Quran learning.
                </p>
                
                <div class="video-meta">
                    <div class="meta-item">
                        <i class="bi bi-clock"></i>
                        <span>Duration: 2 minutes 30 seconds</span>
                    </div>
                    <div class="meta-item">
                        <i class="bi bi-calendar"></i>
                        <span>Published: January 1, 2024</span>
                    </div>
                    <div class="meta-item">
                        <i class="bi bi-globe"></i>
                        <span>Language: English</span>
                    </div>
                    <div class="meta-item">
                        <i class="bi bi-tag"></i>
                        <span>Category: Educational</span>
                    </div>
                </div>
                
                <div class="mt-4">
                    <h4>About This Video</h4>
                    <p>This introduction video showcases Rooh Ul Quran Academy's commitment to providing accessible, high-quality Islamic education. Learn about our:</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle text-success me-2"></i>Expert Quran teachers and tutors</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Interactive learning methodology</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Flexible scheduling for students worldwide</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Comprehensive Quran courses (Tajweed, Hifz, Tafseer)</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Modern technology integration</li>
                    </ul>
                </div>
                
                <div class="mt-4">
                    <a href="{{ route('home.contact.us') }}" class="btn btn-primary btn-lg me-3">
                        <i class="bi bi-telephone me-2"></i>Get Free Trial Class
                    </a>
                    <a href="{{ route('home') }}" class="btn btn-outline-primary btn-lg">
                        <i class="bi bi-house me-2"></i>Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Structured Data -->
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
  },
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://roohulquranacademy.com/video"
  }
}
</script>

@endsection
