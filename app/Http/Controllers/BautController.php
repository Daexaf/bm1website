<?php

namespace App\Http\Controllers;

use App\Models\ProductBolt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BautController extends Controller
{
    public function index(Request $req){
        $data = new ProductBolt();
        if($req->get('search')){
            $data = $data->where('coding','LIKE','%'.$req->get('search').'%')
            ->orWhere('category_type', 'LIKE', '%'.$req->get('search').'%')
            ->orWhere('kode', 'LIKE', '%'.$req->get('search').'%')
            ->orWhere('ukuran', 'LIKE', '%'.$req->get('search').'%')
            ->orWhere('barcode', 'LIKE', '%'.$req->get('search').'%');
        }

        $data = $data->get();

        return view('bautlist.index', compact('data', 'req'));
    }

    public function create(){
        return view('bautlist.create');
    }

    public function store(Request $req){
        $validator = Validator::make($req->all(),
        [
            'category_id' => 'required',
            'category_type'=> 'required',
            'coding' => 'required',
            'kode' => 'required',
            'keterangan' => 'nullable',
            'deskripsi' => 'nullable',
            'ukuran' => 'required',
            'kunci' => 'nullable',
            'link1' => 'nullable',
            'link2' => 'nullable',
            'link3' => 'nullable',
            'link4' => 'nullable',
            'image1' => 'nullable|mimes:jpeg,png,jpg|max:2048',
            'image_modal1' => 'nullable|mimes:jpeg,png,jpg|max:2048',
            'image_modal2' => 'nullable|mimes:jpeg,png,jpg|max:2048',
            'image_modal3' => 'nullable|mimes:jpeg,png,jpg|max:2048',
            'barcode'=> 'required',
            'is_active' => 'nullable',
        ]);
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        // dd($req->all());
        $photo = $req->file('image1');
        $filename = date('Y-m-d').$photo->getClientOriginalName();
        $path = 'product-baut/'.$filename;
        Storage::disk('public')->put($path, file_get_contents($photo));

        $photo_modal1 = $req->file('image_modal1');
        $filename_modal1 = date('Y-m-d').$photo_modal1->getClientOriginalName();
        $path = 'product-baut-modal/'.$filename_modal1;
        Storage::disk('public')->put($path, file_get_contents($photo_modal1));

        $photo_modal2 = $req->file('image_modal2');
        $filename_modal2 = date('Y-m-d').$photo_modal2->getClientOriginalName();
        $path = 'product-baut-modal/'.$filename_modal2;
        Storage::disk('public')->put($path, file_get_contents($photo_modal2));

        $photo_modal3 = $req->file('image_modal3');
        $filename_modal3 = date('Y-m-d').$photo_modal3->getClientOriginalName();
        $path = 'product-baut-modal/'.$filename_modal3;
        Storage::disk('public')->put($path, file_get_contents($photo_modal3));

        $data['category_id'] = $req->category_id;
        $data['category_type'] = $req->category_type;
        $data['coding'] = $req->coding;
        $data['kode'] = $req->kode;
        $data['keterangan'] = $req->keterangan;
        $data['deskripsi'] = $req->deskripsi;
        $data['ukuran'] = $req->ukuran;
        $data['kunci'] = $req->kunci;
        $data['link1'] = $req->link1;
        $data['link2'] = $req->link2;
        $data['link3'] = $req->link3;
        $data['link4'] = $req->link4;
        $data['image1'] = $filename;
        $data['image_modal1'] = $filename_modal1;
        $data['image_modal2'] = $filename_modal2;
        $data['image_modal3'] = $filename_modal3;
        $data['barcode'] = $req->barcode;
        $data['is_active'] = $req->is_active;

        ProductBolt::create($data);
        return redirect()->route('admin.baut.index');
    }

    public function edit(Request $req,$id){
        $data = ProductBolt::find($id);

        return view('bautlist.edit', compact('data'));
    }

    public function update(Request $req, $id){
        $validator = Validator::make($req->all(),
        [
            'category_id' => 'required',
            'category_type'=> 'required',
            'coding' => 'required',
            'kode' => 'required',
            'keterangan' => 'nullable',
            'deskripsi' => 'nullable',
            'ukuran' => 'required',
            'kunci' => 'nullable',
            'link1' => 'nullable',
            'link2' => 'nullable',
            'link3' => 'nullable',
            'link4' => 'nullable',
            'image1' => 'nullable|mimes:jpeg,png,jpg|max:2048',
            'image_modal1' => 'nullable|mimes:jpeg,png,jpg|max:2048',
            'image_modal2' => 'nullable|mimes:jpeg,png,jpg|max:2048',
            'image_modal3' => 'nullable|mimes:jpeg,png,jpg|max:2048',
            'barcode'=> 'required',
            'is_active' => 'nullable',
        ]);
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $find = ProductBolt::find($id);

        $data['category_id'] = $req->category_id;
        $data['category_type'] = $req->category_type;
        $data['coding'] = $req->coding;
        $data['kode'] = $req->kode;
        $data['keterangan'] = $req->keterangan;
        $data['deskripsi'] = $req->deskripsi;
        $data['ukuran'] = $req->ukuran;
        $data['kunci'] = $req->kunci;
        $data['link1'] = $req->link1;
        $data['link2'] = $req->link2;
        $data['link3'] = $req->link3;
        $data['link4'] = $req->link4;
        $data['image_modal1'] = $req->image_modal1;
        $data['image_modal2'] = $req->image_modal2;
        $data['image_modal3'] = $req->image_modal3;
        $data['barcode'] = $req->barcode;
        $data['is_active'] = $req->is_active;

        $photo = $req->file('image1');

        if($photo){
            $filename = date('Y-m-d').$photo->getClientOriginalName();
            $path = 'product-baut/'.$filename;
            if($find->image1){
                Storage::disk('public')->delete('product-baut/'.$find->image1);
            }
            Storage::disk('public')->put($path, file_get_contents($photo));
            $data['image1'] = $filename;
        } else {
            $data['image1'] = $find->image1;
        }

        $photo_modal1 = $req->file('image_modal1');

        if($photo_modal1){
            $filename = date('Y-m-d').$photo_modal1->getClientOriginalName();
            $path = 'product-baut-modal/'.$filename;
            if($find->image_modal1){
                Storage::disk('public')->delete('product-baut-modal/'.$find->image_modal1);
            }
            Storage::disk('public')->put($path, file_get_contents($photo_modal1));
            $data['image_modal1'] = $filename;
        } else {
            $data['image_modal1'] = $find->image1;
        }

        $photo_modal2 = $req->file('image_modal2');

        if($photo_modal2){
            $filename = date('Y-m-d').$photo_modal2->getClientOriginalName();
            $path = 'product-baut-modal/'.$filename;
            if($find->image_modal2){
                Storage::disk('public')->delete('product-baut-modal/'.$find->image_modal2);
            }
            Storage::disk('public')->put($path, file_get_contents($photo_modal2));
            $data['image_modal2'] = $filename;
        } else {
            $data['image_modal2'] = $find->image1;
        }

        $photo_modal3 = $req->file('image_modal3');

        if($photo_modal3){
            $filename = date('Y-m-d').$photo_modal3->getClientOriginalName();
            $path = 'product-baut-modal/'.$filename;
            if($find->image_modal3){
                Storage::disk('public')->delete('product-baut-modal/'.$find->image_modal3);
            }
            Storage::disk('public')->put($path, file_get_contents($photo_modal3));
            $data['image_modal3'] = $filename;
        } else {
            $data['image_modal3'] = $find->image1;
        }
        ProductBolt::whereId($id)->update($data);
        return redirect()->route('admin.baut.index');
    }

    public function delete(Request $req, $id){
        $data = ProductBolt::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('admin.baut.index');
    }
}
