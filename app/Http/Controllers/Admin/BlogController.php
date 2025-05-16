<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required',
            'featured_image' => 'nullable|url',
            'seo' => 'nullable|array',
        ]);

        $validated['slug'] = Str::slug($request->title);
        $validated['author'] = auth()->user()->name;
        Blog::create($validated);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created!');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required',
            'featured_image' => 'nullable|url',
            'seo' => 'nullable|array',
        ]);

        $validated['slug'] = Str::slug($request->title);
        $blog->update($validated);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated!');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted!');
    }
}
