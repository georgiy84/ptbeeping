<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\OrderList;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/livewire/livewire.js', [\Livewire\Livewire::class, 'assets']);
Route::get('/livewire/livewire.css', [\Livewire\Livewire::class, 'styles']);
Route::get('/order-list', OrderList::class);