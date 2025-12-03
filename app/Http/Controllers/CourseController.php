<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\CachesResponses;

class CourseController extends Controller
{
    use CachesResponses;

    public function quraWithTajweed()
    {
        return $this->cachedView('courses.quran-reading', [], null);
    }

    public function quraWithTafseer()
    {
        return $this->cachedView('courses.tafseer', [], null);
    }

    public function quraMemorization()
    {
        return $this->cachedView('courses.quran-memorization', [], null);
    }

    public function quraRecitation()
    {
        return $this->cachedView('courses.qaida', [], null);
    }

    public function quraArabicLanguage()
    {
        return $this->cachedView('courses.quran-arabic-language', [], null);
    }

    public function begineerClasses()
    {
        return $this->cachedView('courses.beginner-classes', [], null);
    }
    
    public function kidsClasses()
    {
        return $this->cachedView('courses.kids-classes', [], null);
    }
}
