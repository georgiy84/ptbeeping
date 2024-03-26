@extends('components.layouts.app')

@section('content')
    <div class="container">
        <h2>Listado de Pedidos</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Order Ref</th>
                    <th>Customer Name</th>
                    <th>Total Qty</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->order_ref }}</td>
                        <td>{{ $order->customer_name }}</td>
                        <td>{{ $order->total_qty }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Último Registro de Executed</h2>
        <p>Pedidos: {{ $executed->total_orders }} - Total: {{ $executed->total_cost }} - ({{ $executed->created_at }})</p>
    </div>
@endsection