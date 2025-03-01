<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\User;
use Illuminate\Http\Request;

abstract class Controller
{
    //
    public function index(){
        return response()->json(User::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required|string',
            'description'=>'required|string',
            
            'prix'=>'required|decimal',
            'quantité'=>'required|integer'
        ]);
        $produit=Produit::create([
            'nom'=>$request->nom,
            'description'=>$request->description,
            'prix'=>$request->prix,
            'quantité'=>$request->quantité,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        return response()->json($produit, 201);   
    }
    public function show($id){
        $produit=Produit::find($id);
         
    }
}
