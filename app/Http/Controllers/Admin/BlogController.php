<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\AdminNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

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
            $uploadedFile = $request->file('featured_image');
            $uploadResult = Cloudinary::upload($uploadedFile->getRealPath(), [
                'folder' => 'blogs',
                'public_id' => 'blog_' . $blog->id . '_' . time(),
            ]);
            $blog->featured_image = $uploadResult->getSecurePath();
            $blog->save();
        }

        // Create notification
        if ($blog->status) {
            AdminNotification::createNotification(
                'blog',
                'New Blog Published',
                $validated['title'] . ' has been published',
                'ti ti-file-text',
                'success',
                ['blog_id' => $blog->id, 'title' => $validated['title']],
                'blog',
                $blog->id
            );
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
            // Delete old image from Cloudinary if exists
            if ($blog->featured_image) {
                try {
                    $publicId = $this->extractPublicIdFromUrl($blog->featured_image);
                    if ($publicId) {
                        Cloudinary::destroy($publicId);
                    }
                } catch (\Exception $e) {
                    // Log error but continue with upload
                    \Log::warning('Failed to delete old Cloudinary image: ' . $e->getMessage());
                }
            }

            $uploadedFile = $request->file('featured_image');
            $uploadResult = Cloudinary::upload($uploadedFile->getRealPath(), [
                'folder' => 'blogs',
                'public_id' => 'blog_' . $blog->id . '_' . time(),
            ]);
            $blog->featured_image = $uploadResult->getSecurePath();
            $blog->save(); // Save updated image path
        }

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated!');
    }


    public function destroy(Blog $blog)
    {
        // Delete image from Cloudinary if exists
        if ($blog->featured_image) {
            try {
                $publicId = $this->extractPublicIdFromUrl($blog->featured_image);
                if ($publicId) {
                    Cloudinary::destroy($publicId);
                }
            } catch (\Exception $e) {
                // Log error but continue with deletion
                \Log::warning('Failed to delete Cloudinary image: ' . $e->getMessage());
            }
        }
        
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted!');
    }

    /**
     * Extract public_id from Cloudinary URL
     */
    private function extractPublicIdFromUrl($url)
    {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            return null;
        }

        try {
            $urlParts = parse_url($url);
            if (!isset($urlParts['path'])) {
                return null;
            }

            $pathParts = explode('/', trim($urlParts['path'], '/'));
            // Cloudinary URL format: /{cloud_name}/image/upload/v{version}/{public_id}.{ext}
            // Or: /{cloud_name}/image/upload/{transformations}/v{version}/{public_id}.{ext}
            // We need to find 'upload' and get everything after the version
            $uploadIndex = array_search('upload', $pathParts);
            if ($uploadIndex === false) {
                return null;
            }

            // Get everything after 'upload'
            $afterUpload = array_slice($pathParts, $uploadIndex + 1);
            
            // Find the version part (starts with 'v' followed by numbers)
            $versionIndex = null;
            foreach ($afterUpload as $index => $part) {
                if (preg_match('/^v\d+$/', $part)) {
                    $versionIndex = $index;
                    break;
                }
            }

            if ($versionIndex === null) {
                // No version found, might be a different URL format
                // Try to get everything after upload as public_id
                $publicIdParts = $afterUpload;
            } else {
                // Get everything after the version
                $publicIdParts = array_slice($afterUpload, $versionIndex + 1);
            }

            if (empty($publicIdParts)) {
                return null;
            }

            $publicId = implode('/', $publicIdParts);
            // Remove file extension
            $publicId = preg_replace('/\.[^.]*$/', '', $publicId);
            
            return $publicId;
        } catch (\Exception $e) {
            \Log::warning('Failed to extract public_id from URL: ' . $e->getMessage());
            return null;
        }
    }
}
