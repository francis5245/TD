<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;

class ProduitController extends Controller
{
   public function index(){
       $categories = categorie::all();
       $produits = produit::with('categorie')->get();
       return view('produit.index', compact('produits', 'categories'));
   }

  
   public function store(Request $request){
       $request->validate([
           'ref' => 'required|string|max:50',
           'design' => 'required|string|max:50',
           'pu' => 'required|numeric|min:5',
           'images' => 'nullable|array',
           'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
           'categorie_code_id' => 'required|exists:categories,id',
           'categorie_libelle_id' => 'required|exists:categories,id',
       ]);

       $produit = produit::create([
           'ref' => $request->ref,
           'design' => $request->design,
           'pu' => $request->pu,
           'categorie_id' => $request->categorie_code_id, // Utilisez le bon champ ici
           'created_at' => now(),
           'updated_at' => now(),
       ]);

       if($request->hasFile('images')){
           $image_path = [];
           foreach($request->file('images') as $image){
               $path = $image->store('produits', 'public');
               $image_path[] = $path;
           }
           $produit->images = json_encode($image_path);
           $produit->save();
       }

       return redirect()->route('produit.index')->with('success', 'Produit ajouté avec succès');
   }
}