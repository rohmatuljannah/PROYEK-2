<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aktivitas;
use App\Volunteer;
use App\Detail;
use App\User;
use Auth;
use \PDF;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AktivitasAdminController extends Controller
{
    public function index()
    {
        $data_aktivitas = \App\Aktivitas::all();
        return view('aktivitas.index', compact('data_aktivitas'));
    }

    public function laporan_aktivitas()
    {
        $data_aktivitas = \App\Aktivitas::all();
 
        $pdf = PDF::loadview('aktivitas.laporan', ['data_aktivitas'=>$data_aktivitas]);
        return $pdf->download('laporan-aktivitas.pdf');
    }

    public function create(Request $request)
    {
           $request->validate([
            'nama_aktivitas' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'deskripsi' => 'required',
            'status' => 'required'
        ]);

        \App\Aktivitas::create($request->all());
        return redirect('/admin/aktivitas')->with('status', 'Data Aktivitas Berhasil Ditambahkan!');
    }

    public function show(Aktivitas $data_aktivitas)
    {

        return view('aktivitas.show', compact(
            'data_aktivitas'
        ));
        // $data_aktivitas = Aktivitas::where('volunteer_id',1);
        // if(isset($data_aktivitas->volunteer))
        //   echo $data_aktivitas->volunteer->nama;
    }

    public function edit(Aktivitas $data_aktivitas)
    {
        return view('aktivitas/edit', compact('data_aktivitas'));
    }

    public function update(Request $request, Aktivitas $data_aktivitas)
    {

        // $data_aktivitas = \App\Aktivitas::find($id);
        // // $request->validate(all());
        // $data_aktivitas->update($request->all());
        // return redirect('/aktivitas')->with('status', 'Data Aktivitas Berhasil Diubah!');

        $request->validate([
            'nama_aktivitas' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'deskripsi' => 'required',
            'status' => 'required|in:Belum,Selesai'
        ]);


        $data_aktivitas::where('id', $data_aktivitas->id)
            ->update([
                'nama_aktivitas' => $request->nama_aktivitas,
                'tanggal' => $request->tanggal,
                'waktu' => $request->waktu,
                'tempat' => $request->tempat,
                'deskripsi' => $request->deskripsi,
                'status' => $request->status
            ]);
        return redirect('/admin/aktivitas')->with('status', 'Data Aktivitas Berhasil Diubah!');
    }


    public function destroy(Aktivitas $data_aktivitas)
    {
        // $aktivitas = \App\Aktivitas::find($id);
        // $aktivitas->delete($aktivitas);
        // return redirect('/aktivitas')->with('sukses', 'Data berhasil dihapus');

        Aktivitas::destroy($data_aktivitas->id);
        return redirect('/admin/aktivitas')->with('status', 'Data Aktivitas Berhasil Dihapus!');
    }
}
