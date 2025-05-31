<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\FeaturedProperties;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\DController;
use App\Http\Controllers\FeaturesController;

Route::get('/', [PropertyController::class, 'landing']);
Route::get('/mh', [PropertyController::class, 'landing']);
Route::get('/about-us', [PropertyController::class, 'about']);
Route::get('/panel', [PropertyController::class, 'login']);

Route::get('/our-team', [PropertyController::class, 'teams']);
Route::get('/predefined-search-form-fields', [PropertyController::class, 'predefined_search']);
Route::get('/city-neighborhood-street', [PropertyController::class, 'city_neighborhood']);
Route::get('/advanced-search-form', [PropertyController::class, 'advanced_search']);

Route::get('/featured', [FeaturedProperties::class, 'index']);

Route::prefix('agent')->group(function () {
    Route::get('/{slug}', [AgentController::class, 'index']);
});
Route::prefix('properties')->group(function () {
    Route::get('/', [PropertyController::class, 'all_properties']);
    Route::get('/{type}/{city}/{slug}', [PropertyController::class, 'property']);
});
Route::prefix('blogs')->group(function () {
    Route::get('/', [BlogsController::class, 'index']);
    Route::get('/{title}', [BlogsController::class, 'blog']);
});

Route::get('/features/{slug}', [FeaturesController::class, 'index']);

Route::get('/city/{city}', [CityController::class, 'index']);
Route::get('/{year}/{id}', [DController::class, 'index']);
