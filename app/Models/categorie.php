<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{   use HasFactory;

    protected $fillable = [
        'code',
        'libelle',
        
    ];
    public function produits(){
        return $this->hasMany(produit::class);
    }

}
