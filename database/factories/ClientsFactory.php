<?php

namespace Database\Factories;

use App\Models\Clients;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientsFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'client_id'=> rand(1,100),
            'name'=> $this->faker->firstName,
            'phone'=> $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'created_at'=> Carbon::now(),
        ];
    }

}
