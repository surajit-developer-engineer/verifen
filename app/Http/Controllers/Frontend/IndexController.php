<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('pages.frontend.index');
    }

    public function application()
    {
        return view('pages.frontend.application');
    }

    public function partner()
    {
        return view('pages.frontend.partner');
    }
}
