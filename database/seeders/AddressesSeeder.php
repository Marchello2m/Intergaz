<?php

namespace Database\Seeders;

use App\Models\Addresses;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AddressesSeeder extends Seeder
{
    protected $faker;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Addresses::create([
           'title'=> $this->faker->address(),
           'client_id'=> rand(4,20),
           'created_at'=> Carbon::now(),
       ]);
    }
}
