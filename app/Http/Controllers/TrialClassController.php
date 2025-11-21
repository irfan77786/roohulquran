<?php

namespace App\Http\Controllers;

use App\Jobs\SendTrialClassEmailJob;
use App\Models\TrialClass;
use App\Models\AdminNotification;
use Illuminate\Http\Request;

class TrialClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'nullable|email|max:255',
                'phone' => 'required|string|max:20',
                'country' => 'nullable|string|max:100',
                'message' => 'nullable|string|max:500',
                'course_enroll' => 'nullable|string|max:255'
            ]);

            $trialClass = TrialClass::create($request->all());

            // Create notification for admin
            try {
                AdminNotification::createNotification(
                    'trial_class',
                    'New Trial Class Registration',
                    $validated['name'] . ' has registered for a trial class from ' . ($validated['country'] ?? 'Unknown'),
                    'ti ti-user',
                    'primary',
                    ['trial_class_id' => $trialClass->id, 'name' => $validated['name'], 'email' => $validated['email'] ?? null],
                    'trial_class',
                    $trialClass->id
                );
            } catch (\Exception $e) {
                // Log but don't fail if notification creation fails
                \Log::error('Failed to create admin notification: ' . $e->getMessage());
            }

            if (!empty($validated['email'])) {
                try {
                    SendTrialClassEmailJob::dispatch($validated);
                } catch (\Exception $e) {
                    // Log but don't fail if email job fails
                    \Log::error('Failed to dispatch email job: ' . $e->getMessage());
                }
            }

            return response()->json(['message' => 'We received your Query, InshAllah we will contact you soon'], 201);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['message' => 'Validation failed', 'errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            \Log::error('Trial class registration failed: ' . $e->getMessage());
            return response()->json(['message' => 'An error occurred. Please try again later.'], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TrialClass  $trialClass
     * @return \Illuminate\Http\Response
     */
    public function show(TrialClass $trialClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrialClass  $trialClass
     * @return \Illuminate\Http\Response
     */
    public function edit(TrialClass $trialClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TrialClass  $trialClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrialClass $trialClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrialClass  $trialClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrialClass $trialClass)
    {
        //
    }
}
