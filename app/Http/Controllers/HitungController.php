<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class HitungController extends Controller
{

    public function hitung(Request $request){

        $kriteria = Kriteria::sum('bobot');

        $bobot1 = 10/$kriteria;
        $bobot2 = 25/$kriteria;
        $bobot3 = 25/$kriteria;
        $bobot4 = 30/$kriteria;
        $bobot5 = 10/$kriteria;

        $widget1 = [
            'kriteria' => $bobot1,
        ];
        $widget2 = [
            'kriteria' => $bobot2,
        ];
        $widget3 = [
            'kriteria' => $bobot3,
        ];
        $widget4 = [
            'kriteria' => $bobot4,
        ];
        $widget5 = [
            'kriteria' => $bobot5,
        ];


        $Alternatif = Alternatif::get();
        $data = Alternatif::orderby('alternatif', 'asc')->get();

        $minC1 = Alternatif::min('tinggi_badan');
        $maxC1 = Alternatif::max('tinggi_badan');
        $minC2 = Alternatif::min('berat_badan');
        $maxC2 = Alternatif::max('berat_badan');
        $minC3 = Alternatif::min('lingkar_kepala');
        $maxC3 = Alternatif::max('lingkar_kepala');
        $minC4 = Alternatif::min('denyut_jantung');
        $maxC4 = Alternatif::max('denyut_jantung');
        $minC5 = Alternatif::min('umur');
        $maxC5 = Alternatif::max('umur');



        $C1min =[
            'alternatif' => $minC1,
        ];
        $C1max =[
            'alternatif' => $maxC1,
        ];
        $C2min =[
            'alternatif' => $minC2,
        ];
        $C2max =[
            'alternatif' => $maxC2,
        ];
        $C3min =[
            'alternatif' => $minC3,
        ];
        $C3max =[
            'alternatif' => $maxC3,
        ];
        $C4min =[
            'alternatif' => $minC4,
        ];
        $C4max =[
            'alternatif' => $maxC4,
        ];
        $C5min =[
            'alternatif' => $minC5,
        ];
        $C5max =[
            'alternatif' => $maxC5,
        ];





        $hasil = $minC1/$maxC1;
        $hasil1 =[
            'alternatif' => $hasil,
        ];

        return view('hitung', compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4', 'widget5', 'C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max','C5min', 'C5max'));
    }

}
