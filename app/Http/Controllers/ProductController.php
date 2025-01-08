<?php

namespace App\Http\Controllers;

use App\Models\ProductBolt;
use App\Models\ProductCategory;
use App\Models\ProductOil;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail(Request $req, $category, $barcode){
        $productoli = ProductOil::where('category_type', $category)
        ->where('barcode', $barcode)
        ->get(); 
        $productbaut = ProductBolt::where('category_type',$category)
        ->where('barcode', $barcode)
        ->get();
        $categories = ProductCategory::get();

        if (!$productoli && !$productbaut) {
            return redirect()->route('home')->with('error', 'Produk tidak ditemukan');
        }

        return view('home.productDetail', compact('productoli', 'productbaut', 'categories'));
    }

    public function product(Request $req){
        $search = $req->get('search');
        $oliQuery = ProductOil::with('category')->where('is_active', true);
        $bautQuery = ProductBolt::with('category')->where('is_active', true);
        if ($search) {
            $oliQuery->where('name', 'like', '%' . $search . '%');
            $bautQuery->where('coding', 'like', '%' . $search . '%');
        }
        $oli = $oliQuery->get();
        $baut = $bautQuery->get();
        $categories = ProductCategory::get();
        return view('home.productContent', compact('oli', 'baut', 'categories', 'search'));
    }
}
