<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        //\App\Models\User::factory(1)->create();


        //\App\Models\ProductoEsp::factory(12)->create();

        //\App\Models\EtiquetaPers::factory(4)->create();

        //\App\Models\Producto::factory(20)->create();

        \App\Models\Pedido::factory(8)->create();

        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
