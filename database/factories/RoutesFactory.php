<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoutesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'routes_id'=> rand(1,20),
            'date'=> $this->faker->date(),
            'carNumber' => rand(1,10),
            'status'=> rand(1,3),
            'driverName' => $this->faker->firstName(),
            'client_id' => rand(1,10),

            'created_at'=> Carbon::now(),
        ];
    }
}
