<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CabangController extends Controller
{
    //
    public function index(Request $req){
        $data = new Cabang();
        if($req->get('search')){
            $data = $data->where('name','LIKE','%'.$req->get('search').'%')
            ->orWhere('email', 'LIKE', '%'.$req->get('search').'%')
            ->orWhere('address', 'LIKE', '%'.$req->get('search').'%')
            ->orWhere('phone', 'LIKE', '%'.$req->get('search').'%');
        }

        $data = $data->get();
        // return view('welcome', compact('data'));
        return view('cabanglist.index', compact('data', 'req'));
    }

    public function create(){
        return view('cabanglist.create');
    }

    public function store(Request $req){
        $validator = Validator::make($req->all(),
        [
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:11|max:13'
        ]);
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['name'] = $req->name;
        $data['address'] = $req->address;
        $data['email'] = $req->email;
        $data['phone'] = $req->phone;

        Cabang::create($data);
        return redirect()->route('admin.cabang.index');
    }

    public function edit(Request $req,$id){
        $data = Cabang::find($id);

        return view('cabanglist.edit', compact('data'));
    }

    public function update(Request $req, $id){
        $validator = Validator::make($req->all(),
        [
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:11|max:13'
        ]);
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['name'] = $req->name;
        $data['address'] = $req->address;
        $data['email'] = $req->email;
        $data['phone'] = $req->phone;

        // if($req->password){
        //     // $data['password'] = Hash::make($req->password);
        // }

        Cabang::whereId($id)->update($data);
        return redirect()->route('admin.cabang.index');
    }

    public function delete(Request $req, $id){
        $data = Cabang::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('admin.cabang.index');
    }
}
