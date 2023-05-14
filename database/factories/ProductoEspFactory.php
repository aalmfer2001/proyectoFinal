<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductoEspFactory extends Factory
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
            "idUsu" => fake()->numberBetween(1,4), 
            "nomProEsp" =>fake()->lastName,
            "tipoProEsp" =>fake()->randomElement($array = array ('Con azucar','Sin azucar','Con edulcorante')),
            "formatoProEsp" =>fake()->randomElement($array = array ('Envuelto','Granel','Blister')),
            "descProEsp" =>fake()->sentence($nbWords = 6, $variableNbWords = true),

        ];
    }
}
