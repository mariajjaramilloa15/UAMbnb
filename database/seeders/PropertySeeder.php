<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Support\Facades\Hash;
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
            'descripcion' => 'blabla',
            'area' => 12,
            'precio' => 12000,
            'caracteristicas' => 'ala',
            'Lat' => 5000,
            'Lng' => 3000,
            'comentarios' => '4',
            'likes' => 10,
            'user_id' => 2
         ]);


        Property::create([
            'name' => 'Apartamento',
            'descripcion' => 'ddawd',
            'area' => 12,
            'precio' => 12000,
            'caracteristicas' => 'dsd',
            'Lat' => 5000,
            'Lng' => 3000,
            'comentarios' => '4',
            'likes' => 10,
            'user_id' => 2
        ]);

        Property::create([
            'name' => 'dsaf',
            'descripcion' => 'dwfe',
            'area' => 12,
            'precio' => 12000,
            'caracteristicas' => 'djsand',
            'Lat' => 7000,
            'Lng' => 9000,
            'comentarios' => '2',
            'likes' => 18,
            'user_id' => 3
        ]);

        Property::create([
            'name' => 'adad',
            'descripcion' => 'holaaaaaa',
            'area' => 12,
            'precio' => 12000,
            'caracteristicas' => 'aahjdhs',
            'Lat' => 6000,
            'Lng' => 2000,
            'comentarios' => '2',
            'likes' => 16,
            'user_id' => 4
        ]);

    }
}
