<?php

namespace Database\Seeders;

use App\Models\Owner;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Owner::create([
            'name' => '',
            'email' => 'mariaj.jaramilloa@autonoma.edu.co',
            'property' => '',
            'telefono' => 123,
            'password' => '',
            'user_id' => 1
        ]);

        Owner::create([
            'name' => '',
            'email' => 'sofi.p@autonoma.edu.co',
            'property' => '',
            'telefono' => 678,
            'password' => '',
            'user_id' => 2
        ]);

        Owner::create([
            'name' => '',
            'email' => 'isa.grajales@autonoma.edu.co',
            'property' => '',
            'telefono' => 123,
            'password' => '',
            'user_id' => 3
        ]);

        Owner::create([
            'name' => '',
            'email' => 'valentina.alvarez@autonoma.edu.co',
            'property' => '',
            'telefono' => 8765,
            'password' => '',
            'user_id' => 4
        ]);
    }
}
