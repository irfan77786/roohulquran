<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('status', '1')->latest()->paginate(1);
        return view('blogs.index', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();


        $relatedBlogs = Blog::where('id', '!=', $blog->id)
            ->where('status', '1')
            ->latest()
            ->take(3)
            ->get();

        return view('blogs.show' , compact('blog', 'relatedBlogs'));
    }
}
