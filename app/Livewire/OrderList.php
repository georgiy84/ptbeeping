<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Order;
use App\Models\Executed;
use App\Models\OrderLine;

class OrderList extends Component
{
    public $orders;
    public $executed;

    public function mount()
    {
        $this->orders = Order::all();
        $this->executed = Executed::latest()->first();
    }

    public function render()
    {
        foreach ($this->orders as $order) {
            $order->total_qty = OrderLine::where('order_id', $order->id)->sum('qty');
        }
        
        return view('livewire.order-list');
    }
}
