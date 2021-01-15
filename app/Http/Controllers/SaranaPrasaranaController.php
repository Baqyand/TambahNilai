<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaPrasaranaController extends Controller
{
    public function index()
    {
        return view('sarpras.index');
    }

    public function create()
    {
        return view('sarpras.form');
    }
}
