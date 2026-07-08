@php
    $heroTitle = $heroTitle ?? 'Transform Your Quranic Journey';
    $heroSubtitle = $heroSubtitle ?? 'Join Rooh ul Quran Academy - Where Expert Tutors Meet Modern Technology.<br>Experience personalized Quran learning from the comfort of your home.';
    $heroFeatures = $heroFeatures ?? [
        'One-on-One Live Classes with Certified Teachers',
        'Flexible Schedules for Kids, Adults & Families',
        'Master Tajweed with Interactive Learning Tools',
        'Specialized Hifz Program with Progress Tracking',
    ];
    $heroCtaText = $heroCtaText ?? 'Start Learning Today';
    $heroCtaUrl = $heroCtaUrl ?? route('home.contact.us');
    $formTitle = $formTitle ?? 'Free Trial Class';
    $formSubtitle = $formSubtitle ?? 'Start Your Quranic Journey Today';
    $formButtonText = $formButtonText ?? 'Get Free Trial Class';
    $heroImageAlt = $heroImageAlt ?? 'Online Quran Classes';
@endphp

<section id="hero" class="hero section hero-tauheed">
    <div class="container">
        <div class="row align-items-center g-4 hero-tauheed-row">
            <div class="col-lg-5 col-md-12 hero-form-col">
                <div class="form-container">
                    <div class="text-center mb-2">
                        <h3 class="form-title">{{ $formTitle }}</h3>
                        <p class="form-subtitle mb-0">{{ $formSubtitle }}</p>
                    </div>

                    <form id="trial-form">
                        @csrf
                        <input type="text" name="website" class="d-none" tabindex="-1" autocomplete="off">
                        <input type="hidden" name="form_started_at" value="{{ time() }}">
                        @include('layouts.partials.public-form-fields')
                        @include('layouts.partials.form-turnstile')

                        <button type="submit" class="btn w-100 rounded-pill" id="submit-btn">
                            <span id="btn-text" style="color: white !important">{{ $formButtonText }}</span>
                            <span id="btn-loading" class="spinner-border spinner-border-sm d-none"></span>
                        </button>
                    </form>
                </div>
            </div>

            <div class="col-lg-7 col-md-12 text-start hero-content-col">
                <h1 class="hero-heading">{{ $heroTitle }}</h1>
                <p class="hero-subtext">{!! $heroSubtitle !!}</p>

                <ul class="hero-features text-start mt-3">
                    @foreach ($heroFeatures as $feature)
                        <li>
                            <span class="check-icon">✓</span>
                            <span>{{ $feature }}</span>
                        </li>
                    @endforeach
                </ul>

                <a href="{{ $heroCtaUrl }}" class="btn-get-started mt-4 d-inline-block">{{ $heroCtaText }}</a>
            </div>
        </div>
    </div>
</section>
