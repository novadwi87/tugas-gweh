<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutcontrollerController extends Controller
{
    public function index()
    {
        return view('about');
    }
}
