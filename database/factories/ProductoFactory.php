<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
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
            
            "nomPro" =>fake()->lastName,
            "tipoPro" =>fake()->randomElement($array = array ('Con azucar','Sin azucar','Con edulcorante')),
            "formatoPro" =>fake()->randomElement($array = array ('Envuelto','Granel','Blister')),
            "precioPro" =>fake()->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 200),
            "imgPro" =>fake()->imageUrl($width=400, $height=400, 'pastries'),

        ];
    }
}
