<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'ref' => fake()->iban(),
    'design' => fake()->name(),
    'pu' => fake()-> numberBetween(100, 800) ,
    'imageprod'=> fake()->url(),
    'categorie_id'=> fake()-> numberBetween(1, 10) 
        ];
    }
}
