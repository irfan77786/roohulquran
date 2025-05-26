@extends('main')

@section('title', 'Latest Blogs')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-center fw-bold">📝 Latest Blogs</h2>

    <div class="row g-4">
        @forelse($blogs as $blog)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0">
                    @if($blog->image_url)
                        <img src="{{ $blog->image_url }}" class="card-img-top" alt="{{ $blog->title }}">
                    @endif
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold text-primary">{{ Str::limit($blog->title, 60) }}</h5>
                        <p class="card-subtitle mb-2 text-muted">By {{ $blog->author }} • {{ $blog->created_at->format('M d, Y') }}</p>
                        <p class="card-text text-dark mt-2">
                            {{ Str::limit($blog->excerpt ?? strip_tags($blog->content), 100) }}
                        </p>
                        <a href="{{ route('blogs.show', $blog->slug) }}" class="mt-auto btn btn-outline-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p>No blogs found.</p>
            </div>
        @endforelse
    </div>

    {{-- Pagination --}}
    <div class="mt-4 d-flex justify-content-center">
        {{ $blogs->links() }}
    </div> 
</div>
@endsection
