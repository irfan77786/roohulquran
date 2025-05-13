<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TrialClass;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        return view('admin.dashbaord');
    }

    public function trialClasses(){

        $classes = TrialClass::latest()->paginate(10);

        return view('admin.trial-classes',compact('classes'));
    }
}
