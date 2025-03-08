<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class produit extends Model
{use HasFactory;

    protected $fillable = [
    'ref',
    'design',
    'pu',
    'images',
    'categorie_id'
    ];
    
    public function categorie(){
        return $this->belongsTo(categorie::class);
    }


}
