<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\OrderLine;
use Illuminate\Support\Facades\DB;
use App\Models\Executed;

class ExecuteTotalCommand extends Command
{
    protected $signature = 'execute:total';

    protected $description = 'Description of your command';

    public function handle()
    {
        $totalCost = OrderLine::join('products', 'orders_lines.product_id', '=', 'products.id') ->sum(DB::raw('qty * cost'));

        // Crear un nuevo registro en la tabla executed con el coste total calculado
        Executed::create([
            'total_orders' => OrderLine::count(),
            'total_cost' => $totalCost,
        ]);

        $this->info('Total cost calculated and saved successfully.');
    }
}
