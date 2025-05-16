@extends('admin.main')

@section('content')
    <div class="container mt-5">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">{{ isset($blog) ? 'Edit Blog' : 'Create Blog' }}</h5>
                </div>
                <div class="card-body">
                    <form action="{{ isset($blog) ? route('blogs.update', $blog) : route('blogs.store') }}" 
                          method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(isset($blog)) @method('PUT') @endif

                        {{-- Title --}}
                        <div class="mb-3">
                            <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" id="title" 
                                   class="form-control @error('title') is-invalid @enderror"
                                   value="{{ old('title', $blog->title ?? '') }}" placeholder="Enter blog title">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Content --}}
                        <div class="mb-3">
                            <label for="content" class="form-label">Content <span class="text-danger">*</span></label>
                            <textarea name="content" id="content" rows="5" 
                                      class="form-control @error('content') is-invalid @enderror"
                                      placeholder="Write blog content here...">{{ old('content', $blog->content ?? '') }}</textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Featured Image --}}
                        <div class="mb-3">
                            <label for="featured_image" class="form-label">Featured Image</label>
                            <input type="file" name="featured_image" id="featured_image" 
                                   class="form-control @error('featured_image') is-invalid @enderror" accept="image/*">
                            @error('featured_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            @if(isset($blog) && $blog->featured_image)
                                <div class="mt-2">
                                    <img src="{{ $blog->featured_image }}" alt="Current Image" height="80">
                                </div>
                            @endif
                        </div>

                        {{-- SEO Keywords --}}
                        <div class="mb-3">
                            <label for="seo_keywords" class="form-label">SEO Keywords</label>
                            <textarea name="seo[keywords]" id="seo_keywords" rows="2" 
                                      class="form-control @error('seo.keywords') is-invalid @enderror"
                                      placeholder="Enter keywords, separated by commas">{{ old('seo.keywords', $blog->seo['keywords'] ?? '') }}</textarea>
                            @error('seo.keywords')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Submit --}}
                        <div class="text-end">
                            <button type="submit" class="btn btn-success">
                                {{ isset($blog) ? 'Update Blog' : 'Create Blog' }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
