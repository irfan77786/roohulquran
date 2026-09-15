@extends('main')

@php
    $canonical = rtrim((string) config('app.sitemap_base_url', 'https://roohulquranacademy.com'), '/') . $location['path'];
    $city = $copy['city'];
    $region = $copy['region'];
@endphp

@section('title', 'Online Quran Classes in ' . $city . ' | Rooh Ul Quran Academy')

@section('meta')
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
@endsection

@section('og_title', 'Online Quran Classes in ' . $city . ' — Tajweed, Hifz & Qaida')

@section('meta_description',
    'Join live 1-to-1 online Quran classes in ' . $city . '. Learn Noorani Qaida, Tajweed and Hifz with male or female tutors on UK time. Book a free trial with Rooh Ul Quran Academy.')

@section('meta_keywords',
    'online quran classes ' . $city . ', quran academy ' . $city . ', learn quran ' . $region . ', tajweed classes ' . $city . ', hifz online ' . $city . ', female quran tutor ' . $city)

@push('styles')
@include('layouts.partials.hero-banner-styles')
@include('layouts.partials.teacher-highlights-styles')
@include('layouts.partials.academy-intro-styles')
@include('layouts.partials.counts-section-styles')
@include('layouts.partials.why-us-styles')
<link rel="stylesheet" href="{{ asset('assets/css/location-landing.css') }}">
@endpush

@section('content')
<nav class="loc-crumb container" aria-label="Breadcrumb">
    <a href="{{ route('home.index') }}">Home</a>
    <span aria-hidden="true"> / </span>
    <span>UK Quran classes</span>
    <span aria-hidden="true"> / </span>
    <span>{{ $city }}</span>
</nav>

@include('layouts.partials.hero-banner', [
    'heroTitle' => $copy['heroTitle'],
    'heroSubtitle' => $copy['heroSubtitle'],
    'heroFeatures' => $copy['heroFeatures'],
    'heroCtaText' => 'Book a free trial',
    'heroCtaUrl' => '#contact',
    'formTitle' => 'Free Trial Class',
    'formSubtitle' => 'UK-time slot for ' . $city,
    'formButtonText' => 'Get Free Trial Class',
    'heroImageAlt' => 'Online Quran classes in ' . $city,
])

