<?php

namespace Database\Seeders;

use App\Models\DeliveryLines;

use Illuminate\Database\Seeder;

class DeliveryLinesSeeder extends Seeder
{

    public function run()
    {
        DeliveryLines::factory(10)->create();
    }
}
