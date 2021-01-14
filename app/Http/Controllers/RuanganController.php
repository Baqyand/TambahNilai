<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruangan;
use App\Models\Sarpras;

class RuanganController extends Controller
{
    function getRuanganAjax(Request $request){
        $getData = Ruangan::select('*');
        if($request->lantai != ""){
            $getData = $getData->where('lantai', $request->lantai);
        }
        if($request->blok != ""){
            $getData = $getData->where('blok', $request->blok);
        }
        if($request->tipe != ""){
            $getData = $getData->where('tipe', $request->tipe);
        }
        if($request->status != ""){
            $getData = $getData->where('status', $request->status);
        }

        $getData = $getData->get();

        return response(['dataRuang' => $getData]);
    }

    function getSarprasAjax(Request $request){
        $getData = Sarpras::where('id_ruangan', $request->id_ruangan)->get();
        return response(['dataSarpras' => $getData]);
    }


}
