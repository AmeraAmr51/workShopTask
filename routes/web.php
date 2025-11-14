<?php

use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/maintenance_request/{type}', [VehicleController::class, 'createMaintenanceRequest']);

