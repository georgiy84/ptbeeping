<?php

namespace Database\Factories;

use App\Models\OrderLine;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderLineFactory extends Factory
{
    protected $model = OrderLine::class;

    public function definition()
    {
        return [
            // Define aquí la estructura de tu modelo OrderLine
            // Por ejemplo:
            'qty' => $this->faker->numberBetween(1, 10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}