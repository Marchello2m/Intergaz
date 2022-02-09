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
        Clients::factory()->make([
            'client_id'=> rand(1,20),
            'name'=> $this->faker->firstName(),
            'phone'=> $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'created_at'=> Carbon::now(),
        ]);
    }
}
