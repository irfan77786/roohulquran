<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class ProtectPublicFormSubmission
{
    /**
     * Basic anti-spam checks for public forms.
     */
    public function handle(Request $request, Closure $next)
    {
        // Honeypot: humans do not fill this field.
        if (!empty($request->input('website'))) {
            return $this->spamResponse($request, 'Submission blocked.');
        }

        // Timing trap: blocks most instant scripted posts.
        $startedAt = (int) $request->input('form_started_at', 0);
        if ($startedAt <= 0 || (time() - $startedAt) < 3) {
            return $this->spamResponse($request, 'Please wait a moment before submitting the form.');
        }

        // Duplicate guard (same normalized payload from same IP for 30 mins).
        $signature = $this->submissionSignature($request);
        $duplicateKey = 'form-duplicate:' . $signature;
        if (Cache::has($duplicateKey)) {
            return $this->spamResponse($request, 'Duplicate submission detected. Please try again later.');
        }

        Cache::put($duplicateKey, true, now()->addMinutes(30));

        return $next($request);
    }

    private function submissionSignature(Request $request): string
    {
        $parts = [
            strtolower(trim((string) $request->ip())),
            strtolower(trim((string) $request->input('name'))),
            strtolower(trim((string) $request->input('email'))),
            strtolower(trim((string) $request->input('phone'))),
            strtolower(trim((string) $request->input('country'))),
            Str::limit(strtolower(trim((string) $request->input('message'))), 120),
            strtolower(trim((string) $request->input('course_enroll'))),
        ];

        return sha1(implode('|', $parts));
    }

    private function spamResponse(Request $request, string $message)
    {
        if ($request->expectsJson() || $request->ajax()) {
            return response()->json(['message' => $message], 429);
        }

        return back()->withErrors(['spam' => $message])->withInput();
    }
}
