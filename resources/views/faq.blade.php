@extends('main')
@section('title', 'FAQ | Online Quran Classes Questions Answered | Rooh Ul Quran Academy')
@section('meta_description', 'Clear answers about online Quran classes at Rooh Ul Quran Academy: free trial, fees, Madani Qaida, Tajweed, Hifz, female teachers, timings, kids classes, and Ijazah.')
@section('meta_keywords', 'online quran classes faq, quran academy questions, free trial quran class, online quran fees, female quran teacher, hifz online faq, tajweed classes faq, madani qaida online, learn quran online questions')

@php
    $faqGroups = [
        [
            'id' => 'getting-started',
            'title' => 'Getting Started',
            'items' => [
                [
                    'q' => 'What is Rooh Ul Quran Academy?',
                    'a' => 'Rooh Ul Quran Academy is an online Quran learning platform that offers live one-to-one classes for kids and adults. Students can study Madani Qaida, Quran reading, Tajweed, memorization (Hifz), Tafsir, and Ijazah with qualified male and female teachers from home.',
                ],
                [
                    'q' => 'Do you offer a free trial class?',
                    'a' => 'Yes. Rooh Ul Quran Academy offers a free trial class so you can meet a teacher, check the teaching style, and confirm the right course level before enrolling.',
                ],
                [
                    'q' => 'How do I book an online Quran class?',
                    'a' => 'Book through our contact page or free trial form. Share your preferred time zone, student age, and course goal. Our team assigns a suitable male or female tutor and confirms your first live session.',
                ],
                [
                    'q' => 'Who can join your online Quran classes?',
                    'a' => 'Kids, teens, adults, beginners, and advanced learners can join. New Muslims and returning adults are welcome. Classes are customized after a short level assessment.',
                ],
            ],
        ],
        [
            'id' => 'courses',
            'title' => 'Courses & Learning Paths',
            'items' => [
                [
                    'q' => 'What courses do you offer?',
                    'a' => 'We offer six core programs: Madani Qaida Course, Quran Reading Course, Learn Quran With Tajweed, Online Quran Memorization (Hifz), Online Quran Tafsir - Translation, and Online Ijazah Course. Kids-focused classes are also available.',
                ],
                [
                    'q' => 'What is the Madani Qaida Course?',
                    'a' => 'The Madani Qaida Course is a beginner foundation program. Students learn Arabic letters, correct pronunciation, joining letters, and basic Tajweed before moving to fluent Quran reading.',
                ],
                [
                    'q' => 'What is the difference between Quran Reading and Tajweed courses?',
                    'a' => 'Quran Reading builds accurate reading fluency and basic rules. Learn Quran With Tajweed focuses more deeply on makharij, rules of noon/meem, madd, and polished recitation quality.',
                ],
                [
                    'q' => 'Can I memorize the Quran online (Hifz)?',
                    'a' => 'Yes. Our Online Quran Memorization course uses structured new lesson, revision, and testing cycles with a dedicated tutor so students can memorize steadily from home.',
                ],
                [
                    'q' => 'Do you teach Quran Tafsir and translation?',
                    'a' => 'Yes. Our Online Quran Tafsir - Translation course explains meanings, context, and practical lessons from selected Surahs through interactive one-to-one sessions.',
                ],
                [
                    'q' => 'What is an Online Ijazah Course?',
                    'a' => 'The Online Ijazah Course is an advanced track for students seeking formal authorization in Quranic recitation, memorization, or related Quranic sciences after assessment by qualified scholars.',
                ],
            ],
        ],
        [
            'id' => 'kids-teachers',
            'title' => 'Kids, Adults & Teachers',
            'items' => [
                [
                    'q' => 'Do you offer online Quran classes for kids?',
                    'a' => 'Yes. Children can start from Madani Qaida and progress to Quran reading, Tajweed, and Hifz. Lessons are short, engaging, and paced for young learners with parent progress updates.',
                ],
                [
                    'q' => 'Do you provide female Quran teachers?',
                    'a' => 'Yes. Qualified female Quran tutors are available for sisters, mothers, and girls who prefer to learn with a female teacher.',
                ],
                [
                    'q' => 'Are your Quran teachers certified?',
                    'a' => 'Our tutors are experienced Quran teachers trained in Tajweed and student-centered online teaching. Advanced tracks such as Ijazah are guided by scholars with recognized credentials.',
                ],
                [
                    'q' => 'Are classes one-to-one or group?',
                    'a' => 'Most classes are live one-to-one for better focus, correction, and flexible timing. This format works especially well for kids, Tajweed repair, and Hifz.',
                ],
            ],
        ],
        [
            'id' => 'schedule-tech',
            'title' => 'Schedule, Tech & Time Zones',
            'items' => [
                [
                    'q' => 'What are your class timings?',
                    'a' => 'We offer flexible scheduling across major time zones, including UK, US, Canada, Europe, Middle East, and Asia. You choose slots that fit school, work, or family routines.',
                ],
                [
                    'q' => 'How long is each online Quran class?',
                    'a' => 'Typical sessions last about 30 minutes, which is effective for focus and consistency. Longer sessions can be arranged based on age, course, and learning goals.',
                ],
                [
                    'q' => 'Which platform do you use for online Quran classes?',
                    'a' => 'Classes are conducted through live video tools such as Zoom, Skype, or Google Meet. Your assigned tutor confirms the best option before the first lesson.',
                ],
                [
                    'q' => 'Do I need Arabic before starting?',
                    'a' => 'No. Absolute beginners start with Madani Qaida. Reading and Tajweed courses begin from your current level after a short assessment.',
                ],
            ],
        ],
        [
            'id' => 'fees-enrollment',
            'title' => 'Fees, Trial & Enrollment',
            'items' => [
                [
                    'q' => 'How much do online Quran classes cost?',
                    'a' => 'Fees depend on the number of classes per week and the selected course plan. Visit our Pricing page for current packages, or contact us for a plan matched to your family schedule.',
                ],
                [
                    'q' => 'Do you offer family or sibling discounts?',
                    'a' => 'Yes. Family-friendly packages and sibling options are available. Ask our team when you book a trial so we can recommend the most suitable plan.',
                ],
                [
                    'q' => 'Can I change my schedule later?',
                    'a' => 'Yes. Timings can usually be adjusted with advance notice when a matching tutor slot is available, helping students stay consistent during school terms or travel.',
                ],
                [
                    'q' => 'How do I contact Rooh Ul Quran Academy?',
                    'a' => 'Contact us by WhatsApp at +92-334-4066429, email info@roohulquranacademy.com, or use the Contact Us page to request a free trial and course guidance.',
                ],
            ],
        ],
        [
            'id' => 'results-trust',
            'title' => 'Progress, Trust & Outcomes',
            'items' => [
                [
                    'q' => 'How do you track student progress?',
                    'a' => 'Teachers monitor reading accuracy, Tajweed improvement, and Hifz revision. Parents and adult learners receive clear feedback so next steps stay transparent.',
                ],
                [
                    'q' => 'Is online Quran learning effective for kids?',
                    'a' => 'Yes. One-to-one live classes with patient tutors, short focused sessions, and regular revision help children build strong Quran reading habits from home.',
                ],
                [
                    'q' => 'Can students in the UK or USA join?',
                    'a' => 'Yes. Rooh Ul Quran Academy serves students worldwide, including the UK, USA, Canada, Europe, and the Middle East, with tutors available on local evening and weekend slots.',
                ],
                [
                    'q' => 'Will I receive a certificate?',
                    'a' => 'Course completion recognition is available for eligible students. Advanced learners may pursue the Online Ijazah Course for formal scholarly authorization after meeting assessment standards.',
                ],
            ],
        ],
    ];

    $faqSchemaEntities = [];
    foreach ($faqGroups as $group) {
        foreach ($group['items'] as $item) {
            $faqSchemaEntities[] = [
                '@type' => 'Question',
                'name' => $item['q'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $item['a'],
                ],
            ];
        }
    }
