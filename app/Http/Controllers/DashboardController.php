<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return
            view('header') .
            view('pages.dashboard') .
            view('footer');
    }
}
