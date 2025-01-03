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

    
}
