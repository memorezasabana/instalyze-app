<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HashtagController extends Controller
{
    public function showAnalyzePage()
    {
        return view('analyze-hastag');
    }
}