<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $data['lantai'] = [1, 2];
        $data['blok'] = ['A','B','C','D','E','F','G','H'];
        $data['tipe'] = ['Labolatorium', 'Kelas'];
        $data['status'] = ['Kosong', 'Digunakan'];
        return view('index', compact('data'));
    }
}
