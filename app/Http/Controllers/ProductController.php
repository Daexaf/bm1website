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
        $query = $req->input('query');
        $oli = ProductOil::with('category')
        ->where('is_active', true)
        ->when($query, function ($queryBuilder) use ($query) {
            return $queryBuilder->where('name', 'like', "%{$query}%")
                ->orWhere('category_type', 'like', "%{$query}%");
        })
        ->get();
        $baut = ProductBolt::with('category')
        ->where('is_active', true)
        ->when($query, function ($queryBuilder) use ($query) {
            return $queryBuilder->where('coding', 'like', "%{$query}%")
                ->orWhere('category_type', 'like', "%{$query}%");
        })
        ->get();
        $categories = ProductCategory::get();
        return view('home.productContent', compact('oli', 'baut', 'categories'));
    }
}
