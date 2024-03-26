<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            // Define aquí la estructura de tu modelo Order
            // Por ejemplo:
            'order_ref' => $this->faker->unique()->word,
            'customer_name' => $this->faker->name,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}