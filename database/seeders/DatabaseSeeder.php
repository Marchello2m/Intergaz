<?php

namespace Database\Seeders;



use App\Http\Controllers\AddressesController;
use App\Models\Addresses;
use App\Models\Clients;
use Carbon\Carbon;


use Database\Factories\ClientsFactory;
use Database\Factories\DeliveriesFactory;
use Database\Factories\Delivery_linesFactory;
use Database\Factories\RoutesFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Generator as Faker;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            ClientsSeeder::class,
            AddressesSeeder::class,
            DeliveriesSeeder::class,
            DeliveryLinesSeeder::class,
            RoutesSeeder::class
        ]);




    }
}
