<?php

namespace Database\Seeders;

use App\Models\Deliveries;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DeliveriesSeeder extends Seeder
{
    protected $faker;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Deliveries::create([
            'routeId'=> rand(4,99),
            'addressId'=> rand(4,99),
            'type'=> rand(1,2),
            'status' => rand(1,3),
            'client_id'=> rand(1,10),
            'created_at'=> Carbon::now(),
        ]);
    }
}
