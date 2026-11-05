@extends('admin.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('admin/assets/css/admin-blogs.css') }}">
@endpush

@section('content')
<div class="ab-wrap">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">Please fix the highlighted fields in the form.</div>
    @endif

    <div class="ab-head">
        <div>
            <span class="ab-kicker">Content</span>
            <h1>Blogs</h1>
            <p>Write, publish, and refine academy articles.</p>
        </div>
        <button type="button" class="ab-btn ab-btn-primary" id="openCreateBlog">
            <i class="ti ti-plus"></i> Create blog
        </button>
    </div>

    <div class="ab-panel ab-filters">
        <form method="GET" action="{{ route('admin.blogs.index') }}" id="filterForm">
            <div class="row g-3 align-items-end">
                <div class="col-md-4">
                    <label class="form-label">Search</label>
                    <input type="text" class="form-control" name="search" value="{{ request('search') }}" placeholder="Title or content">
                </div>
                <div class="col-md-2">
                    <label class="form-label">Status</label>
                    <select class="form-select" name="status">
                        <option value="">All</option>
                        <option value="published" {{ request('status') == 'published' ? 'selected' : '' }}>Published</option>
                        <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label">From</label>
                    <input type="date" class="form-control" name="date_from" value="{{ request('date_from') }}">
                </div>
                <div class="col-md-2">
                    <label class="form-label">To</label>
                    <input type="date" class="form-control" name="date_to" value="{{ request('date_to') }}">
                </div>
                <div class="col-md-2 d-flex gap-2">
                    <button type="submit" class="ab-filter-btn" title="Apply filters">
                        <i class="ti ti-filter"></i>
                    </button>
                    @if(request()->filled('search') || request()->filled('status') || request()->filled('date_from') || request()->filled('date_to'))
                        <a href="{{ route('admin.blogs.index') }}" class="ab-clear-btn px-3" title="Clear filters">
                            <i class="ti ti-x"></i>
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>

    <div class="ab-panel ab-table-wrap">
        <div class="table-responsive">
            <table class="table ab-table mb-0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th style="width: 120px;">Image</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($blogs as $blog)
                        <tr>
                            <td>
                                <span class="ab-title" title="{{ $blog->title }}">{{ \Illuminate\Support\Str::limit($blog->title, 30, '...') }}</span>
                            </td>
                            <td>
                                @if ($blog->image_url)
                                    <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" class="ab-thumb">
                                @else
                                    <span class="ab-thumb-empty">No image</span>
                                @endif
                            </td>
                            <td>
                                <div class="ab-actions">
                                    <a href="{{ route('admin.blogs.show', $blog->id) }}" class="ab-icon ab-icon-view" title="View">
                                        <i class="ti ti-eye"></i>
                                    </a>
                                    <button type="button" class="ab-icon ab-icon-edit js-edit-blog" title="Edit"
                                        data-url="{{ route('admin.blogs.edit', $blog->id) }}">
                                        <i class="ti ti-pencil"></i>
                                    </button>
                                    <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST"
                                        onsubmit="return confirm('Delete this blog?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="ab-icon ab-icon-del" title="Delete">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">
                                <div class="ab-empty">
                                    <i class="ti ti-notebook"></i>
                                    <strong>No blogs yet</strong>
                                    <p class="mb-0 mt-1">Create your first article to appear here.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @if ($blogs->hasPages())
        <div class="mt-3">
            {{ $blogs->links() }}
        </div>
    @endif
</div>

<div class="modal fade ab-form-modal" id="blogFormModal" tabindex="-1" aria-labelledby="blogFormModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <span class="ab-kicker mb-0" id="blogFormModalKicker">Article</span>
                    <h5 class="modal-title" id="blogFormModalLabel">Create blog</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="blogFormModalBody">
                @if($errors->any())
                    @include('admin.blog.partials.form', [
                        'blog' => $formBlog ?? null,
                        'suggestedLinks' => $suggestedLinks ?? [],
                    ])
                @else
                    <div class="ab-modal-loading text-center py-5 text-muted">
                        <div class="spinner-border text-success mb-3" role="status"></div>
                        <div>Loading form...</div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
(function () {
    const createUrl = @json(route('admin.blogs.create'));
    const modalEl = document.getElementById('blogFormModal');
    const bodyEl = document.getElementById('blogFormModalBody');
    const titleEl = document.getElementById('blogFormModalLabel');
    const kickerEl = document.getElementById('blogFormModalKicker');
    const modal = new bootstrap.Modal(modalEl);
    const shouldReopen = @json($errors->any());

    function destroyEditor() {
        if (window.jQuery && jQuery('#summernote').length && jQuery('#summernote').next('.note-editor').length) {
            jQuery('#summernote').summernote('destroy');
        }
    }

    function initBlogForm() {
        if (!window.jQuery || !jQuery('#summernote').length) {
            return;
        }

        jQuery('#summernote').summernote({
            placeholder: 'Write with H2/H3 headings. Mention the academy naturally and invite a 3-day free trial.',
            tabsize: 2,
            height: 340,
            dialogsInBody: true,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview']]
            ]
        });

        const title = document.getElementById('title');
        const slug = document.getElementById('slug');
        if (title && slug) {
            title.addEventListener('input', function () {
                if (!slug.dataset.locked) {
                    slug.value = title.value.toLowerCase().trim()
                        .replace(/[^a-z0-9\s-]/g, '')
                        .replace(/\s+/g, '-')
                        .replace(/-+/g, '-');
                }
            });
            slug.addEventListener('input', function () { slug.dataset.locked = '1'; });
        }

        function bindCount(id, out) {
            const el = document.getElementById(id);
            const box = document.getElementById(out);
            if (!el || !box) return;
            const tick = function () { box.textContent = (el.value || '').length; };
            el.addEventListener('input', tick);
            tick();
        }
        bindCount('meta_title', 'meta-title-count');
        bindCount('meta_description', 'meta-desc-count');

        let faqIndex = document.querySelectorAll('#faq-list .faq-row').length;
        const addFaq = document.getElementById('add-faq');
        if (addFaq) {
            addFaq.addEventListener('click', function () {
                const wrap = document.createElement('div');
                wrap.className = 'ab-faq-row faq-row';
                wrap.innerHTML = '<div class="d-flex justify-content-between align-items-center mb-2">'
                    + '<label class="form-label small mb-0">Question</label>'
                    + '<button type="button" class="ab-row-remove js-remove-faq" title="Remove FAQ"><i class="ti ti-trash"></i> Remove</button></div>'
                    + '<input type="text" name="faqs[' + faqIndex + '][question]" class="form-control mb-2" placeholder="Question">'
                    + '<label class="form-label small">Answer</label>'
                    + '<textarea name="faqs[' + faqIndex + '][answer]" rows="2" class="form-control" placeholder="Answer"></textarea>';
                document.getElementById('faq-list').appendChild(wrap);
                faqIndex++;
            });
        }

        let linkIndex = document.querySelectorAll('#link-list .link-row').length;
        function addLinkRow(label, url) {
            const wrap = document.createElement('div');
            wrap.className = 'link-row row g-2 mb-2 align-items-center';
            wrap.innerHTML = '<div class="col-md-5"><input type="text" name="internal_links[' + linkIndex + '][label]" class="form-control" value="' + (label || '') + '" placeholder="Link text"></div>'
                + '<div class="col-md-6"><input type="url" name="internal_links[' + linkIndex + '][url]" class="form-control" value="' + (url || '') + '" placeholder="https://"></div>'
                + '<div class="col-md-1"><button type="button" class="ab-row-remove js-remove-link w-100" title="Remove link"><i class="ti ti-trash"></i></button></div>';
            document.getElementById('link-list').appendChild(wrap);
            linkIndex++;
        }
        const addLink = document.getElementById('add-link');
        if (addLink) {
            addLink.addEventListener('click', function () { addLinkRow('', ''); });
        }
        document.querySelectorAll('.suggest-link').forEach(function (btn) {
            btn.addEventListener('click', function () {
                addLinkRow(btn.getAttribute('data-label'), btn.getAttribute('data-url'));
            });
        });
    }

    modalEl.addEventListener('click', function (event) {
        const removeFaq = event.target.closest('.js-remove-faq');
        if (removeFaq) {
            const row = removeFaq.closest('.faq-row');
            if (row) row.remove();
            return;
        }
        const removeLink = event.target.closest('.js-remove-link');
        if (removeLink) {
            const row = removeLink.closest('.link-row');
            if (row) row.remove();
        }
    });

    async function openBlogForm(url, isEdit) {
        titleEl.textContent = isEdit ? 'Edit blog' : 'Create blog';
        kickerEl.textContent = isEdit ? 'Edit article' : 'New article';
        destroyEditor();
        bodyEl.innerHTML = '<div class="ab-modal-loading text-center py-5 text-muted"><div class="spinner-border text-success mb-3" role="status"></div><div>Loading form...</div></div>';
        modal.show();

        try {
            const response = await fetch(url, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'text/html'
                }
            });
            if (!response.ok) {
                throw new Error('Unable to load form');
            }
            bodyEl.innerHTML = await response.text();
            initBlogForm();
        } catch (error) {
            bodyEl.innerHTML = '<div class="alert alert-danger m-3">Could not load the form. Please try again.</div>';
        }
    }

    document.getElementById('openCreateBlog').addEventListener('click', function () {
        openBlogForm(createUrl, false);
    });

    document.querySelectorAll('.js-edit-blog').forEach(function (btn) {
        btn.addEventListener('click', function () {
            openBlogForm(btn.getAttribute('data-url'), true);
        });
    });

    modalEl.addEventListener('hidden.bs.modal', function () {
        destroyEditor();
        if (!shouldReopen) {
            bodyEl.innerHTML = '<div class="ab-modal-loading text-center py-5 text-muted"><div class="spinner-border text-success mb-3"></div></div>';
        }
    });

    if (shouldReopen) {
        titleEl.textContent = document.querySelector('#blog-seo-form input[name="_method"]') ? 'Edit blog' : 'Create blog';
        kickerEl.textContent = document.querySelector('#blog-seo-form input[name="_method"]') ? 'Edit article' : 'New article';
        modal.show();
        initBlogForm();
    } else {
        const params = new URLSearchParams(window.location.search);
        if (params.get('create') === '1') {
            openBlogForm(createUrl, false);
        } else if (params.get('edit')) {
            openBlogForm(@json(url('/admin/blogs')) + '/' + params.get('edit') + '/edit', true);
        }
    }
})();
</script>
@endpush
