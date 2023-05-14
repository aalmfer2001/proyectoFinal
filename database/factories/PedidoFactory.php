<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PedidoFactory extends Factory
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
            
            "totalPedi" =>fake()->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 500),
            "localiPedi" =>fake()->streetName,
            "idUsu" => fake()->numberBetween(1,4), 
            "idPro" => fake()->numberBetween(1,10),
            

        ];
    }
}
