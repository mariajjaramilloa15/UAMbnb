<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c = new Comment();
        $c->user_id = 1;
        $c->property_id = 1;
        $c->content = "Recomendado.";
        $c->save();
    }
}