<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Maria Jose",
            'email' => "mariaj.jaramilloa@autonoma.edu.co",
            'password' => Hash::make('hola123'),
        ]);

        User::create([
            'name' => "Sofia Piñuela",
            'email' => "sofia@autonoma.edu.co",
            'password' => Hash::make('bola123'),
        ]);

        User::create([
            'name' => "Isabella Grajales",
            'email' => "isa.grajales@autonoma.edu.co",
            'password' => Hash::make('cola123'),
        ]);

        User::create([
            'name' => "Valentina Alvarez",
            'email' => "valentina.alvarez@autonoma.edu.co",
            'password' => Hash::make('123hola'),
        ]);
    }
}
