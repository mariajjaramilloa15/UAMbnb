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
        Ingreso::create([
            'name' => '',
            'descripcion' => '',
            'precio' => 12000,
            'comentarios' => '',
            'likes' => 12,
            'user_id' => 1
        ]);

        Ingreso::create([
            'name' => '',
            'descripcion' => '',
            'precio' => 10000,
            'comentarios' => '',
            'likes' => 10,
            'user_id' => 2
        ]);

        Ingreso::create([
            'name' => '',
            'descripcion' => '',
            'precio' => 18000,
            'comentarios' => '',
            'likes' => 18,
            'user_id' => 3
        ]);

        Ingreso::create([
            'name' => '',
            'descripcion' => '',
            'precio' => 16000,
            'comentarios' => '',
            'likes' => 16,
            'user_id' => 4
        ]);

    }
}
