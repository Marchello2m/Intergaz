<?php

namespace Database\Seeders;

use App\Models\Addresses;
use Carbon\Carbon;
use Database\Factories\ClientsFactory;
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
        Addresses::factory(10)->create();
    }
}
