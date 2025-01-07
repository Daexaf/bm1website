<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\ProductBolt;
use App\Models\ProductCategory;
use App\Models\ProductOil;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

    public function home(){
        $cabang = Cabang::get();
        $oli = ProductOil::with('category')->where('is_active', true)->get();
        $baut = ProductBolt::with('category')->where('is_active', true)->get();
        $categories = ProductCategory::get();
        return view('home.index', compact('cabang', 'oli', 'baut', 'categories'));
    }

    public function index(){

        $data = User::get();

        // return view('welcome', compact('data'));
        return view('index', compact('data'));
    }

    
}
