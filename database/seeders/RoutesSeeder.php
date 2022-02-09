<?php

namespace Database\Seeders;

use App\Models\Routes;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RoutesSeeder extends Seeder
{
    protected $faker;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Routes::create([
        'routes_id'=> rand(1,20),
            'date'=> $this->faker->date(),
            'carNumber' => rand(1,10),
            'status'=> rand(1,3),
            'driversName' => $this->faker->firstName(),
            'client_id' => rand(1,10),

            'created_at'=> Carbon::now(),
        ]);
    }
}
