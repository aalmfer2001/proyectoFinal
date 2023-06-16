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
            

            
            "idUsu" => 2,
            "idPro" => fake()->numberBetween(1,5),
            "idPedido" => fake()->numberBetween(1,2),

        ];
    }
}
