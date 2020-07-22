<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aktivitas;
use App\Volunteer;
use \PDF;

class ActController extends Controller
{

    public function index()
    {
    	$data_aktivitas =\App\Aktivitas::all();
    	return view('act', ['data_aktivitas' => $data_aktivitas]);
    }

    public function show(Aktivitas $data_aktivitas)
    {
    	return view('volunteer.v.aktivitasshow', compact('data_aktivitas'));
    }


    public function lihat(Aktivitas $data_aktivitas)
    {
        return view('showact', compact('data_aktivitas'));
    }

    public function homeact()
    {
    	$data_aktivitas =\App\Aktivitas::all();
    	return view('volunteer.homeact', ['data_aktivitas' => $data_aktivitas]);
    }

    public function vaktivitas()
    {
        $data_aktivitas =\App\Aktivitas::all();
        return view('volunteer.v.aktivitas', ['data_aktivitas' => $data_aktivitas]);
    }

    public function cetak_pdf()
    {
        $data_aktivitas = \App\Aktivitas::all();
        $data_volunteer = \App\Volunteer::all();
 
        $pdf = PDF::loadview('volunteer.v.aktivitas_pdf', ['data_aktivitas'=>$data_aktivitas], ['data_volunteer'=>$data_volunteer]);
        return $pdf->download('laporan-aktivitas.pdf');
    }
    public function addact(Request $request)
    {
        $id_user=Auth::user()->id;

        if(isMethod('post')){
            $act = new Aktivitas;
            $act->nama_aktifitas = $request->input('nama_aktifitas');
            $act->tanggal = $request-> input('tanggal');
            $act->waktu = $request-> input('waktu');
            $act->tempat=$request-> input('tempat');
            $act->deskripsi=$request->input('deskripsi');
            $act->status= $request-> input('status');
            $act->save();

        }
    }
}
