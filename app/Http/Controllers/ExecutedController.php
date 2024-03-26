<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Executed;

class ExecutedController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'total_orders' => 'required|numeric',
            'total_cost' => 'required|numeric',
        ]);
    
        // Crear un nuevo registro en la tabla executed
        Executed::create([
            'total_orders' => $request->total_orders,
            'total_cost' => $request->total_cost,
        ]);
    
        // Retornar una respuesta de éxito
        return response()->json(['message' => 'Executed record created successfully'], 201);
    }
}
