@extends('admin.main')

@section('content')
    <div class="container mt-5">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">{{ isset($blog) ? 'Edit Blog' : 'Create Blog' }}</h5>
                </div>
                <div class="card-body">
                    <form action="{{ isset($blog) ? route('admin.blogs.update', $blog) : route('admin.blogs.store') }}" 
                          method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(isset($blog)) @method('PUT') @endif

                        {{-- Title --}}
                        <div class="mb-3">
                            <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" id="title" 
                                   class="form-control text-black @error('title') is-invalid @enderror"
                                   value="{{ old('title', $blog->title ?? '') }}" placeholder="Enter blog title">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Content --}}
                        <div class="mb-3">
                            <label for="content" class="form-label">Content <span class="text-danger">*</span></label>
                            <textarea name="content" id="summernote" rows="5" 
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

                            @if(isset($blog) && $blog->image_url)
                                <div class="mt-2">
                                    <img src="{{ $blog->image_url }}" alt="Current Image" height="80">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Write blog content here...',
                tabsize: 2,
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview']]
                ]
            });
        });
    </script>
    
@endsection
