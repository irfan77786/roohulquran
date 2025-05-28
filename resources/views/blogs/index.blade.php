@extends('main')

@section('title', 'Latest Blogs')
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
<div class="container py-5">
    <h2 class="mb-4 text-center fw-bold">Latest Blogs</h2>

    <div class="row g-4">
        @forelse($blogs as $blog)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow rounded-4 overflow-hidden">
                    @if($blog->image_url)
                        <img src="{{ $blog->image_url }}" class="card-img-top object-fit-cover" alt="{{ $blog->title }}" style="height: 200px; object-fit: cover;">
                    @endif

                    <div class="card-body px-4 py-3">
                        <a href="{{ route('blogs.show', $blog->slug) }}"> <h5 class="card-title fw-bold text-warning mb-3">{{ Str::limit($blog->title, 60) }}</h5></a>
                        <p class="card-text text-black" style="min-height: 60px;">
                            {{ Str::limit($blog->excerpt ?? strip_tags($blog->content), 100) }}
                        </p>
                        <a href="{{ route('blogs.show', $blog->slug) }}" class="btn btn-outline-success btn-sm mt-3 rounded-pill">Learn More</a>
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
