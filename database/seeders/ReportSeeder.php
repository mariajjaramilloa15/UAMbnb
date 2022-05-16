<?php

namespace Database\Seeders;

use App\Models\Report;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r = new Report();
        $r->property_id = 1;
        $r->nights = 2;
        $r->lodgers = 3;
        $r->rental_cost = 34222.0;
        $r->cleaning_cost = 23443.0;
        $r->service_cost = 45432.0;
        $r->save();
    }
}