@extends('main')

@section('title', $blog->meta_title ?? $blog->title)

@section('meta_keywords', $blog['meta_keywords'] ?? $blog->seo['keywords'])

@section('meta_description', $blog['meta_description'] ?? '')



@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            {{-- Featured Image --}}
            @if($blog->image_url)
            <img src="{{ $blog->image_url }}"
                 alt="{{ $blog->title }}"
                 class="img-fluid mb-4 rounded shadow"
                 style="width: 100%; height: 40%; object-fit: cover;">
        @endif
        

            {{-- Title & Meta --}}
            <h1 class="fw-bold text-dark mb-2">{{ $blog->title }}</h1>
            <div class="text-muted mb-4">
                By <strong>{{ $blog->author }}</strong> | {{ $blog->created_at->format('F d, Y') }}
            </div>

            {{-- Content --}}
            <article class="mb-5" style="line-height: 1.8; font-size: 1.1rem;">
                {!! $blog->content !!}
            </article>

            {{-- Social Sharing --}}
            <div class="mb-5">
                <h5 class="mb-3">Share this blog:</h5>
                <div class="d-flex gap-3">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank" class="btn btn-primary btn-sm">Facebook</a>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ $blog->title }}" target="_blank" class="btn btn-info btn-sm">Twitter</a>
                    <a href="https://wa.me/?text={{ urlencode($blog->title . ' ' . request()->fullUrl()) }}" target="_blank" class="btn btn-success btn-sm">WhatsApp</a>
                </div>
            </div>

            {{-- Related Blogs --}}
            @if($relatedBlogs->count())
                <div class="mt-5">
                    <h4 class="fw-bold mb-3">📚 You may also like:</h4>
                    <div class="row g-4">
                        @foreach($relatedBlogs as $related)
                            <div class="col-md-6 col-lg-4">
                                <div class="card border-0 shadow-sm h-100">
                                    @if($related->featured_image)
                                        <img src="{{ $related->featured_image }}" class="card-img-top" alt="{{ $related->title }}">
                                    @endif
                                    <div class="card-body d-flex flex-column">
                                        <h6 class="fw-bold">{{ Str::limit($related->title, 50) }}</h6>
                                        <p class="small text-muted">{{ Str::limit($related->excerpt ?? strip_tags($related->content), 80) }}</p>
                                        <a href="{{ route('blogs.show', $related->slug) }}" class="mt-auto btn btn-link p-0 text-primary">Read More →</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            {{-- @yield('testimonials') --}}

            {{-- Comments Section --}}
        </div>
    </div>
</div>

@include('layouts.testimonial')
@section('meta_script')
    {!! $blog->script ?? 'no script' !!}
@endsection

@endsection
