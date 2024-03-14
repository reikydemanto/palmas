<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return
            view('header') .
            view('pages.products') .
            view('footer');
    }
}
