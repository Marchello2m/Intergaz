<?php

namespace Database\Seeders;

use App\Models\DeliveryLines;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DeliveryLinesSeeder extends Seeder
{
    protected $faker;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeliveryLines::create([
            'deliveryId'=> rand(4,99),
            'item'=> $this->faker->domainWord(),
            'price'=> $this->faker->randomFloat(),
            'quantity' => rand(1,1000),
            'client_id'=> rand(1,10),
            'created_at'=> Carbon::now(),
        ]);
    }
}
