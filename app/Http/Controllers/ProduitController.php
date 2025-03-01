<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\produit;
use App\Models\categorie;
class ProduitController extends Controller
{
   public function index(){
   $produits=produit::with('categorie')->get();
     return view('produit.index',compact('produits'));
   }
}
