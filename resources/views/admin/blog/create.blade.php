@extends('admin.main')

@php
    $faqs = old('faqs', $blog->faqs ?? [['question' => '', 'answer' => '']]);
    if (! is_array($faqs) || count($faqs) === 0) {
        $faqs = [['question' => '', 'answer' => '']];
    }
    $links = old('internal_links', $blog->internal_links ?? [['label' => '', 'url' => '']]);
    if (! is_array($links) || count($links) === 0) {
        $links = [['label' => '', 'url' => '']];
    }
    $suggestedLinks = $suggestedLinks ?? [];
    $isEdit = isset($blog);
@endphp

@push('styles')
<link rel="stylesheet" href="{{ asset('admin/assets/css/admin-blogs.css') }}">
@endpush

@section('content')
<div class="ab-wrap">
    <div class="ab-head">
        <div>
            <span class="ab-kicker">{{ $isEdit ? 'Edit article' : 'New article' }}</span>
            <h1>{{ $isEdit ? 'Edit blog' : 'Create blog' }}</h1>
            <p>Set the H1, SEO fields, FAQs, and internal links so the page can rank.</p>
        </div>
        <a href="{{ route('admin.blogs.index') }}" class="ab-btn ab-btn-ghost">
            <i class="ti ti-arrow-left"></i> Back to blogs
        </a>
    </div>

    <form action="{{ $isEdit ? route('admin.blogs.update', $blog) : route('admin.blogs.store') }}"
          method="POST" enctype="multipart/form-data" id="blog-seo-form">
        @csrf
        @if($isEdit) @method('PUT') @endif

        <section class="ab-card">
            <div class="ab-card-head">
                <span class="ab-step">1</span>
                <div>
                    <h2>Title, URL &amp; headings</h2>
                    <p>One H1 only. Use H2/H3 inside the article.</p>
                </div>
            </div>
            <div class="ab-card-body">
                <div class="mb-3">
                    <label for="title" class="form-label">H1 / Article title <span class="text-danger">*</span></label>
                    <input type="text" name="title" id="title"
                           class="form-control text-black @error('title') is-invalid @enderror"
                           value="{{ old('title', $blog->title ?? '') }}"
                           placeholder="e.g. Online Quran Classes for Kids: A Complete Guide for Parents" maxlength="180">
                    <div class="form-text">Keep the primary keyword near the start.</div>
                    @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label">URL slug</label>
                    <div class="input-group">
                        <span class="input-group-text">/blogs/</span>
                        <input type="text" name="slug" id="slug"
                               class="form-control text-black @error('slug') is-invalid @enderror"
                               value="{{ old('slug', $blog->slug ?? '') }}"
                               placeholder="online-quran-classes-for-kids">
                    </div>
                    <div class="form-text">Leave blank to auto-generate from the title.</div>
                    @error('slug')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="ab-note mb-0">
                    Use Heading 2 and Heading 3 in the editor. H1 is reserved for the title.
                </div>
            </div>
        </section>

        <section class="ab-card">
            <div class="ab-card-head">
                <span class="ab-step">2</span>
                <div>
                    <h2>Keywords, meta &amp; excerpt</h2>
                    <p>This is what Google and the listing page show.</p>
                </div>
            </div>
            <div class="ab-card-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="primary_keyword" class="form-label">Primary keyword</label>
                        <input type="text" name="primary_keyword" id="primary_keyword"
                               class="form-control text-black"
                               value="{{ old('primary_keyword', $blog->primary_keyword ?? '') }}"
                               placeholder="e.g. online Quran classes for kids">
                    </div>
                    <div class="col-md-6">
                        <label for="secondary_keywords" class="form-label">Secondary keywords</label>
                        <input type="text" name="secondary_keywords" id="secondary_keywords"
                               class="form-control text-black"
                               value="{{ old('secondary_keywords', $blog->secondary_keywords ?? '') }}"
                               placeholder="Quran tutor for children, Noorani Qaida">
                    </div>
                    <div class="col-12">
                        <label for="meta_title" class="form-label">SEO title</label>
                        <input type="text" name="meta_title" id="meta_title"
                               class="form-control text-black" maxlength="70"
                               value="{{ old('meta_title', $blog->meta_title ?? '') }}"
                               placeholder="Online Quran Classes for Kids | Rooh Ul Quran Academy">
                        <div class="form-text"><span id="meta-title-count">0</span>/70 characters</div>
                    </div>
                    <div class="col-12">
                        <label for="meta_description" class="form-label">Meta description</label>
                        <textarea name="meta_description" id="meta_description" rows="3" maxlength="180"
                                  class="form-control text-black"
                                  placeholder="Learn Quran online with certified teachers. Flexible 30-minute classes and a 3-day free trial.">{{ old('meta_description', $blog->meta_description ?? '') }}</textarea>
                        <div class="form-text"><span id="meta-desc-count">0</span>/160 recommended</div>
                    </div>
                    <div class="col-12">
                        <label for="excerpt" class="form-label">Excerpt</label>
                        <textarea name="excerpt" id="excerpt" rows="2" maxlength="300"
                                  class="form-control text-black"
                                  placeholder="Short summary shown on the blogs page.">{{ old('excerpt', $blog->excerpt ?? '') }}</textarea>
                    </div>
                </div>
            </div>
        </section>

        <section class="ab-card">
            <div class="ab-card-head">
                <span class="ab-step">3</span>
                <div>
                    <h2>Article content</h2>
                    <p>Start with the primary keyword in the first 100 words.</p>
                </div>
            </div>
            <div class="ab-card-body">
                <label for="summernote" class="form-label">Content <span class="text-danger">*</span></label>
                <textarea name="content" id="summernote" rows="8"
                          class="form-control @error('content') is-invalid @enderror">{{ old('content', $blog->content ?? '') }}</textarea>
                @error('content')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror

                <div class="mt-4">
                    <label for="featured_image" class="form-label">Featured image</label>
                    <input type="file" name="featured_image" id="featured_image"
                           class="form-control @error('featured_image') is-invalid @enderror" accept="image/*">
                    @error('featured_image')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    @if($isEdit && $blog->image_url)
                        <div class="ab-preview">
                            <img src="{{ $blog->image_url }}" alt="Current image">
                        </div>
                    @endif
                </div>
            </div>
        </section>

        <section class="ab-card">
            <div class="ab-card-head">
                <span class="ab-step">4</span>
                <div class="flex-grow-1">
                    <h2>FAQs</h2>
                    <p>Shown on the article and as FAQ schema.</p>
                </div>
                <button type="button" class="ab-btn ab-btn-ghost" id="add-faq">Add FAQ</button>
            </div>
            <div class="ab-card-body" id="faq-list">
                @foreach($faqs as $i => $faq)
                    <div class="ab-faq-row faq-row">
                        <div class="mb-2">
                            <label class="form-label small">Question</label>
                            <input type="text" name="faqs[{{ $i }}][question]" class="form-control"
                                   value="{{ $faq['question'] ?? '' }}" placeholder="Do you offer a free trial class?">
                        </div>
                        <div>
                            <label class="form-label small">Answer</label>
                            <textarea name="faqs[{{ $i }}][answer]" rows="2" class="form-control"
                                      placeholder="Yes. Rooh Ul Quran Academy offers a 3-day free trial...">{{ $faq['answer'] ?? '' }}</textarea>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="ab-card">
            <div class="ab-card-head">
                <span class="ab-step">5</span>
                <div class="flex-grow-1">
                    <h2>Internal links</h2>
                    <p>Point readers to related academy pages.</p>
                </div>
                <button type="button" class="ab-btn ab-btn-ghost" id="add-link">Add link</button>
            </div>
            <div class="ab-card-body">
                @if(count($suggestedLinks))
                    <div class="mb-3">
                        <div class="form-label small">Suggested pages</div>
                        <div class="ab-chip-row">
                            @foreach($suggestedLinks as $suggested)
                                <button type="button" class="ab-chip suggest-link"
                                        data-label="{{ $suggested['label'] }}" data-url="{{ $suggested['url'] }}">
                                    {{ $suggested['label'] }}
                                </button>
                            @endforeach
                        </div>
                    </div>
                @endif
                <div id="link-list">
                    @foreach($links as $i => $link)
                        <div class="link-row row g-2 mb-2">
                            <div class="col-md-5">
                                <input type="text" name="internal_links[{{ $i }}][label]" class="form-control"
                                       value="{{ $link['label'] ?? '' }}" placeholder="Link text">
                            </div>
                            <div class="col-md-7">
                                <input type="url" name="internal_links[{{ $i }}][url]" class="form-control"
                                       value="{{ $link['url'] ?? '' }}" placeholder="https://roohulquranacademy.com/...">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <div class="ab-savebar">
            <div class="form-check mb-0">
                <input class="form-check-input" type="checkbox" name="status" id="status" value="1"
                       {{ old('status', $blog->status ?? true) ? 'checked' : '' }}>
                <label class="form-check-label" for="status">Publish now</label>
            </div>
            <button type="submit" class="ab-btn ab-btn-primary">
                {{ $isEdit ? 'Update blog' : 'Create blog' }}
            </button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $('#summernote').summernote({
            placeholder: 'Write with H2/H3 headings. Mention the academy naturally and invite a 3-day free trial.',
            tabsize: 2,
            height: 340,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview']]
            ]
        });

        var title = document.getElementById('title');
        var slug = document.getElementById('slug');
        title.addEventListener('input', function () {
            if (!slug.dataset.locked) {
                slug.value = title.value.toLowerCase().trim()
                    .replace(/[^a-z0-9\s-]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-');
            }
        });
        slug.addEventListener('input', function () { slug.dataset.locked = '1'; });

        function bindCount(id, out) {
            var el = document.getElementById(id);
            var box = document.getElementById(out);
            function tick() { box.textContent = (el.value || '').length; }
            el.addEventListener('input', tick);
            tick();
        }
        bindCount('meta_title', 'meta-title-count');
        bindCount('meta_description', 'meta-desc-count');

        var faqIndex = {{ count($faqs) }};
        document.getElementById('add-faq').addEventListener('click', function () {
            var wrap = document.createElement('div');
            wrap.className = 'ab-faq-row faq-row';
            wrap.innerHTML = '<div class="mb-2"><label class="form-label small">Question</label>'
                + '<input type="text" name="faqs[' + faqIndex + '][question]" class="form-control" placeholder="Question"></div>'
                + '<div><label class="form-label small">Answer</label>'
                + '<textarea name="faqs[' + faqIndex + '][answer]" rows="2" class="form-control" placeholder="Answer"></textarea></div>';
            document.getElementById('faq-list').appendChild(wrap);
            faqIndex++;
        });

        var linkIndex = {{ count($links) }};
        function addLinkRow(label, url) {
            var wrap = document.createElement('div');
            wrap.className = 'link-row row g-2 mb-2';
            wrap.innerHTML = '<div class="col-md-5"><input type="text" name="internal_links[' + linkIndex + '][label]" class="form-control" value="' + (label || '') + '" placeholder="Link text"></div>'
                + '<div class="col-md-7"><input type="url" name="internal_links[' + linkIndex + '][url]" class="form-control" value="' + (url || '') + '" placeholder="https://"></div>';
            document.getElementById('link-list').appendChild(wrap);
            linkIndex++;
        }
        document.getElementById('add-link').addEventListener('click', function () { addLinkRow('', ''); });
        document.querySelectorAll('.suggest-link').forEach(function (btn) {
            btn.addEventListener('click', function () {
                addLinkRow(btn.getAttribute('data-label'), btn.getAttribute('data-url'));
            });
        });
    });
</script>
@endpush
