<?php

use App\Http\Controllers\Api\PumpController;
use Illuminate\Support\Facades\Route;


Route::get('pump/{number}', [PumpController::class, 'show']);
Route::post('pump/{number}', [PumpController::class, 'update']);
