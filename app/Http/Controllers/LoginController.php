<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //

    public function index(){
        return view('auth.login');
    }

    public function login_proses(Request $req){
        $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $data = [
            'email' => $req->email,
            'password' => $req->password
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('admin.index');
        } else {
            return redirect()->route('login')->with('failed', 'Email atau Password salah');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success', 'Kamu berhasil logout');
    }

    public function register(){
        return view('auth.register');
    }

    public function register_proses(Request $req){
        $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        $data['name'] = $req->name;
        $data['email'] = $req->email;
        $data['password'] = Hash::make($req->password);

        User::create($data);

        $login = [
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password
        ];

        if (Auth::attempt($login)) {
            // return redirect()->route('admin.index');
            return redirect()->route('login')->with('success', 'Silahkan Login');
        } else {
            return redirect()->route('login')->with('failed', 'Email atau Password salah');
        }
    }
}
