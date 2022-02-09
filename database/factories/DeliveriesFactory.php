<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeliveriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'routeId'=> rand(4,99),
            'addressId'=> rand(4,99),
            'type'=> rand(1,2),
            'status' => rand(1,3),
            'client_id'=> rand(1,10),
            'created_at'=> Carbon::now(),
        ];
    }
}
