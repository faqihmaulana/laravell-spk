<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    public function index() {
        return view('dataalternatif', [
            'users' => Alternatif::all(),
            'title' => 'Data alternatif'
        ]);
    }
    public function add() {
        return view('adddataalternatif',[
            'title' => 'Tambah Data alternatif'
        ]);
    }
    public function edit($id){
        
        // $alternatif = Alternatif::where('id', $id)->first();

        // return view('editalternatif', [
        //     'alternatif' => $alternatif,
        //     'title' => 'Edit Data alternatif'
        // ]);
        return view('editalternatif')->with([
            'alternatif' => Alternatif::find($id),
        ]);

    }

    public function update(Request $request, $id) {
        $alternatif1      = $request->input('alternatif');
        $tinggi_badan1   = $request->input('tinggi_badan');
        $berat_badan1 = $request->input('berat_badan');
        $lingkar_kepala1 = $request->input('lingkar_kepala');
        $denyut_jantung1 = $request->input('denyut_jantung');
        $umur1 = $request->input('umur');
        
        $alternatif = Alternatif::where('id', $id)->first();
        $alternatif->alternatif    = $alternatif1;
        $alternatif->tinggi_badan = $tinggi_badan1;
        $alternatif->berat_badan = $berat_badan1;
        $alternatif->lingkar_kepala = $lingkar_kepala1;
        $alternatif->denyut_jantung = $denyut_jantung1;
        $alternatif->umur = $umur1;

        $alternatif->save();

        return redirect()->to('/alternatif');
    }


    public function dashboard(){
        $alternatif= Alternatif::count();

        return view('main', compact('alternatif'));

    }

    public function store(Request $request) {
        $alternatif1 = $request->input('alternatif');
        $tinggi_badan1 = $request->input('tinggi_badan');
        $berat_badan1 = $request->input('berat_badan');
        $lingkar_kepala1 = $request->input('lingkar_kepala');
        $denyut_jantung1 = $request->input('denyut_jantung');
        $umur1 = $request->input('umur');

        $alternatif = new Alternatif;
        $alternatif->alternatif    = $alternatif1;
        $alternatif->tinggi_badan = $tinggi_badan1;
        $alternatif->berat_badan = $berat_badan1;
        $alternatif->lingkar_kepala = $lingkar_kepala1;
        $alternatif->denyut_jantung = $denyut_jantung1;
        $alternatif->umur = $umur1;

        $alternatif->save();

        return redirect()->to('/alternatif');
    }
    public function delete($id) {
        $alternatif = Alternatif::where('id', $id)->first();
        $alternatif->delete();
        return redirect()->back();
    }
}
