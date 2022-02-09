<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->address(),
            'client_id'=> rand(1,100),
            'created_at'=> Carbon::now(),
        ];
    }
}
