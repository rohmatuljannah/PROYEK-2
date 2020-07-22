<?php

namespace App\Http\Controllers;


use App\Aktivitas;
use App\Volunteer;
use App\Detail;
use App\User;
use Auth;
use \PDF;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class AktivitasController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

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
        return redirect('/aktivitas')->with('status', 'Data Aktivitas Berhasil Ditambahkan!');
    }

    public function store(Request $request)
    {
        $data_aktivitas = $request->all();

        $request->validate([
            'nama_aktivitas' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'deskripsi' => 'required',
            'status' => 'required|in:Belum,Selesai'
        ]);


        // $image = $request->file('photo');
        // $slug =  Str::slug($request->input('name'));
        // if (isset($image))
        // {
        //     $currentDate = Carbon::now()->toDateString();
        //     $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
        //     if (!Storage::disk('public')->exists('photo'))
        //     {
        //         Storage::disk('public')->makeDirectory('photo');
        //     }
        //     $postImage = Image::make($image)->resize(1600, 1066)->stream();
        //     Storage::disk('public')->put('photo/'.$imageName, $postImage);
        // } else
        // {
        //     $imageName = 'default.png';
        // }

        $data_aktivitas = new Aktivitas();
        $data_aktivitas->nama_aktivitas = $request->input('nama_aktivitas');
        $data_aktivitas->tanggal = $request->input('tanggal');
        $data_aktivitas->waktu = $request->input('waktu');
        $data_aktivitas->tempat = $request->input('tempat');
        $data_aktivitas->deskripsi = $request->input('deskripsi');
        // $data_aktivitas->photo = $request->input('photo');
        $data_aktivitas->status = $request->input('status');
        $data_aktivitas->save();

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
        return redirect('/aktivitas')->with('status', 'Data Aktivitas Berhasil Diubah!');
    }


    public function destroy(Aktivitas $data_aktivitas)
    {
        // $aktivitas = \App\Aktivitas::find($id);
        // $aktivitas->delete($aktivitas);
        // return redirect('/aktivitas')->with('sukses', 'Data berhasil dihapus');

        Aktivitas::destroy($data_aktivitas->id);
        return redirect('/aktivitas')->with('status', 'Data Aktivitas Berhasil Dihapus!');
    }

    public function showpilihact(){
        $id_user=Auth::user()->id;
        $detail_aktivitas = Detail::where('id_volunteer', $id_user)->first();
        return view('volunteer.v.pilihact', compact('detail_aktivitas'));
    }
    public function pilihact(Request $request){
        $id_user=Auth::user()->id;
        $volunteer=User::where('id', $id_user)->first();

        if ($request->isMethod('post')) {
            $data = $request->all();

            $aktivitas = new Detail;
            $aktivitas->id_aktivitas .= $data['id_aktivitas'];
            $aktivitas->judul = $data['judul'];
            $aktivitas->id_volunteer = $id_user;
            $aktivitas->nama = $volunteer->name;
            $aktivitas->save();
        }

        return redirect('pilihact')->with('flash_message_success','Aktivitas berhasil ditambahkan');
    }
    public function detail_act(){
        $detail_act = Detail::get();
        return view ('aktivitas.detail-act', compact('detail_act'));
    }
}
