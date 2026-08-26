@extends('admin.main')

@section('content')
    <div class="container mt-5">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                @if ($blog->image_url)
                    <img src="{{ $blog->image_url }}" class="card-img-top" alt="Featured Image" style="object-fit: cover; height: 300px;">
                @endif

                <div class="card-body">
                    <h3 class="card-title">{{ $blog->title }}</h3>
                    <p class="text-muted">
                        <small>Published on {{ $blog->created_at->format('M d, Y') }}</small>
                    </p>

                    <div class="mb-4">
                        {!! nl2br(e($blog->content)) !!}
                    </div>

                    @if (!empty($blog->seo['keywords']))
                        <div class="mt-4">
                            <h6>SEO Keywords</h6>
                            <p>
                                @foreach (explode(',', $blog->seo['keywords']) as $keyword)
                                    <span class="badge bg-secondary">{{ trim($keyword) }}</span>
                                @endforeach
                            </p>
                        </div>
                    @endif

                    <div class="mt-4">
                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-outline-primary">Back to Blogs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
