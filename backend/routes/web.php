<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController; 


Route::get('/crud', [CrudController::class, 'manage_product']);
Route::post('/product', [CrudController::class, 'add_product']);


