<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index(){

        $data = User::get();

        // return view('welcome', compact('data'));
        return view('userlist.index', compact('data'));
    }

    public function create(){
        return view('userlist.create');
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
        return redirect()->route('admin.index');
    }

    public function edit(Request $req,$id){
        $data = User::find($id);

        return view('userlist.edit', compact('data'));
    }

    public function update(Request $req, $id){
        $validator = Validator::make($req->all(),
        [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable'
        ]);
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['name'] = $req->name;
        $data['email'] = $req->email;

        if($req->password){
            $data['password'] = Hash::make($req->password);
        }

        User::whereId($id)->update($data);
        return redirect()->route('admin.index');
    }

    public function delete(Request $req, $id){
        $data = User::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('admin.index');
    }
}
