<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Aktivitas;
use \PDF;

class VolunteerController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function dashboardvolunteer()
    {

        return view('volunteer.dashboardvolunteer');
    }

    public function homevolunteer()
    {
        return view ('volunteer.home');
    }

    public function index()
    {
        $data_volunteer = User::get();
        return view ('volunteer.index', compact('data_volunteer'));
    }

    public function profil_pdf()
    {
        $data_volunteer = \App\Volunteer::all();
 
        $pdf = PDF::loadview('volunteer.v.profil_pdf', ['data_volunteer'=>$data_volunteer]);
        return $pdf->download('profil-volunteer.pdf');
    }

    public function homeabout()
    {
        return view('volunteer.homeabout');
    }

    public function vprofil()
    {
        $data_volunteer = \App\User::where('id',Auth::user()->id)->first();
        // dd($data_volunteer);
        return view('volunteer.v.profil', compact('data_volunteer'));
    }


    // public function show(User $data_volunteer)
    // {
    //     return view('volunteer.show', compact('data_volunteer'));
    // }

    public function showedit(){
     $data_volunteer=User::get();

        return view('volunteer.v.profil_edit', compact('data_volunteer'));
    }

     public function editvol(Request $request)
    {
        $user_id = Auth::user()->id;
        $data_volunteer = User::find($user_id);
        

        if ($request->isMethod('post')) {  

        $data = $request->all();

            if ($request->hasFile('image')) {

                $image = Input::file('image');

                if ($image->isValid()){
                    $this->validate($request, [
                        'image' => 'required|file|image|mimes:jpeg,png,jpg',
                    ]);
                    $image = $request->file('image');

                    $extension = $image->getClientOriginalExtension();

                    $nama_image = rand(111,99999).'.'.$extension;
                    $tujuan_upload = 'img/users/';
                    $image ->move($tujuan_upload, $nama_image);

                    User::where('id', $user_id)->update([
                        'image' => $nama_image,
                    ]);
                }
            }else{
            // $nama_image = $data['current_image'];
        }
              User::where(['id' => $user_id])->update(['name'=>$data['name'],
         'alamat'=>$data['alamat'], 'desa'=>$data['desa'], 'kecamatan'=>$data['kecamatan'], 'tgl_lahir'=>$data['tgl_lahir'], 'kontak'=>$data['kontak'], 'jk'=>$data['jk'], 'profesi'=>$data['profesi'], 'bidang'=>$data['bidang']]);
       return redirect ('vprofil')->with('flash_message_success', 'Profil Berhasil diperbarui');
        }

        return view ('volunteer.v.profil_edit')->with(compact('data_volunteer'));
    }



    //     $request->validate([
    //         'nama' => 'required',
    //         'alamat' => 'required',
    //         'desa' => 'required',
    //         'kecamatan' => 'required',
    //         'tgl_lahir' => 'required',
    //         'jk'        => 'required|in:Laki-Laki,Perempuan',
    //         'kontak' => 'required',
    //         'profesi' => 'required',
    //         'bidang' => 'required',
    //         'email' => 'required',
    //         'password' => 'required',
    //     ]);


    //     $data_volunteer::where('id', $data_volunteer->id)
    //         ->update([
    //             'nama' => $request->nama,
    //             'alamat' => $request->alamat,
    //             'desa' => $request->desa,
    //             'kecamatan' => $request->kecamatan,
    //             'tgl_lahir' => $request->tgl_lahir,
    //             'jk'        => $request->jk,
    //             'kontak' => $request->kontak,
    //             'profesi' => $request->profesi,
    //             'bidang' => $request->bidang,
    //             'email' => $request->email,
    //             'password' => $request->password,
    //         ]);
    //     return redirect('/vprofil')->with('status', 'Data Volunteer Berhasil Diubah!');
    // }


    public function destroy(Volunteer $data_volunteer)
    {
        Volunteer::destroy($data_volunteer->id);
        return redirect('/datavolunteer')->with('status', 'Data Volunteer Berhasil Dihapus!');
    }
    public function laporan_volunteer()
    {
        $data_volunteer = \App\User::all();
 
        $pdf = PDF::loadview('volunteer.index', ['data_volunteer'=>$data_volunteer]);
        return $pdf->download('laporan-volunteer.pdf');
    }
}
