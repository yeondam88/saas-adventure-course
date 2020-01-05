<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    public function page(Request $request, $slug)
    {
        $page = Page::where('slug', '=', $slug)->firstOrFail();
        return view('page', compact('page'));
    }
}