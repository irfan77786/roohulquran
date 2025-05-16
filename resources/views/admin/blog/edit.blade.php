@extends('admin.main')


@section('content')
    <form action="{{ isset($blog) ? route('blogs.update', $blog) : route('blogs.store') }}" method="POST">
        @csrf
        @if(isset($blog)) @method('PUT') @endif

        <input name="title" class="form-control mb-2" placeholder="Title" value="{{ old('title', $blog->title ?? '') }}">
        <textarea name="content" class="form-control mb-2" placeholder="Content">{{ old('content', $blog->content ?? '') }}</textarea>
        <input name="featured_image" class="form-control mb-2" placeholder="Image URL" value="{{ old('featured_image', $blog->featured_image ?? '') }}">
        
        <!-- SEO fields -->
        <textarea name="seo[keywords]" class="form-control mb-2" placeholder="SEO Keywords (comma separated)">
            {{ old('seo.keywords', $blog->seo['keywords'] ?? '') }}
        </textarea>

        <button class="btn btn-success">{{ isset($blog) ? 'Update' : 'Create' }}</button>
    </form>
@endsection
