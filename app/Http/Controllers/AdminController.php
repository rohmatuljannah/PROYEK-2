<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use App\Rules\MatchOldPassword;
use Auth;
use Session;
use App\Detail;
use App\Volunteer;
use \PDF;
use App\Admin;
use App\User;
use App\Aktivitas;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
    
        $data_volunteer=User::all()->count();
        $data_aktivitas=Aktivitas::all()->count();
        $detail_act = Detail::all()->count();
        return view ('admin.dashboard', compact('data_volunteer','data_aktivitas', 'detail_act'));   
    }
    public function index(){
        if (!Session::get('login')) {
            return redirect(route('login_admin'))->with('alert', 'Login dulu ya gaes');
        }else{
            $data_volunteer=User::all()->count();
            $data_aktivitas=Aktivitas::all()->count();
            return view ('admin.dashboard', compact('data_volunteer','data_aktivitas'));
        }
    }
    public function getLogin(){
        if (Session::get('email')) {
            return view ('admin.dashboard', compact('data_volunteer','data_aktivitas'));
        }else{
            return view('admin.authh.login')->with('alert', 'Login dulu ya gaes');
        }
    }
    public function postLogin(Request $request){
        $email = $request->email;
        $password = $request->password;

        $query = Admin::where('email', $email)->first();

        if ($query) {
            if ($query->password) {
                Session::put('email', $query->email);
                Session::put('login', TRUE);

                return redirect(route('admin-dashboard'));
            }else{
                return redirect(route('login_admin'))->with('alert', 'Login dulu ya gaes');
            }
        }else{
            return redirect(route('login_admin'))->with('alert', 'Unknown Admin');
        }
    }
    public function logout(){
        Session::flush();
        return redirect(route('login_admin'))->with('sukses', 'Anda telah Logout');
    }

    public function laporan_volunteer()
    {
        $data_volunteer = \App\Volunteer::all();
 
        $pdf = PDF::loadview('admin.laporan_volunteer', ['data_volunteer'=>$data_volunteer]);
        return $pdf->download('laporan-volunteer.pdf');
    }

    public function profil(){
        if (!Session::get('login')) {
            return redirect(route('login_admin'))->with('alert', 'Login dulu ya gaes');
        }else{
            $admin_nama = Session::get('email');
            $admin = Admin::where('email', $admin_nama)->first();

            return view('admin.profil')->with(compact('admin'));
        }
    }

    public function laporan()
    {
        return view ('admin.laporan');
    }
}
