@extends('main')

@section('title', 'Islamic Blogs - Read Latest Articles on Quran & Islam')
@section('meta_description' , 'Explore Rooh Ul Quran Academy’s blog — Islamic articles, Quran learning tips, and
guidance for students of all ages.')
@section('meta_keywords' , 'rooh ul quran blog, islamic articles, quran learning tips, online quran blog, islamic
education blog, quran study resources')
<style>
    .card-title {
        font-family: 'Georgia', serif;
        line-height: 1.4;
    }

    .card-text {
        font-size: 0.95rem;
        line-height: 1.6;
    }

    .btn-outline-success {
        border-color: #28a745;
        color: #28a745;
    }

    .btn-outline-success:hover {
        background-color: #1f1872;
        color: white;
    }
</style>
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

<div id="blogs" class="container py-5">
    <h2 class="mb-4 text-center fw-bold">Latest Blogs</h2>

    <div class="row g-4">
        @forelse($blogs as $blog)
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow rounded-4 overflow-hidden">
                @if($blog->image_url)
                <img src="{{ $blog->image_url }}" class="card-img-top object-fit-cover" alt="{{ $blog->title }}"
                    style="height: 200px; object-fit: cover;">
                @endif

                <div class="card-body px-4 py-3">
                    <a href="{{ route('blogs.show', $blog->slug) }}">
                        <h5 class="card-title fw-bold text-warning mb-3">{{ Str::limit($blog->title, 60) }}</h5>
                    </a>
                    <p class="card-text text-black" style="min-height: 60px;">
                        {{ Str::limit($blog->excerpt ?? strip_tags($blog->content), 100) }}
                    </p>
                    <a href="{{ route('blogs.show', $blog->slug) }}"
                        class="btn btn-outline-success btn-sm mt-3 rounded-pill">Learn More</a>
                </div>

                <div class="card-footer bg-transparent border-0 text-muted px-4 pb-3 small">
                    By {{ $blog->author }} • {{ $blog->created_at->format('M d, Y') }}
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center">
            <p>No blogs found.</p>
        </div>
        @endforelse
    </div>

    <div class="mt-4 d-flex justify-content-center">
        {{ $blogs->links() }}
    </div>
</div>

@endsection