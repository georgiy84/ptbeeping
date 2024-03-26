<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrderLine;
use App\Models\Order;
use App\Models\Product;

class OrdersLinesTableSeeder extends Seeder
{

    public function run(): void
    {
        
        $orders = Order::all();
        $products = Product::all();

        $orders->each(function ($order) use ($products) {
            $products->each(function ($product) use ($order) {
                OrderLine::factory()->create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                ]);
            });
        });
    }
}
