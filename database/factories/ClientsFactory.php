<?php

namespace Database\Factories;

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

            'client_id'=> rand(1,20),
            'name'=> $this->faker->name(),
            'phone'=> $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'created_at'=> Carbon::now(),
        ];
    }
}
