<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class HomeController extends Controller
{
    /**
     * Show the home page.
     *
     * @return View
     */
    public function show()
    {
        return view('home');
    }
}