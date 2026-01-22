<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function conocenos()
    {
        return view('pages.conocenos');
    }

    public function faq()
    {
        return view('pages.faq');
    }
}
