<?php

namespace Database\Seeders;


use App\Models\Clients;
use Carbon\Carbon;


use Illuminate\Database\Seeder;


class ClientsSeeder extends Seeder
{

    protected $faker;
    public function run()
    {
      Clients::factory(10)->create();


    }
}
