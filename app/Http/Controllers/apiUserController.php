<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class apiUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { 
        $users = User::find($id);
        return response()->json($users);
    }
}
