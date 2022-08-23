<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function prefPullDown() {
        $prefs = config('pref');prefPullDown
        return view('search')->with(['prefs' => $prefs]);
    }
}