<section id="teacher-highlights">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <article class="teacher-card" style="background-image: url('{{ asset('assets/img/ai/about.webp') }}');">
                    <div class="teacher-card-body">
                        <h3>Professional Quran Teachers</h3>
                        <p>
                            Students in {{ $city }} learn Tajweed, Nazra, and Hifz in live one-to-one sessions.
                            Your tutor stays with you each week so progress is measured, not guessed.
                        </p>
                        <a href="{{ route('teachers') }}" class="teacher-card-btn teacher-card-btn--accent">
                            Meet our teachers
                            <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </article>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="180">
                <article class="teacher-card" style="background-image: url('{{ asset('assets/img/ai/teachers.webp') }}');">
                    <div class="teacher-card-body">
                        <h3>Female Quran Teachers</h3>
                        <p>
                            Sisters and children in {{ $city }} can request a female tutor for a comfortable
                            private class at home, with flexible UK evenings and weekends.
                        </p>
                        <a href="#contact" class="teacher-card-btn teacher-card-btn--light">
                            Enroll now
                            <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section id="academy-intro">
    <div class="container">
        <div class="row align-items-stretch g-4 g-lg-5">
            <div class="col-lg-5 intro-image-col" data-aos="fade-right" data-aos-delay="100">
                <span class="intro-image-dot" aria-hidden="true"></span>
                <span class="intro-image-accent" aria-hidden="true"></span>
                <div class="intro-image-frame">
                    <img src="{{ asset('assets/img/child-reading-quran.png') }}" alt="Child learning Quran online in {{ $city }}"
                        loading="lazy" width="600" height="480">
                    <div class="intro-image-badge">
                        <i class="bi bi-journal-richtext" aria-hidden="true"></i>
                        <div>
                            <strong>Live classes in {{ $city }}</strong>
                            <span>Kids, sisters &amp; adults</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 intro-content" data-aos="fade-left" data-aos-delay="150">
                <span class="intro-eyebrow">Quran classes in {{ $city }}</span>
                <div class="intro-panel">
                    <h2 class="fw-bold">{{ $copy['introTitle'] }}</h2>
                    <p>{{ $copy['intro'] }}</p>
                    <p>{{ $copy['need'] }}</p>
                    <p>{{ $copy['audienceLine'] }}</p>
                    <a href="#contact" class="intro-enroll">
                        Book your free trial in {{ $city }}
                        <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="intro-panel intro-block-secondary">
                    <h2 class="fw-bold">{{ $copy['focus']['title'] }}</h2>
                    <p>{{ $copy['focus']['body'] }}</p>
                    <p>{{ $copy['teaching'] }}</p>
                </div>
                <div class="intro-actions">
                    <a href="#courses" class="intro-discover-btn">
                        View courses
                        <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
                    </a>
                    <div class="intro-phone-block">
                        <span class="intro-phone-icon" aria-hidden="true">
                            <i class="bi bi-telephone-fill"></i>
                        </span>
                        <div class="intro-phone-text">
                            <span class="intro-phone-label">Call us any time:</span>
                            <a href="tel:+923344066429" class="intro-phone-number">+92-334-4066429</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="loc-steps" aria-labelledby="loc-steps-heading">
    <div class="container">
        <div class="text-center mb-4">
            <span class="loc-eyebrow">How it works</span>
            <h2 id="loc-steps-heading">Start Quran class from home in {{ $city }}</h2>
        </div>
        <div class="row g-4">
            @foreach ($copy['steps'] as $i => $step)
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="{{ ($i + 1) * 80 }}">
                    <article class="loc-step-card">
                        <span class="loc-step-num">{{ $i + 1 }}</span>
                        <h3>{{ $step['title'] }}</h3>
                        <p>{{ $step['text'] }}</p>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>

@include('layouts.partials.featured-courses', [
    'coursesEyebrow' => 'Courses for ' . $city,
    'coursesHeading' => 'Qaida, Tajweed, Hifz & kids classes',
    'coursesSub' => 'Pick a path that matches the student in ' . $city . ' — then start with a free live trial on UK time.',
])

<section id="counts" class="section counts counts-tauheed counts-help-people-v1-shape1" aria-labelledby="counts-heading">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 stats-row">
            <div class="col-12 text-center">
                <h2 id="counts-heading" class="counts-heading">A trusted online Quran academy for {{ $city }}</h2>
                <p class="col-lg-7 mx-auto counts-lead">
                    {{ $copy['coverageBody'] }}
                </p>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="stats-item text-center w-100 h-100">
                    <span class="stats-icon" aria-hidden="true"><i class="bi bi-calendar-check"></i></span>
                    <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter add-plus stats-number"></span>
                    <p class="stats-label">Years</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="stats-item text-center w-100 h-100">
                    <span class="stats-icon" aria-hidden="true"><i class="bi bi-person-workspace"></i></span>
                    <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter add-plus stats-number"></span>
                    <p class="stats-label">Tutors</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="stats-item text-center w-100 h-100">
                    <span class="stats-icon" aria-hidden="true"><i class="bi bi-mortarboard"></i></span>
                    <span data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="1" class="purecounter add-plus stats-number"></span>
                    <p class="stats-label">Graduates</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="stats-item text-center w-100 h-100">
                    <span class="stats-icon" aria-hidden="true"><i class="bi bi-people"></i></span>
                    <span data-purecounter-start="0" data-purecounter-end="400" data-purecounter-duration="1" class="purecounter add-plus stats-number"></span>
                    <p class="stats-label">Students</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.youtube')

