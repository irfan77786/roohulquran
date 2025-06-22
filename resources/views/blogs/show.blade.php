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
            <div class="mb-4">
                <img src="{{ $blog->image_url }}"
                     alt="{{ $blog->title }}"
                     class="img-fluid rounded shadow w-100"
                     style="max-height: 500px; object-fit: cover;">
            </div>
            @endif

            {{-- Title & Meta --}}
            <h1 class="fw-bold text-dark mb-2">{{ $blog->title }}</h1>
            <div class="text-muted mb-4">
                By <strong>{{ $blog->author }}</strong> | {{ $blog->created_at->format('F d, Y') }}
            </div>

            {{-- Content --}}
            <article class="mb-5" style="line-height: 1.8;">
                <div class="content">
                    {!! $blog->content !!}
                </div>
            </article>

            {{-- Social Sharing --}}
            <div class="mb-5">
                <h5 class="mb-3">Share this blog:</h5>
                <div class="d-flex flex-wrap gap-2">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank" class="btn btn-primary btn-sm">Facebook</a>
                    <a href="https://wa.me/?text={{ urlencode($blog->title . ' ' . request()->fullUrl()) }}" target="_blank" class="btn btn-success btn-sm">WhatsApp</a>
                </div>
            </div>

            {{-- Related Blogs --}}
            @if($relatedBlogs->count())
            <div class="mt-5 mb-5">
                <h4 class="fw-bold">📚 You may also like:</h4>
                <div class="row g-4">
                    @foreach($relatedBlogs as $related)
                        <div class="col-sm-6 col-md-4">
                            <div class="card border-0 shadow-sm h-100">
                                @if($related->image_url)
                                    <img src="{{ $related->image_url }}" class="card-img-top" alt="{{ $related->title }}">
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

        </div>
    </div>
</div>

{{-- Testimonials --}}
<div class="container">
    @include('layouts.testimonial')
</div>
@endsection
@section('meta_script')
    {!! $blog->script ?? 'no script' !!}
@endsection

