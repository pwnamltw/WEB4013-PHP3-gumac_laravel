<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class apiCataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = categories::all();
        return response()->json($categories);
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { 
        $categories = categories::find($id);
        return response()->json($categories);
    }
}