<section id="why-us" class="section why-us why-us-split">
    <div class="container">
        <div class="row align-items-start g-4 g-lg-5">
            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                <span class="why-eyebrow">Why families in {{ $city }} enrol</span>
                <h2 class="why-heading">Why choose Rooh Ul Quran Academy in {{ $city }}?</h2>
                <ul class="why-list">
                    @foreach ($copy['whyItems'] as $item)
                        <li>
                            <span class="check-icon" aria-hidden="true">✔</span>
                            <span><strong>{{ $item['title'] }}</strong> — {{ $item['text'] }}</span>
                        </li>
                    @endforeach
                </ul>
                <p class="why-closing">
                    Start with a <strong>free trial class</strong> and see how one-to-one teaching feels for your household in {{ $city }}.
                </p>
            </div>
            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="180">
                <aside class="why-courses-panel">
                    <h3>Our Quran Courses</h3>
                    <ul class="why-course-list">
                        <li>
                            <a href="{{ route('quran.recitation') }}" class="why-course-link is-active">
                                <span>Madani &amp; Noorani Qaida Course</span>
                                <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('beginner.classes') }}" class="why-course-link">
                                <span>Quran Reading Course</span>
                                <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('quran.tajweed') }}" class="why-course-link">
                                <span>Learn Quran With Tajweed</span>
                                <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('quran.memorization') }}" class="why-course-link">
                                <span>Quran Memorization</span>
                                <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('kids.classes') }}" class="why-course-link">
                                <span>Online Quran Classes for Kids</span>
                                <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('quran.tafseer') }}" class="why-course-link">
                                <span>Quran Translation And Tafseer</span>
                                <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>
</section>

@if (! empty($copy['areas']))
<section class="loc-areas" aria-labelledby="loc-areas-heading">
    <div class="container text-center">
        <span class="loc-eyebrow">{{ $region }}</span>
        <h2 id="loc-areas-heading">Students in {{ $city }} join from these areas</h2>
        <p class="loc-areas-lead">Live classes work from any quiet room with internet — useful when the school run or weather makes an extra evening trip hard.</p>
        <ul class="loc-chips">
            @foreach ($copy['areas'] as $area)
                <li>{{ $area }}</li>
            @endforeach
        </ul>
    </div>
</section>
@endif

