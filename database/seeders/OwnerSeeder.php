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
        Ingreso::create([
            'name' => '',
            'email' => '',
            'property' => '',
            'password' => '',
            'user_id' => 1
        ]);

        Ingreso::create([
            'name' => '',
            'email' => '',
            'property' => '',
            'password' => '',
            'user_id' => 2
        ]);

        Ingreso::create([
            'name' => '',
            'email' => '',
            'property' => '',
            'password' => '',
            'user_id' => 3
        ]);

        Ingreso::create([
            'name' => '',
            'email' => '',
            'property' => '',
            'password' => '',
            'user_id' => 4
        ]);
    }
}
