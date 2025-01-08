<?php

namespace App\Http\Controllers;

use App\Models\ProductOil;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class OliController extends Controller
{
    public function index(){
        $data = ProductOil::get();
        return view('olilist.index', compact('data'));
    }

    public function create(){
        return view('olilist.create');
    }

    public function store(Request $req){
        $validator = Validator::make($req->all(),
        [
            'category_id' => 'required',
            'name' => 'required',
            'category_type' => 'required',
            'api' => 'required',
            'sae' => 'required',
            'content' => 'required',
            'link1' => 'nullable',
            'link2' => 'nullable',
            'link3' => 'nullable',
            'link4' => 'nullable',
            'image1' => 'required|mimes:png,jpg,jpeg|max:2048',
            'sni' => 'nullable',
            'npt' => 'nullable',
            'npb' => 'nullable',
            'barcode' => 'nullable',
            'is_active' => 'nullable',
        ]);
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        // dd($req->all());
        $photo = $req->file('image1');
        $filename = date('Y-m-d').$photo->getClientOriginalName();
        $path = 'product-oli/'.$filename;

        Storage::disk('public')->put($path, file_get_contents($photo));
        $data['category_id'] = $req->category_id;
        $data['name'] = $req->name;
        $data['category_type'] = $req->category_type;
        $data['api'] = $req->api;
        $data['sae'] = $req->sae;
        $data['content'] = $req->content;
        $data['link1'] = $req->link1;
        $data['link2'] = $req->link2;
        $data['link3'] = $req->link3;
        $data['link4'] = $req->link4;
        $data['image1'] = $filename;
        $data['sni'] = $req->sni;
        $data['npt'] = $req->npt;
        $data['npb'] = $req->npb;
        $data['barcode'] = $req->barcode;
        $data['is_active'] = $req->is_active;

        ProductOil::create($data);
        return redirect()->route('admin.oli.index');
    }

    public function edit(Request $req,$id){
        $data = ProductOil::find($id);

        return view('olilist.edit', compact('data'));
    }

    public function update(Request $req, $id){
        $validator = Validator::make($req->all(),
        [
            'category_id' => 'required',
            'name' => 'required',
            'category_type' => 'required',
            'api' => 'required',
            'sae' => 'required',
            'content' => 'required',
            'link1' => 'nullable',
            'link2' => 'nullable',
            'link3' => 'nullable',
            'link4' => 'nullable',
            'image1' => 'mimes:png,jpg,jpeg|max:2048',
            'sni' => 'nullable',
            'npt' => 'nullable',
            'npb' => 'nullable',
            'barcode' => 'nullable',
            'is_active' => 'nullable',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $find = ProductOil::find($id);

        $data['category_id'] = $req->category_id;
        $data['name'] = $req->name;
        $data['category_type'] = $req->category_type;
        $data['api'] = $req->api;
        $data['sae'] = $req->sae;
        $data['content'] = $req->content;
        $data['link1'] = $req->link1;
        $data['link2'] = $req->link2;
        $data['link3'] = $req->link3;
        $data['link4'] = $req->link4;
        $data['sni'] = $req->sni;
        $data['npt'] = $req->npt;
        $data['npb'] = $req->npb;
        $data['barcode'] = $req->barcode;
        $data['is_active'] = $req->is_active;

        $photo = $req->file('image1');

        if($photo){
            $filename = date('Y-m-d').$photo->getClientOriginalName();
            $path = 'product-oli/'.$filename;
            if($find->image1){
                Storage::disk('public')->delete('product-oli/'.$find->image1);
            }
            Storage::disk('public')->put($path, file_get_contents($photo));
            $data['image1'] = $filename;
        } else {
            $data['image1'] = $find->image1;
        }

        ProductOil::whereId($id)->update($data);
        return redirect()->route('admin.oli.index');
    }

    public function delete(Request $req, $id){
        $data = ProductOil::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('admin.oli.index');
    }
}
