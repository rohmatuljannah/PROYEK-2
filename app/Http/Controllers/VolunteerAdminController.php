<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use App\Aktivitas;
use \PDF;

class VolunteerAdminController extends Controller
{
    public function index()
    {
        $data_volunteer = User::get();
        return view ('volunteer.index', compact('data_volunteer'));
    }
    public function destroy(User $data_volunteer)
    {
        User::destroy($data_volunteer->id);
        return redirect('/admin/datavolunteer')->with('status', 'Data Volunteer Berhasil Dihapus!');
    }
    public function laporan_volunteer()
    {
        $data_volunteer = \App\User::all();
 
        $pdf = PDF::loadview('volunteer.index', ['data_volunteer'=>$data_volunteer]);
        return $pdf->download('laporan-volunteer.pdf');
    }
    public function show(User $data_volunteer)
    {
        return view('volunteer.show', compact('data_volunteer'));
    }
}
