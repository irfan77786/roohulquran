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
                                            <a href="{{ url('/blog/' . $blog->slug) }}" target="_blank"
                                                class="link-primary text-dark fw-medium d-block">
                                                {{ url('/blog/' . $blog->slug) }}
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
