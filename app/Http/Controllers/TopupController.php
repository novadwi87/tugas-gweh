<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\konter;

use Illuminate\View\View;

class TopupController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get artikels
        $topup = Konter::latest()->paginate(5);

        //render view with artikels
        return view('topup.index', compact('topup'));
    }
}
