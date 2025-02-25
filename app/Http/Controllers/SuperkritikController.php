<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperkritikController extends Controller
{
    public function index()
    {
        return view('pages.superkritik');
    }
} 