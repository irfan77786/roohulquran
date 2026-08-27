@extends('main')

@section('title', 'Islamic Blogs - Read Latest Articles on Quran & Islam')
@section('meta_description' , 'Explore Rooh Ul Quran Academy’s blog — Islamic articles, Quran learning tips, and
guidance for students of all ages.')
@section('meta_keywords' , 'rooh ul quran blog, islamic articles, quran learning tips, online quran blog, islamic
education blog, quran study resources')

@section('content')
{{-- Page banner (same as About / Teachers) --}}
<section id="hero" class="hero section tauheed-page-banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-10 col-sm-12 mb-2 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="tauheed-banner-panel">
                    <h1 class="fw-bold mb-3" style="font-size: 2.4rem !important">Our <span>Blog</span></h1>
                    <p style="font-size: larger" class="col-lg-10 col-md-12 col-sm-12">
                        Explore Islamic articles, Quran learning tips, and guidance for students of all ages
                        from Rooh Ul Quran Academy.
                    </p>
                    <a href="#blogs" class="btn-get-started text-bold">Latest Articles</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blogs" class="rq-blogs">
    <div class="container">
        <div class="rq-blogs-heading" data-aos="fade-up">
            <span class="rq-blogs-kicker">Insights &amp; Guidance</span>
            <h2>Latest Articles</h2>
            <p>Practical Quran learning tips, Tajweed guidance, and Islamic articles for students of every age.</p>
        </div>

        @php
            $featured = $blogs->onFirstPage() ? $blogs->first() : null;
        @endphp

        @if($featured)
            <a href="{{ route('blogs.show', $featured->slug) }}" class="rq-blog-featured" data-aos="fade-up">
                <div class="rq-blog-featured-media">
                    <span class="rq-blog-date-chip">
                        <strong>{{ $featured->created_at->format('d') }}</strong>
                        <span>{{ $featured->created_at->format('M') }}</span>
                    </span>
                    @if($featured->image_url)
                        <img src="{{ $featured->image_url }}" alt="{{ $featured->title }}">
                    @else
                        <div class="rq-blog-placeholder"><i class="bi bi-journal-richtext"></i></div>
                    @endif
                </div>
                <div class="rq-blog-featured-body">
                    <span class="rq-blog-badge">Latest</span>
                    <h3>{{ $featured->title }}</h3>
                    <p>{{ Str::limit($featured->excerpt ?? strip_tags($featured->content), 180) }}</p>
                    <div class="rq-blog-meta">
                        <span><i class="bi bi-person"></i>{{ $featured->author ?: 'Rooh Ul Quran' }}</span>
                        <span><i class="bi bi-calendar3"></i>{{ $featured->created_at->format('M d, Y') }}</span>
                    </div>
                    <span class="rq-blog-read">Read article <i class="bi bi-arrow-right"></i></span>
                </div>
            </a>
        @endif

        <div class="row g-4">
            @forelse($blogs as $blog)
                @if($featured && $loop->first)
                    @continue
                @endif
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                    <a href="{{ route('blogs.show', $blog->slug) }}" class="rq-blog-card">
                        <div class="rq-blog-card-media">
                            <span class="rq-blog-date-chip">
                                <strong>{{ $blog->created_at->format('d') }}</strong>
                                <span>{{ $blog->created_at->format('M') }}</span>
                            </span>
                            @if($blog->image_url)
                                <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}">
                            @else
                                <div class="rq-blog-placeholder"><i class="bi bi-journal-richtext"></i></div>
                            @endif
                        </div>
                        <div class="rq-blog-card-body">
                            <h3>{{ Str::limit($blog->title, 72) }}</h3>
                            <p>{{ Str::limit($blog->excerpt ?? strip_tags($blog->content), 110) }}</p>
                            <div class="rq-blog-card-foot">
                                <div class="rq-blog-meta mb-0">
                                    <span><i class="bi bi-person"></i>{{ $blog->author ?: 'Admin' }}</span>
                                </div>
                                <span class="rq-blog-read">Read <i class="bi bi-arrow-right"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-12">
                    <div class="rq-blogs-empty">
                        <i class="bi bi-journal-x d-block"></i>
                        <h3 class="mb-2">No articles yet</h3>
                        <p class="mb-0 text-muted">New Islamic articles and Quran learning guides will appear here soon.</p>
                    </div>
                </div>
            @endforelse
        </div>

        <div class="rq-blogs-pagination">
            {{ $blogs->onEachSide(1)->links() }}
        </div>

        @include('blogs.partials.trial-cta')
    </div>
</section>
@endsection
