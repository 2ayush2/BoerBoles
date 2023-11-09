<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{

    public function show($slug)
    {
        // echo " Site Under Construction";
        return view('site_unser_construction');
    }
}
