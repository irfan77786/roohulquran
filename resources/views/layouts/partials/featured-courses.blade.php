@include('layouts.partials.courses-section-styles')

<!-- Courses Section -->
<section id="courses" class="courses section courses-elegant">

    <!-- Section Title -->
    <div class="container section-title text-center" data-aos="fade-up">
        <span class="courses-eyebrow">{{ $coursesEyebrow ?? 'Popular Quran Courses' }}</span>
        <h2 class="courses-heading">{{ $coursesHeading ?? 'Our Featured Courses' }}</h2>
        <span class="courses-sub">{{ $coursesSub ?? 'Explore our expertly designed Quran courses, including Madani Qaida, Tajweed, Memorization, Tafsir, and Ijazah. Each course is tailored to help you achieve your learning goals with ease and excellence.' }}</span>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="course-wrapper">

            <article class="course-card" data-aos="fade-up" data-aos-delay="100">
                <div class="course-image">
                    <span class="badge-level">Beginner</span>
                    <img src="{{ asset('assets/img/ai/course-2.webp') }}" alt="Madani Qaida Course online"
                        loading="lazy" width="400" height="260" />
                </div>
                <div class="course-info">
                    <div class="course-meta">
                        <span><i class="bi bi-person-video" aria-hidden="true"></i> 1 on 1 Session</span>
                        <span><i class="bi bi-clock" aria-hidden="true"></i> Flexible Timing</span>
                    </div>
                    <h3 class="title"><a href="{{ route('quran.recitation') }}">Madani Qaida Course</a></h3>
                    <p class="description">Build a strong start in Quran reading with our Madani Qaida Online Course.
                        Beginners learn Arabic letters, clear pronunciation, and basic Tajweed through simple,
                        kid-friendly lessons. Tutors at Rooh Ul Quran Academy guide you step by step, ideal if you are
                        starting fresh or refining the basics with flexible one-to-one classes.</p>
                    <a href="{{ route('quran.recitation') }}" class="course-cta">
                        Start Free Trial <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </article>

            <article class="course-card" data-aos="fade-up" data-aos-delay="150">
                <div class="course-image">
                    <span class="badge-level">Beginner</span>
                    <img src="{{ asset('assets/img/ai/course-4.webp') }}" alt="Quran Reading Course online"
                        loading="lazy" width="400" height="260" />
                </div>
                <div class="course-info">
                    <div class="course-meta">
                        <span><i class="bi bi-person-video" aria-hidden="true"></i> 1 on 1 Session</span>
                        <span><i class="bi bi-clock" aria-hidden="true"></i> Flexible Timing</span>
                    </div>
                    <h3 class="title"><a href="{{ route('beginner.classes') }}">Quran Reading Course</a></h3>
                    <p class="description">Our Online Quran Reading Course welcomes learners of every age and
                        background. Master reading foundations, accurate recitation, core Tajweed, and meanings through
                        translation, with flexible schedules and personal attention from caring instructors. Study from
                        anywhere and grow spiritually as you improve fluency.</p>
                    <a href="{{ route('beginner.classes') }}" class="course-cta">
                        Start Free Trial <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </article>

            <article class="course-card" data-aos="fade-up" data-aos-delay="200">
                <div class="course-image">
                    <span class="badge-level">Intermediate</span>
                    <img src="{{ asset('assets/img/ai/course-3.webp') }}" alt="Learn Quran With Tajweed"
                        loading="lazy" width="400" height="260" />
                </div>
                <div class="course-info">
                    <div class="course-meta">
                        <span><i class="bi bi-person-video" aria-hidden="true"></i> 1 on 1 Session</span>
                        <span><i class="bi bi-clock" aria-hidden="true"></i> Flexible Timing</span>
                    </div>
                    <h3 class="title"><a href="{{ route('quran.tajweed') }}">Learn Quran With Tajweed</a></h3>
                    <p class="description">Become skilled at Quranic recitation with precise letter pronunciation,
                        rules, and characteristics, without exaggeration or neglect. Get personalized guidance, helpful
                        audio-visual support, and schedules that fit your routine. Enroll to strengthen accuracy and
                        confidence in every ayah.</p>
                    <a href="{{ route('quran.tajweed') }}" class="course-cta">
                        Start Free Trial <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </article>

            <article class="course-card" data-aos="fade-up" data-aos-delay="250">
                <div class="course-image">
                    <span class="badge-level">Advanced</span>
                    <img src="{{ asset('assets/img/ai/course-1.webp') }}" alt="Online Quran Memorization Hifz"
                        loading="lazy" width="400" height="260" />
                </div>
                <div class="course-info">
                    <div class="course-meta">
                        <span><i class="bi bi-person-video" aria-hidden="true"></i> 1 on 1 Session</span>
                        <span><i class="bi bi-clock" aria-hidden="true"></i> Flexible Timing</span>
                    </div>
                    <h3 class="title"><a href="{{ route('quran.memorization') }}">Online Quran Memorization</a></h3>
                    <p class="description">Memorize the Holy Quran with proven Hifz methods and experienced teachers.
                        Dedicated mentors support you at every stage so retention stays accurate and manageable.
                        Structured revision and live sessions at Rooh Ul Quran Academy make memorization achievable for
                        students worldwide.</p>
                    <a href="{{ route('quran.memorization') }}" class="course-cta">
                        Start Free Trial <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </article>

            <article class="course-card" data-aos="fade-up" data-aos-delay="300">
                <div class="course-image">
                    <span class="badge-level">Intermediate</span>
                    <img src="{{ asset('assets/img/ai/course-3.webp') }}" alt="Online Quran Tafsir Translation"
                        loading="lazy" width="400" height="260" />
                </div>
                <div class="course-info">
                    <div class="course-meta">
                        <span><i class="bi bi-person-video" aria-hidden="true"></i> 1 on 1 Session</span>
                        <span><i class="bi bi-clock" aria-hidden="true"></i> Flexible Timing</span>
                    </div>
                    <h3 class="title"><a href="{{ route('quran.tafseer') }}">Online Quran Tafsir - Translation</a></h3>
                    <p class="description">Understanding Islam rests on grasping Allah’s words. Without translation and
                        Tafsir, many verses stay unclear. Our interactive Translation &amp; Tafsir course covers
                        foundations, Surah study, practical applications, and expert guidance, with flexible scheduling
                        so you can apply Quranic teachings with clarity.</p>
                    <a href="{{ route('quran.tafseer') }}" class="course-cta">
                        Start Free Trial <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </article>

            <article class="course-card" data-aos="fade-up" data-aos-delay="350">
                <div class="course-image">
                    <span class="badge-level">Advanced</span>
                    <img src="{{ asset('assets/img/ai/course-1.webp') }}" alt="Online Ijazah Course"
                        loading="lazy" width="400" height="260" />
                </div>
                <div class="course-info">
                    <div class="course-meta">
                        <span><i class="bi bi-person-video" aria-hidden="true"></i> 1 on 1 Session</span>
                        <span><i class="bi bi-clock" aria-hidden="true"></i> Flexible Timing</span>
                    </div>
                    <h3 class="title"><a href="{{ route('quran.ijazah') }}">Online Ijazah Course</a></h3>
                    <p class="description">Reach an advanced stage of Quranic learning with certification in
                        recitation, memorization, or Tafsir. The Ijazah is a widely recognized credential in Quranic
                        education. Certified scholars at Rooh Ul Quran Academy assess your skills and knowledge of Quran
                        and Hadith as you prepare for this honor.</p>
                    <a href="{{ route('quran.ijazah') }}" class="course-cta">
                        Start Free Trial <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </article>

        </div>
    </div>

</section><!-- /Courses Section -->
