@extends('admin.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('admin/assets/css/admin-blogs.css') }}">
@endpush

@section('content')
<div class="ab-wrap">
    <div class="ab-toolbar">
        <a href="{{ route('admin.blogs.index') }}" class="ab-btn ab-btn-ghost">
            <i class="ti ti-arrow-left"></i> Back to blogs
        </a>
        <div class="d-flex gap-2">
            @if($blog->slug)
                <a href="{{ route('blogs.show', $blog->slug) }}" class="ab-btn ab-btn-ghost" target="_blank" rel="noopener">
                    <i class="ti ti-external-link"></i> Public page
                </a>
            @endif
            <a href="{{ route('admin.blogs.index', ['edit' => $blog->id]) }}" class="ab-btn ab-btn-primary">
                <i class="ti ti-pencil"></i> Edit
            </a>
        </div>
    </div>

    @if ($blog->image_url)
        <div class="ab-show-hero">
            <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}">
        </div>
    @endif

    <article class="ab-article">
        <h1>{{ $blog->title }}</h1>
        <div class="ab-meta">
            <span>{{ $blog->created_at->format('M d, Y') }}</span>
            @if($blog->slug)
                <span>/blogs/{{ $blog->slug }}</span>
            @endif
            @if($blog->primary_keyword)
                <span>{{ $blog->primary_keyword }}</span>
            @endif
            <span>{{ $blog->status ? 'Published' : 'Draft' }}</span>
        </div>

        @if($blog->seo_description)
            <p class="text-muted mb-4">{{ $blog->seo_description }}</p>
        @endif

        <div class="ab-article-body">
            {!! $blog->content !!}
        </div>

        @if(count($blog->faqItems()))
            <h2 class="mt-5 mb-3" style="font-size:1.2rem;color:#122F2A;">FAQs</h2>
            @foreach($blog->faqItems() as $faq)
                <div class="ab-faq">
                    <strong>{{ $faq['question'] }}</strong>
                    <span>{{ $faq['answer'] }}</span>
                </div>
            @endforeach
        @endif
    </article>
</div>
@endsection
