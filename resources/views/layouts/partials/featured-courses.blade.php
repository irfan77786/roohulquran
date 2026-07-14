@include('layouts.partials.courses-section-styles')

<!-- Courses Section -->
<section id="courses" class="courses section courses-elegant">

    <!-- Section Title -->
    <div class="container section-title text-center" data-aos="fade-up">
        <span class="courses-eyebrow">Popular Quran Courses</span>
        <h2 class="courses-heading">Our Featured Courses</h2>
        <span class="courses-sub">Explore our expertly designed Quran courses, including Tajweed, Hifz, and Quran
            translation. Each course is
            tailored to help you achieve your learning goals with ease and excellence.</span>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="course-wrapper">

            <article class="course-card" data-aos="fade-up" data-aos-delay="100">
                <div class="course-image">
                    <span class="badge-level">Intermediate</span>
                    <img src="{{ asset('assets/img/ai/course-1.webp') }}" alt="memorize quran online"
                        loading="lazy" width="400" height="260" />
                </div>
                <div class="course-info">
                    <div class="course-meta">
                        <span><i class="bi bi-person-video" aria-hidden="true"></i> 1 on 1 Session</span>
                        <span><i class="bi bi-clock" aria-hidden="true"></i> Flexible Timing</span>
                    </div>
                    <h3 class="title"><a href="{{ route('quran.memorization') }}">Hifz Quran Online</a></h3>
                    <p class="description">Memorizing the Holy Quran is a spiritual and physical program. It’s a
                        miracle.</p>
                    <a href="{{ route('quran.memorization') }}" class="course-cta">
                        Start Free Trial <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </article>

            <article class="course-card" data-aos="fade-up" data-aos-delay="150">
                <div class="course-image">
                    <span class="badge-level">Beginner</span>
                    <img src="{{ asset('assets/img/ai/course-2.webp') }}" alt="noorani qaidah class online"
                        loading="lazy" width="400" height="260" />
                </div>
                <div class="course-info">
                    <div class="course-meta">
                        <span><i class="bi bi-person-video" aria-hidden="true"></i> 1 on 1 Session</span>
                        <span><i class="bi bi-clock" aria-hidden="true"></i> Flexible Timing</span>
                    </div>
                    <h3 class="title"><a href="{{ route('quran.recitation') }}">Learn Noorani Qaida Online</a></h3>
                    <p class="description">For the purpose of learning the basics of tajweed rules, one has to
                        learn this
                        booklet</p>
                    <a href="{{ route('quran.recitation') }}" class="course-cta">
                        Start Free Trial <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </article>

            <article class="course-card" data-aos="fade-up" data-aos-delay="200">
                <div class="course-image">
                    <span class="badge-level">Advance</span>
                    <img src="{{ asset('assets/img/ai/course-3.webp') }}" alt="Quran reading with Tajweed"
                        loading="lazy" width="400" height="260" />
                </div>
                <div class="course-info">
                    <div class="course-meta">
                        <span><i class="bi bi-person-video" aria-hidden="true"></i> 1 on 1 Session</span>
                        <span><i class="bi bi-clock" aria-hidden="true"></i> Flexible Timing</span>
                    </div>
                    <h3 class="title"><a href="{{ route('quran.tajweed') }}">Quran with Tajweed Course</a></h3>
                    <p class="description">Quran reading with Tajweed has immense significance in preservation of
                        Quran</p>
                    <a href="{{ route('quran.tajweed') }}" class="course-cta">
                        Start Free Trial <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </article>

            <article class="course-card" data-aos="fade-up" data-aos-delay="250">
                <div class="course-image">
                    <span class="badge-level">Advance</span>
                    <img src="{{ asset('assets/img/ai/course-4.webp') }}" alt="Online Quran Classes for Kids"
                        loading="lazy" width="400" height="260" />
                </div>
                <div class="course-info">
                    <div class="course-meta">
                        <span><i class="bi bi-person-video" aria-hidden="true"></i> 1 on 1 Session</span>
                        <span><i class="bi bi-clock" aria-hidden="true"></i> Flexible Timing</span>
                    </div>
                    <h3 class="title"><a href="{{ route('kids.classes') }}">Online Quran Classes for Kids</a></h3>
                    <p class="description">
                        Engaging and easy Quran lessons for kids with step-by-step guidance and Tajweed.
                    </p>
                    <a href="{{ route('kids.classes') }}" class="course-cta">
                        Start Free Trial <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </article>

        </div>
    </div>

</section><!-- /Courses Section -->
