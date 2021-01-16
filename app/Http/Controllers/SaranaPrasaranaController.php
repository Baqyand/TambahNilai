<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sarpras;
use App\Models\Ruangan;

class SaranaPrasaranaController extends Controller
{
    public function index()
    {
        $sarpras = Sarpras::all();
        return view('sarpras.index', compact('sarpras'));
    }

    public function create()
    {
        $ruangan = Ruangan::all();

        return view('sarpras.form', compact('ruangan'));
    }


    public function store(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'id_ruangan' => 'required',
            'kondisi' => 'required',
            'jumlah' => 'required'
        ]);

        Sarpras::create([
            'id_ruangan' => $request->id_ruangan,
            'nama' => $request->nama,
            'catatan' => $request->catatan,
            'kondisi' => $request->kondisi,
            'jumlah' => $request->jumlah
        ]);

        return redirect('/sarpras');
    }
}
