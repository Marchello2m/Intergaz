<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeliveryLinesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'deliveryId'=> rand(4,99),
            'item'=> $this->faker->domainWord(),
            'price'=> $this->faker->randomFloat(),
            'quantity' => rand(1,1000),

            'created_at'=> Carbon::now(),
        ];
    }
}
