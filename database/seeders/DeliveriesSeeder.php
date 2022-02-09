<?php

namespace Database\Seeders;

use App\Models\Deliveries;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DeliveriesSeeder extends Seeder
{

    public function run()
    {
        Deliveries::factory(10)->create();
    }
}
