@php
    $blog = $blog ?? null;
    $isEdit = (bool) $blog;
    $faqs = old('faqs', $blog?->faqs ?? [['question' => '', 'answer' => '']]);
    if (! is_array($faqs) || count($faqs) === 0) {
        $faqs = [['question' => '', 'answer' => '']];
    }
    $links = old('internal_links', $blog?->internal_links ?? [['label' => '', 'url' => '']]);
    if (! is_array($links) || count($links) === 0) {
        $links = [['label' => '', 'url' => '']];
    }
    $suggestedLinks = $suggestedLinks ?? [];
@endphp

<form action="{{ $isEdit ? route('admin.blogs.update', $blog) : route('admin.blogs.store') }}"
      method="POST" enctype="multipart/form-data" id="blog-seo-form" class="ab-modal-form">
    @csrf
    @if($isEdit)
        @method('PUT')
        <input type="hidden" name="blog_id" value="{{ $blog->id }}">
    @endif

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
                       value="{{ old('title', $blog?->title ?? '') }}"
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
                           value="{{ old('slug', $blog?->slug ?? '') }}"
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
                           value="{{ old('primary_keyword', $blog?->primary_keyword ?? '') }}"
                           placeholder="e.g. online Quran classes for kids">
                </div>
                <div class="col-md-6">
                    <label for="secondary_keywords" class="form-label">Secondary keywords</label>
                    <input type="text" name="secondary_keywords" id="secondary_keywords"
                           class="form-control text-black"
                           value="{{ old('secondary_keywords', $blog?->secondary_keywords ?? '') }}"
                           placeholder="Quran tutor for children, Noorani Qaida">
                </div>
                <div class="col-12">
                    <label for="meta_title" class="form-label">SEO title</label>
                    <input type="text" name="meta_title" id="meta_title"
                           class="form-control text-black" maxlength="70"
                               value="{{ old('meta_title', $blog?->meta_title ?? '') }}"
                           placeholder="Online Quran Classes for Kids | Rooh Ul Quran Academy">
                    <div class="form-text"><span id="meta-title-count">0</span>/70 characters</div>
                </div>
                <div class="col-12">
                    <label for="meta_description" class="form-label">Meta description</label>
                    <textarea name="meta_description" id="meta_description" rows="3" maxlength="180"
                              class="form-control text-black"
                              placeholder="Learn Quran online with certified teachers. Flexible 30-minute classes and a 3-day free trial.">{{ old('meta_description', $blog?->meta_description ?? '') }}</textarea>
                    <div class="form-text"><span id="meta-desc-count">0</span>/160 recommended</div>
                </div>
                <div class="col-12">
                    <label for="excerpt" class="form-label">Excerpt</label>
                    <textarea name="excerpt" id="excerpt" rows="2" maxlength="300"
                              class="form-control text-black"
                                  placeholder="Short summary shown on the blogs page.">{{ old('excerpt', $blog?->excerpt ?? '') }}</textarea>
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
                      class="form-control @error('content') is-invalid @enderror">{{ old('content', $blog?->content ?? '') }}</textarea>
            @error('content')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror

            <div class="mt-4">
                <label for="featured_image" class="form-label">Featured image</label>
                <input type="file" name="featured_image" id="featured_image"
                       class="form-control @error('featured_image') is-invalid @enderror" accept="image/*">
                @error('featured_image')<div class="invalid-feedback">{{ $message }}</div>@enderror
                @if($isEdit && $blog?->image_url)
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
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <label class="form-label small mb-0">Question</label>
                        <button type="button" class="ab-row-remove js-remove-faq" title="Remove FAQ">
                            <i class="ti ti-trash"></i> Remove
                        </button>
                    </div>
                    <input type="text" name="faqs[{{ $i }}][question]" class="form-control mb-2"
                           value="{{ $faq['question'] ?? '' }}" placeholder="Do you offer a free trial class?">
                    <label class="form-label small">Answer</label>
                    <textarea name="faqs[{{ $i }}][answer]" rows="2" class="form-control"
                              placeholder="Yes. Rooh Ul Quran Academy offers a 3-day free trial...">{{ $faq['answer'] ?? '' }}</textarea>
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
                    <div class="link-row row g-2 mb-2 align-items-center">
                        <div class="col-md-5">
                            <input type="text" name="internal_links[{{ $i }}][label]" class="form-control"
                                   value="{{ $link['label'] ?? '' }}" placeholder="Link text">
                        </div>
                        <div class="col-md-6">
                            <input type="url" name="internal_links[{{ $i }}][url]" class="form-control"
                                   value="{{ $link['url'] ?? '' }}" placeholder="https://roohulquranacademy.com/...">
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="ab-row-remove js-remove-link w-100" title="Remove link">
                                <i class="ti ti-trash"></i>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="ab-savebar">
        <div class="form-check mb-0">
            <input class="form-check-input" type="checkbox" name="status" id="status" value="1"
                   {{ old('status', $blog?->status ?? true) ? 'checked' : '' }}>
            <label class="form-check-label" for="status">Publish now</label>
        </div>
        <button type="submit" class="ab-btn ab-btn-primary">
            {{ $isEdit ? 'Update blog' : 'Create blog' }}
        </button>
    </div>
</form>