<section id="faq" class="py-5 bg-light">
    <div class="container" data-aos="fade-up">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color:#122F2A;">Frequently asked questions — {{ $city }}</h2>
            <p class="text-muted">Practical answers for parents and students booking online Quran classes in {{ $city }}, {{ $region }}.</p>
        </div>
        <div class="accordion" id="locFaq">
            @foreach ($copy['faqs'] as $i => $faq)
                <div class="accordion-item mb-3 shadow-sm rounded">
                    <h3 class="accordion-header" id="loc-h-{{ $i }}">
                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#loc-c-{{ $i }}" aria-expanded="false" aria-controls="loc-c-{{ $i }}">
                            {{ $faq['q'] }}
                        </button>
                    </h3>
                    <div id="loc-c-{{ $i }}" class="accordion-collapse collapse" aria-labelledby="loc-h-{{ $i }}" data-bs-parent="#locFaq">
                        <div class="accordion-body">{{ $faq['a'] }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@include('layouts.testimonial')

@if (! empty($location['nearby']))
<section class="loc-nearby-band">
    <div class="container text-center">
        <h2>Also teaching nearby</h2>
        <p>If relatives live in another town, they can open their own class page:</p>
        <div class="loc-nearby-links">
            @foreach ($location['nearby'] as $near)
                <a href="{{ url($near['path']) }}">{{ $near['name'] }}</a>
            @endforeach
        </div>
    </div>
</section>
@endif

<section id="contact" class="contact-section position-relative">
    <div class="overlay"></div>
    <div class="container position-relative" style="z-index: 1;">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 text-white" data-aos="fade-up">
                <h2 class="mb-4" style="font-weight: bold; color: #f8f8f8;">Register your free online Quran class in {{ $city }}</h2>
                <ul class="list-unstyled">
                    <li class="mb-4 d-flex align-items-start">
                        <img src="{{ asset('assets/img/icons/pointing-up.avif') }}" alt="" class="me-3" style="width: 40px; height: 40px;" loading="lazy">
                        <div>
                            <h3 style="color: #1bd634; font-weight: bold;">Simple registration</h3>
                            <p>Send your name and phone. Tell us if the student in {{ $city }} needs Qaida, Tajweed, or Hifz.</p>
                        </div>
                    </li>
                    <li class="mb-4 d-flex align-items-start">
                        <img src="{{ asset('assets/img/icons/schedule.avif') }}" alt="" class="me-3" style="width: 40px; height: 40px;" loading="lazy">
                        <div>
                            <h3 style="color: #1bd634; font-weight: bold;">UK-time trial</h3>
                            <p>We arrange a trial in the evening or weekend slot your household can actually keep.</p>
                        </div>
                    </li>
                    <li class="mb-4 d-flex align-items-start">
                        <img src="{{ asset('assets/img/icons/koran.avif') }}" alt="" class="me-3" style="width: 40px; height: 40px;" loading="lazy">
                        <div>
                            <h3 style="color: #1bd634; font-weight: bold;">Start weekly classes</h3>
                            <p>After the trial we assign a tutor and a weekly plan for the student in {{ $city }}.</p>
                        </div>
                    </li>
                    <li class="d-flex align-items-start">
                        <img src="{{ asset('assets/img/icons/quality.avif') }}" alt="" class="me-3" style="width: 40px; height: 40px;" loading="lazy">
                        <div>
                            <h3 style="color: #1bd634; font-weight: bold;">Certificate on completion</h3>
                            <p>Finish the course with a certificate from Rooh Ul Quran Academy.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="200">
                <div class="contact-form bg-white p-4 shadow hover-popout" style="border: 2px solid #122F2A; border-radius: 20px;">
                    <h3 class="mb-4 text-center" style="color: #122F2A; font-weight: bold;">FREE TRIAL CLASS</h3>
                    <form id="trial-form-submit">
                        @csrf
                        <input type="text" name="website" class="d-none" tabindex="-1" autocomplete="off">
                        <input type="hidden" name="form_started_at" value="{{ time() }}">
                        @include('layouts.partials.public-form-fields', ['rounded' => true])
                        @include('layouts.partials.form-turnstile')
                        <button type="submit" class="btn w-100 rounded-pill" id="submit-btn" style="background-color: #FF5528; font-weight: bold;">
                            <span id="btn-text">Get Free Trial Class</span>
                            <span id="btn-loading" class="spinner-border spinner-border-sm d-none"></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'BreadcrumbList',
            '@id' => $canonical . '#breadcrumb',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => rtrim((string) config('app.sitemap_base_url', 'https://roohulquranacademy.com'), '/') . '/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Online Quran classes in ' . $city, 'item' => $canonical],
            ],
        ],
        [
            '@type' => 'EducationalOrganization',
            '@id' => $canonical . '#localoffer',
            'name' => 'Rooh Ul Quran Academy — Online Quran Classes in ' . $city,
            'url' => $canonical,
            'areaServed' => ['@type' => 'City', 'name' => $city, 'containedInPlace' => $copy['country']],
            'parentOrganization' => [
                '@type' => 'EducationalOrganization',
                'name' => 'Rooh Ul Quran Academy',
                'url' => rtrim((string) config('app.sitemap_base_url', 'https://roohulquranacademy.com'), '/') . '/',
            ],
            'description' => $copy['heroSubtitle'],
        ],
        [
            '@type' => 'FAQPage',
            '@id' => $canonical . '#faq',
            'mainEntity' => array_map(static function ($faq) {
                return [
                    '@type' => 'Question',
                    'name' => $faq['q'],
                    'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq['a']],
                ];
            }, $copy['faqs']),
        ],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>

@include('layouts.partials.trial-form-scripts')
@endsection
