@extends('main')

@section('title', $blog->seo_title)
@section('og_title', $blog->seo_title)
@section('meta_description', $blog->seo_description)
@section('meta_keywords', $blog->seo_keywords)

@section('meta')
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url()->current() }}">
    @if($blog->image_url)
        <meta property="og:image" content="{{ url($blog->image_url) }}">
    @endif
    <meta name="author" content="{{ $blog->author ?: 'Rooh Ul Quran Academy' }}">
@endsection

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <article class="rq-blog-article">
                @if($blog->image_url)
                    <div class="mb-4">
                        <img src="{{ $blog->image_url }}"
                             alt="{{ $blog->title }}"
                             class="img-fluid rounded shadow w-100"
                             style="max-height: 700px; object-fit: cover;">
                    </div>
                @endif

                <h1 class="fw-bold text-dark mb-2">{{ $blog->title }}</h1>
                <div class="text-muted mb-4">
                    By <strong>{{ $blog->author ?: 'Rooh Ul Quran Academy' }}</strong>
                    | {{ $blog->created_at->format('F d, Y') }}
                </div>

                @if($blog->excerpt)
                    <p class="rq-blog-lead">{{ $blog->excerpt }}</p>
                @endif

                <div class="rq-blog-content content">
                    {!! $blog->content !!}
                </div>
            </article>

            @php $internalLinks = $blog->internalLinkItems(); @endphp
            @if(count($internalLinks))
                <nav class="rq-blog-links" aria-label="Related academy pages">
                    <h2>Explore related classes</h2>
                    <ul>
                        @foreach($internalLinks as $link)
                            <li><a href="{{ $link['url'] }}">{{ $link['label'] }}</a></li>
                        @endforeach
                    </ul>
                </nav>
            @endif

            @php $faqs = $blog->faqItems(); @endphp
            @if(count($faqs))
                <section id="faq" class="rq-blog-faqs py-4" data-aos="fade-up">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold" style="color:#122F2A;">Frequently Asked Questions</h2>
                        <p class="text-muted mb-0">Find answers to the most common questions about this article and our online Quran classes.</p>
                    </div>
                    <div class="accordion" id="blogFaqAccordion">
                        @foreach($faqs as $index => $faq)
                            @php $faqId = $index + 1; @endphp
                            <div class="accordion-item mb-3 shadow-sm rounded">
                                <h2 class="accordion-header" id="blog-faq-heading-{{ $faqId }}">
                                    <button class="accordion-button collapsed fw-semibold" type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#blog-faq-collapse-{{ $faqId }}"
                                        aria-expanded="false"
                                        aria-controls="blog-faq-collapse-{{ $faqId }}">
                                        {{ $faq['question'] }}
                                    </button>
                                </h2>
                                <div id="blog-faq-collapse-{{ $faqId }}" class="accordion-collapse collapse"
                                    aria-labelledby="blog-faq-heading-{{ $faqId }}"
                                    data-bs-parent="#blogFaqAccordion">
                                    <div class="accordion-body">
                                        {{ $faq['answer'] }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            @endif

            @include('blogs.partials.trial-cta')

            <div class="mb-5 mt-4">
                <h5 class="mb-3">Share this blog:</h5>
                <div class="d-flex flex-wrap gap-2">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank" rel="noopener" class="btn btn-primary btn-sm">Facebook</a>
                    <a href="https://wa.me/?text={{ urlencode($blog->title . ' ' . request()->fullUrl()) }}" target="_blank" rel="noopener" class="btn btn-success btn-sm">WhatsApp</a>
                </div>
            </div>

            @if($relatedBlogs->count())
            <div class="mt-5 mb-5">
                <h2 class="fw-bold mb-4" style="color:#122F2A;font-size:1.4rem">You may also like</h2>
                <div class="row g-4">
                    @foreach($relatedBlogs as $related)
                        <div class="col-sm-6 col-md-4">
                            <a href="{{ route('blogs.show', $related->slug) }}" class="rq-blog-card">
                                <div class="rq-blog-card-media">
                                    @if($related->image_url)
                                        <img src="{{ $related->image_url }}" alt="{{ $related->title }}">
                                    @else
                                        <div class="rq-blog-placeholder"><i class="bi bi-journal-richtext"></i></div>
                                    @endif
                                </div>
                                <div class="rq-blog-card-body">
                                    <h3>{{ Str::limit($related->title, 50) }}</h3>
                                    <p>{{ Str::limit($related->excerpt ?? strip_tags($related->content), 80) }}</p>
                                    <span class="rq-blog-read">Read <i class="bi bi-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

<div class="container">
    @include('layouts.testimonial')
</div>

@php
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Article',
        'headline' => $blog->seo_title,
        'description' => $blog->seo_description,
        'author' => [
            '@type' => 'Organization',
            'name' => $blog->author ?: 'Rooh Ul Quran Academy',
        ],
        'publisher' => [
            '@type' => 'EducationalOrganization',
            'name' => 'Rooh Ul Quran Academy',
            'url' => url('/'),
        ],
        'datePublished' => optional($blog->created_at)->toIso8601String(),
        'dateModified' => optional($blog->updated_at)->toIso8601String(),
        'mainEntityOfPage' => [
            '@type' => 'WebPage',
            '@id' => url()->current(),
        ],
    ];
    if ($blog->image_url) {
        $schema['image'] = url($blog->image_url);
    }
    $faqSchema = null;
    if (count($faqs)) {
        $faqSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => array_map(fn ($faq) => [
                '@type' => 'Question',
                'name' => $faq['question'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $faq['answer'],
                ],
            ], $faqs),
        ];
    }
@endphp
<script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
@if($faqSchema)
<script type="application/ld+json">{!! json_encode($faqSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
@endif
@endsection
