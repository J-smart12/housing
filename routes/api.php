<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;

Route::post('properties', [PropertyController::class, 'index']);