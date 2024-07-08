<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class apiProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = products::orderBy('sold','desc')->limit(1)->get();
        return response()->json($product, 200);
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = products::findOrFail($id);
        return response()->json($product, 200);
    }
}
