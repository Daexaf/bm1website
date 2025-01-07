<?php

namespace App\Http\Controllers;

use App\Models\ProductBolt;
use App\Models\ProductCategory;
use App\Models\ProductOil;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail(Request $req, $id){
        $productoli = ProductOil::where('id', $id)->get(); 
        $productbaut = ProductBolt::where('id',$id)->get();
        $categories = ProductCategory::get();
        return view('home.detail', compact('productoli', 'productbaut', 'categories'));
    }

    public function product(){
        $productoli = ProductOil::get();
        $productbaut = ProductBolt::get();
        return view('home.detail', compact('productoli', 'productbaut'));
    }
}
