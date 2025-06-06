<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            'featured_image' => 'nullable|image',
            'seo' => 'nullable|array',

        ]);
    
        $validated['slug'] = Str::slug($request->title);
        $validated['author'] = auth()->user()->name;
    
        $blog = new Blog($validated);
        $blog->save();
    
        if ($request->hasFile('featured_image')) {
            $imagePath = $request->file('featured_image')->store("blogs/{$blog->id}", 'public');
            $blog->featured_image = $imagePath;
            $blog->save();
        }
    
        return redirect()->route('admin.blogs.index')->with('success', 'Blog created!');
    }

        public function show(Blog $blog)
    {
        return view('admin.blog.show', compact('blog'));
    }


    public function edit(Blog $blog)
    {
        return view('admin.blog.create', compact('blog'));
    }
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required',
            'featured_image' => 'nullable|image',
            'seo' => 'nullable|array',
        ]);
    
        $validated['slug'] = Str::slug($request->title);
        $validated['author'] = auth()->user()->name;
    
        // Update blog details
        $blog->update($validated);
    
        // Handle image upload if new image is provided
        if ($request->hasFile('featured_image')) {
            // Optionally: delete old image if exists
            if ($blog->featured_image && Storage::disk('public')->exists($blog->featured_image)) {
                Storage::disk('public')->delete($blog->featured_image);
            }
    
            $imagePath = $request->file('featured_image')->store("blogs/{$blog->id}", 'public');
            $blog->featured_image = $imagePath;
            $blog->save(); // Save updated image path
        }
    
        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated!');
    }
    

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted!');
    }
}