@endphp

@push('preload')
@include('layouts.partials.hero-lcp-preload')
@endpush

@section('content')
<style>
    #hero.faq-banner .tauheed-banner-panel {
        max-width: 820px;
    }

    #hero.faq-banner .faq-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #FF5528;
        font-size: 0.82rem;
        font-weight: 800;
        letter-spacing: 1.4px;
        text-transform: uppercase;
        margin-bottom: 12px;
    }

    #hero.faq-banner .faq-eyebrow::before {
        content: "";
        width: 28px;
        height: 2px;
        border-radius: 2px;
        background: #FF5528;
    }

    #hero.faq-banner .faq-title {
        color: #122F2A !important;
        font-weight: 800;
        font-size: clamp(1.75rem, 3vw, 2.5rem);
        line-height: 1.25;
        letter-spacing: -0.4px;
        margin-bottom: 14px;
        text-align: left;
    }

    #hero.faq-banner .faq-lead {
        color: #444444;
        font-size: 1.05rem;
        line-height: 1.75;
        max-width: 720px;
        margin: 0 0 22px;
        text-align: left;
    }

    #hero.faq-banner .faq-pills {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
        gap: 10px;
        margin: 0;
    }

    #hero.faq-banner .faq-pill {
        display: inline-flex;
        align-items: center;
        padding: 0.55rem 1rem;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.72);
        color: #122F2A;
        font-weight: 700;
        font-size: 0.9rem;
        text-decoration: none;
        border: 1px solid rgba(18, 47, 42, 0.1);
        transition: background 0.25s ease, color 0.25s ease, border-color 0.25s ease;
    }

    #hero.faq-banner .faq-pill:hover,
    #hero.faq-banner .faq-pill:focus {
        background: #122F2A;
        color: #ffffff;
        border-color: #122F2A;
    }

    #faq-page.faq-page {
        background: #ffffff;
        background-image: radial-gradient(rgba(18, 47, 42, 0.035) 1px, transparent 1px);
        background-size: 18px 18px;
        padding: 72px 0 80px;
    }

    #faq-page .faq-group {
        margin-bottom: 36px;
    }

    #faq-page .faq-group-title {
        color: #122F2A;
        font-weight: 800;
        font-size: 1.35rem;
        margin-bottom: 16px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    #faq-page .faq-group-title::before {
        content: "";
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #1A685B;
        flex-shrink: 0;
    }

    #faq-page .accordion-item {
        background: #ffffff;
        border: 1px solid rgba(18, 47, 42, 0.08) !important;
        border-radius: 14px !important;
        overflow: hidden;
        margin-bottom: 12px;
        box-shadow: 0 10px 28px rgba(18, 47, 42, 0.05);
    }

    #faq-page .accordion-button {
        background: #ffffff;
        color: #122F2A;
        font-weight: 700;
        font-size: 1.02rem;
        line-height: 1.45;
        padding: 1.05rem 1.25rem;
        box-shadow: none !important;
    }

    #faq-page .accordion-button:not(.collapsed) {
        background: #F6F3EE;
        color: #122F2A;
    }

    #faq-page .accordion-button::after {
        filter: none;
    }

    #faq-page .accordion-body {
        color: #5f6670;
        line-height: 1.75;
        font-size: 1rem;
        padding: 0 1.25rem 1.2rem;
        background: #ffffff;
    }

    #faq-page .faq-cta {
        margin-top: 48px;
        background: #122F2A;
        border-radius: 22px;
        padding: 2.25rem 1.75rem;
        text-align: center;
        color: #ffffff;
    }

    #faq-page .faq-cta h3 {
        font-weight: 800;
        font-size: 1.55rem;
        margin-bottom: 10px;
    }

    #faq-page .faq-cta p {
        color: rgba(255, 255, 255, 0.82);
        margin-bottom: 1.25rem;
        max-width: 560px;
        margin-left: auto;
        margin-right: auto;
    }

    #faq-page .faq-cta .btn-faq-primary {
        background: #FF5528;
        border: none;
        color: #ffffff !important;
        font-weight: 700;
        border-radius: 999px;
        padding: 0.75rem 1.6rem;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
    }

    #faq-page .faq-cta .btn-faq-primary:hover {
        background: #e6481d;
        color: #ffffff !important;
    }

    #faq-page .faq-cta .btn-faq-secondary {
        background: transparent;
        border: 1px solid rgba(255, 255, 255, 0.35);
        color: #ffffff !important;
        font-weight: 700;
        border-radius: 999px;
        padding: 0.75rem 1.4rem;
        text-decoration: none;
        display: inline-flex;
        margin-left: 0.5rem;
    }

    #faq-page .faq-cta .btn-faq-secondary:hover {
        background: rgba(255, 255, 255, 0.08);
        color: #ffffff !important;
    }

    @media (max-width: 575.98px) {
        #faq-page .faq-cta .btn-faq-secondary {
            margin-left: 0;
            margin-top: 0.65rem;
        }
    }
