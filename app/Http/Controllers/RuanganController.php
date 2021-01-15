<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruangan;
use App\Models\Sarpras;

class RuanganController extends Controller
{
    function getRuanganAjax(Request $request)
    {
        $getData = Ruangan::select('*');
        if ($request->lantai != "") {
            $getData = $getData->where('lantai', $request->lantai);
        }
        if ($request->blok != "") {
            $getData = $getData->where('blok', $request->blok);
        }
        if ($request->tipe != "") {
            $getData = $getData->where('tipe', $request->tipe);
        }
        if ($request->status != "") {
            $getData = $getData->where('status', $request->status);
        }

        $getData = $getData->get();

        return response(['dataRuang' => $getData]);
    }

    function getSarprasAjax(Request $request)
    {
        $getData = Sarpras::where('id_ruangan', $request->id_ruangan)->get();
        return response(['dataSarpras' => $getData]);
    }

    public function index()
    {
        $dataRuangan = Ruangan::select('*')->paginate(8);

        return view('ruangan.index', compact('dataRuangan'));
    }

    public function create()
    {
        return view('ruangan.form');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name'      => 'required',
            'tipe'      => 'required|string',
            'lantai'    => 'required|numeric',
            'blok'      => 'required|string',
            'status'    => 'required',

        ], [
            'name.required'     => 'Nama ruangan tidak boleh kosong',
            'tipe.required'     => 'Pilih tipe terlebih dahulu',
            'lantai.required'   => 'Pilih lantai terlebih dahulu',
            'blok.required'     => 'Pilih blok terlebih dahulu',
            'status.required'   => 'Pilih status terlebih dahulu'
        ]);

        if($validatedData->fails()){
            return redirect('/ruangan/create')->with('error', 'Data gagal ditambahkan');
        }else{
            return back()->with('success', 'Data berhasil ditambahkan');
        }
    }

    public function update(){

    }
}
