<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

    public function index(){

        $data = User::get();

        // return view('welcome', compact('data'));
        return view('index', compact('data'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $req){
        $validator = Validator::make($req->all(),
        [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['name'] = $req->name;
        $data['email'] = $req->email;
        $data['password'] = Hash::make($req->password);

        User::create($data);
        return redirect()->route('index');
    }
}
