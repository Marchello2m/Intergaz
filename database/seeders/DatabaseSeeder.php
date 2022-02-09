<?php

namespace Database\Seeders;



use App\Http\Controllers\AddressesController;
use App\Models\Addresses;
use App\Models\Clients;
use App\Models\Deliveries;
use App\Models\DeliveryLines;
use App\Models\Routes;
use Carbon\Carbon;


use Database\Factories\ClientsFactory;
use Database\Factories\DeliveriesFactory;
use Database\Factories\DeliveryLinesFactory;
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

        Clients::factory(5)->create([

        ])->each(function(Clients $clients){
            Addresses::factory(10)->create([
                'client_id'=>$clients->id
            ]);
        })->each(function(Clients $clients){
            Deliveries::factory(10)->create([
                'client_id'=>$clients->id
            ]);
        })->each(function(Clients $clients){
            DeliveryLines::factory(10)->create([
                'client_id'=>$clients->id
            ]);
        })->each(function(Clients $clients){
            Routes::factory(10)->create([
                'client_id'=>$clients->id
            ]);
        });


       // $this->call([
            //ClientsSeeder::class,
          //  AddressesSeeder::class,
          //  DeliveriesSeeder::class,
          //  DeliveryLinesSeeder::class,
           // RoutesSeeder::class
    // ]);




    }
}
