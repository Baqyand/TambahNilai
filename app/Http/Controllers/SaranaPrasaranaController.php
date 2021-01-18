<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sarpras;
use App\Models\Ruangan;
use Alert;

class SaranaPrasaranaController extends Controller
{
    public function index()
    {
        $ruangan= Sarpras::select('*')->paginate(8);
        return view('sarpras.index', compact('ruangan'));
    }

    public function create()
    {   
        $ruangan = Ruangan::all();
        return view('sarpras.form',compact('ruangan'));
    }


    public function store(Request $request){
        $validatedata = $request->validate([
            'nama' => 'required',
            'id_ruangan' => 'required',
            'kondisi' => 'required',
            'jumlah' => 'required',
            'catatan' => 'required||string'
        ],[
            'id_ruangan' => $request->id_ruangan,
            'nama' => $request->nama,
            'catatan' => $request->catatan,
            'kondisi' => $request->kondisi,
            'jumlah' => $request->jumlah
        ]);

        $create = Sarpras::create($validatedata);
        if($create){
            Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect('/sarpras');
        }
        else{
            Alert::error('Error', 'Data gagal ditambahkan');
            return redirect('/sarpras/create');
        }
    }

    public function edit(Request $request, $id){
        //dd($id);
        $ruangan = Ruangan::where('id', $id)->get();
        $sarpras = Sarpras::find($id);

      
        return view('sarpras.form', compact('ruangan','sarpras'));
    }
    public function update(Request $request, $id){
        $request-> validate([
            'nama'  => 'required'
        ],[
            'nama.required'        => 'Nama tidak boleh kosong'
        ]);

        $input = $request-> all();
        unset($input['_token']);
        unset($input['_method']);

        $update = Sarpras::where('id', $id)-> update($input);
        if($update){
            Alert::success('Success', 'Data berhasil diperbarui');
            return redirect('/sarpras');
        }
        else{
            Alert::error('Error', 'Data gagal diperbarui');
            return redirect()->back();
        }
    }

    public function destroy($id){
        $delete = Sarpras::where('id',$id)->delete();
        if($delete){
            return redirect('/sarpras')->with('success','Data berhasil dihapus');
        }
        else{
            return redirect()->back()->with('error','Data gagal dihapus');
        }
    }

   
}
