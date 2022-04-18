<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Property::create([
            'name' => 'Apartamento',
            'descripcion' => '',
            'area' => 12,
            'precio' => 12000,
            'caracteristicas' => '',
            'comentarios' => '',
            'likes' => 12,
            'user_id' => 1
        ]);

        Property::create([
            'name' => 'Apartamento',
            'descripcion' => '',
            'area' => 12,
            'precio' => 12000,
            'caracteristicas' => '',
            'comentarios' => '',
            'likes' => 10,
            'user_id' => 2
        ]);

        Property::create([
            'name' => '',
            'descripcion' => '',
            'area' => 12,
            'precio' => 12000,
            'caracteristicas' => '',
            'comentarios' => '',
            'likes' => 18,
            'user_id' => 3
        ]);

        Property::create([
            'name' => '',
            'descripcion' => '',
            'area' => 12,
            'precio' => 12000,
            'caracteristicas' => '',
            'comentarios' => '',
            'likes' => 16,
            'user_id' => 4
        ]);

    }
}
