<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function index($category_slug,$search_keyword,$type)
    {
        return view('frontend.explorer.explorer');
    }

    public function letter_template_overview($slug)
    {
        return view('frontend.explorer.letter_template_overview');
    }
}