</style>

<section id="hero" class="hero section tauheed-page-banner faq-banner">
    @include('layouts.partials.hero-lcp-image')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-10 col-md-12" data-aos="fade-up" data-aos-delay="100">
                <div class="tauheed-banner-panel">
                    <span class="faq-eyebrow">Help Center</span>
                    <h1 class="faq-title">Browse Questions by Topic</h1>
                    <p class="faq-lead">
                        Straight answers about online Quran classes at Rooh Ul Quran Academy: courses, free trial, fees,
                        female teachers, kids learning, timings, and Ijazah, so you can decide with clarity.
                    </p>
                    <nav class="faq-pills" aria-label="FAQ categories">
                        @foreach ($faqGroups as $group)
                            <a class="faq-pill" href="#{{ $group['id'] }}">{{ $group['title'] }}</a>
                        @endforeach
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="faq-page" class="faq-page">
    <div class="container">
        @foreach ($faqGroups as $gIndex => $group)
            <div class="faq-group" id="{{ $group['id'] }}" data-aos="fade-up" data-aos-delay="{{ min(100 + ($gIndex * 40), 280) }}">
                <h2 class="faq-group-title">{{ $group['title'] }}</h2>
                <div class="accordion" id="faqAccordion-{{ $group['id'] }}">
                    @foreach ($group['items'] as $iIndex => $item)
                        @php
                            $itemId = $group['id'] . '-' . ($iIndex + 1);
                        @endphp
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="heading-{{ $itemId }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-{{ $itemId }}" aria-expanded="false"
                                    aria-controls="collapse-{{ $itemId }}">
                                    {{ $item['q'] }}
                                </button>
                            </h3>
                            <div id="collapse-{{ $itemId }}" class="accordion-collapse collapse"
                                aria-labelledby="heading-{{ $itemId }}"
                                data-bs-parent="#faqAccordion-{{ $group['id'] }}">
                                <div class="accordion-body">
                                    <p class="mb-0">{{ $item['a'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

        <div class="faq-cta" data-aos="fade-up">
            <h3>Still have a question?</h3>
            <p>Book a free trial or message our team. We will help you choose the right Quran course and timing for your family.</p>
            <div>
                <a href="{{ route('home.contact.us') }}" class="btn-faq-primary">
                    Start Free Trial <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
                <a href="{{ route('home.pricing') }}" class="btn-faq-secondary">View Pricing</a>
            </div>
        </div>
    </div>
</section>

<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => $faqSchemaEntities,
    'about' => [
        '@type' => 'EducationalOrganization',
        'name' => 'Rooh Ul Quran Academy',
        'url' => 'https://roohulquranacademy.com/',
    ],
    'url' => url('/faq'),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>

@endsection
