<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\BinaryFileResponse;

class MediaController extends Controller
{
    public function storage(string $path): BinaryFileResponse
    {
        $relative = $this->safeRelativePath($path);

        $candidates = [
            storage_path('app/public/' . $relative),
            public_path('uploads/' . $relative),
            public_path('storage/' . $relative),
        ];

        foreach ($candidates as $fullPath) {
            $real = realpath($fullPath);
            if ($real && is_file($real)) {
                return response()->file($real, [
                    'Cache-Control' => 'public, max-age=31536000',
                ]);
            }
        }

        abort(404);
    }

    private function safeRelativePath(string $path): string
    {
        $path = str_replace('\\', '/', $path);
        $path = ltrim($path, '/');

        if ($path === '' || str_contains($path, '..') || ! preg_match('/^[A-Za-z0-9._\-\/]+$/', $path)) {
            abort(404);
        }

        return $path;
    }
}
