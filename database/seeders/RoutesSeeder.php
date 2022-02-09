<?php

namespace Database\Seeders;

use App\Models\Routes;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RoutesSeeder extends Seeder
{

    public function run()
    {
        Routes::factory(10)->create();
    }
}
