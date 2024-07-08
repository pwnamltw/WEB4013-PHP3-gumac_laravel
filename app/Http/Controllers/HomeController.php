<?php

namespace App\Http\Controllers;
use App\Models\products;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $productshome = products::GetProductsHome();
        return view('home',compact('productshome'));
    }
}
