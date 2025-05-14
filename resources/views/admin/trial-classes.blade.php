@extends('admin.main')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Trial Classes</h2>
    
    <div class="table-responsive">
        <table class="table table-bordered table-hover shadow-sm">
            <thead class="thead-dark bg-dark text-white">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Contact</th>
                    <th>Message</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($classes as $index => $class)
                    <tr>
                        <td>{{ $classes->firstItem() + $index }}</td>
                        <td>{{ $class->name ?? '' }}</td>
                        <td>{{ $class->email ?? '' }}</td>
                        <td>{{ $class->phone ?? '' }}</td>
                        <td>{{ $class->contact ?? '' }}</td>
                        <td>{{ Str::limit($class->message ?? '', 50) }}</td>
                        <td>{{ $class->created_at->format('d M Y, h:i A') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">No trial classes found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center mt-4">
        {!! $classes->links() !!}
    </div>
    
</div>
@endsection
