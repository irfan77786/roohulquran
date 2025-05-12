<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function quraWithTajweed()
    {
        return view('courses.quran-reading');
    }

    public function quraWithTafseer()
    {
        return view('courses.quran-reading-with-tafseer');
    }

    public function quraMemorization()
    {
        return view('courses.quran-memorization');
    }

    public function quraRecitation()
    {
        return view('courses.quran-recitation');
    }

    public function quraArabicLanguage()
    {
        return view('courses.quran-arabic-language');
    }
}
