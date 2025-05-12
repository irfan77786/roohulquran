<?php

namespace App\Http\Controllers;

use App\Jobs\SendTrialClassEmailJob;
use App\Models\TrialClass;
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
        // dd($request->all());
       $validated =  $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:20',
            'country' => 'nullable|string|max:100',
            'message' => 'nullable|string|max:500',
            'course_enroll' => 'nullable|string|max:255'
        ]);

        TrialClass::create($request->all());

        if (!empty($validated['email'])) {
            SendTrialClassEmailJob::dispatch($validated);
        }

        return response()->json(['message' => 'We received your Query, InshAllah we will contact you soon'], 201);
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
