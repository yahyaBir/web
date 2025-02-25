<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Ana sayfa görünümünü döndürür
     */
    public function index()
    {
        return view('pages.home');
    }
} 