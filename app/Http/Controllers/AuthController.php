<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Admin;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    
    public function login(){
        return view('admin.authh.login');
    }
    public function postlogin (Request $request){
        $email = $request->email;
        $password = $request->password;

        $query = User::where('email', $email)->first();

        if ($query) {
          if (Hash::check($password, $query->password)) {
              Session::put('email', $query->email);
              Session::put('login', TRUE);
              return redirect('dashboard');
          }else {
              return redirect('login')->with('alert', 'Username dan Password Salah!');
          }
        }else {
            return redirect('login')->with('alert', 'Data tidak ada!');
        }
    }

    public function getRegister(){
        if (Session::get('email')) {
            return redirect('home');
        }else {
            return view('admin.authh.register');
        }
    }

    public function postRegister(Request $req){
        $this->validate($req, [
            'name' => 'required|string|min:4',
            'email' => 'required|unique:users',
            'password' => 'required|string|min:5',
            'retype_password' => 'required|same:password'
        ]);

        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => bcrypt($req->password)
        ]);
        return redirect('login')->with('alert-success', 'Kamu berhasil mendaftar!');
    }
    public function logout(){
        Session::flush();

        return redirect('/')->with('alert', 'Anda telah logout');
    }
}