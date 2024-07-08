<?php

namespace App\Http\Controllers;
use App\Models\products;
use App\Models\categories;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
        $txtKeyword = $request->txtKeyword;
        $category_id = $request->category_id;
        $products = products::products()->paginate(6);
        $show_categories = categories::showCata();
        // return response()->json($products,200);
       
        return view('product', compact('products','show_categories','txtKeyword','category_id')); 
    }
  
    
    function detail(Request $request){
        $product_id = $request->product_id;
        $product = products::getProductsDetail($product_id)->first();
        return view('product-detail',compact('product'));
    }

  
    public function getProductsByCategory(Request $request){
        $category_id = $request->category_id;
        $products = products::getProductsByCategory($request->category_id)->paginate(6);
        $show_categories = categories::showCata();
        return view('product', compact('products','show_categories','category_id'));
    }
   
    
 
    public function ProductFavorite(Request $request){
        $product_id = $request->product_id;
        $product = products::getProductsDetail($product_id)->first();
        return view('product-favorite',compact('product'));
    }
    
}
