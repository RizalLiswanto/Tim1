<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GurunController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
