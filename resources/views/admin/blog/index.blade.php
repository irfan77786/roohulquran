@extends('admin.main')

@section('content')
    <div class="container">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    {{-- Header and Create Button --}}
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="card-title mb-0">Blogs</h5>
                        <a href="{{ route('admin.blogs.create') }}" class="btn btn-success">Create Blog</a>
                    </div>

                    {{-- Filters --}}
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-header bg-white border-0 py-3">
                            <h5 class="mb-0 fw-bold">Filters</h5>
                        </div>
                        <div class="card-body">
                            <form method="GET" action="{{ route('admin.blogs.index') }}" id="filterForm">
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label class="form-label small">Search</label>
                                        <input type="text" class="form-control form-control-sm" name="search" value="{{ request('search') }}" placeholder="Title, Slug, Content...">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label small">Status</label>
                                        <select class="form-select form-select-sm" name="status">
                                            <option value="">All Status</option>
                                            <option value="published" {{ request('status') == 'published' ? 'selected' : '' }}>Published</option>
                                            <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label small">Date From</label>
                                        <input type="date" class="form-control form-control-sm" name="date_from" value="{{ request('date_from') }}">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label small">Date To</label>
                                        <input type="date" class="form-control form-control-sm" name="date_to" value="{{ request('date_to') }}">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label small">&nbsp;</label>
                                        <button type="submit" class="btn btn-sm btn-primary w-100">
                                            <i class="ti ti-filter"></i>
                                        </button>
                                    </div>
                                    @php
                                        $hasFilters = request()->filled('search') || request()->filled('status') || request()->filled('date_from') || request()->filled('date_to');
                                    @endphp
                                    @if($hasFilters)
                                    <div class="col-md-12">
                                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-sm btn-outline-secondary">
                                            <i class="ti ti-x me-1"></i>Clear Filters
                                        </a>
                                    </div>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- Blog Table --}}
                    <div class="table-responsive">
                        <table class="table text-nowrap align-middle mb-0">
                            <thead>
                                <tr class="border-2 border-bottom border-primary border-0">
                                    <th scope="col" class="ps-0">Title</th>
                                    <th scope="col">Slug Link</th>
                                    <th scope="col" class="text-center">Image</th>
                                    <th scope="col" class="text-center">Status</th>
                                    <th scope="col" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @forelse ($blogs as $blog)
                                    <tr>
                                        <th scope="row" class="ps-0 fw-medium">
                                            <span class="table-link1 text-truncate d-block">{{ $blog->title }}</span>
                                        </th>
                                        <td>
                                            <a href="{{ route('blogs.show', $blog->slug) }}" target="_blank" rel="noopener"
                                                class="link-primary text-dark fw-medium d-block">
                                                {{ route('blogs.show', $blog->slug) }}
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            @if ($blog->image_url)
                                                <img src="{{ $blog->image_url }}" alt="Blog Image" width="60" height="60" style="object-fit: cover;">
                                            @else
                                                <span class="text-muted">No Image</span>
                                            @endif
                                        </td>
                                        <td class="text-center fw-medium">
                                            <span class="badge bg-{{ $blog->status === 'published' ? 'success' : 'secondary' }}">
                                                {{ ucfirst($blog->status) }}
                                            </span>
                                        </td>
                                        <td class="text-center fw-medium">
                                            <a href="{{ route('admin.blogs.show', $blog->id) }}" class="btn btn-sm btn-info me-1">View</a>
                                            <a href="{{ route('admin.blogs.edit', $blog->id) }}"
                                                class="btn btn-sm btn-primary me-1">Edit</a>
                                            <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST"
                                                style="display:inline-block;"
                                                onsubmit="return confirm('Are you sure to delete this blog?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center text-muted">No blogs available</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
