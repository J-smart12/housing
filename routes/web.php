<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
// use App\Http\Controllers\PropertyAttributeController;
// use App\Http\Controllers\PropertyAttributeValueController;
// use App\Http\Controllers\PropertyTypeController;
use App\Http\Controllers\FeaturedProperties;

Route::get('api/properties', [PropertyController::class, 'index']);

Route::get('/', [PropertyController::class, 'landing']);

Route::get('/about-us', function () {
    return view('about-us.index');
});

Route::get('/panel', function () {
    return view('panel.index');
});

Route::get('/featured', [FeaturedProperties::class, 'index']);

Route::get('/city/{city}', function () {
    return view('city.index');
});

Route::get('/our-team', function () {
    return view('our-team.index');
});

Route::prefix('properties')->group(function () {
    Route::get('/', function () {
        return view('properties.index');
    });

    Route::get('/{type}/{city}/{slug}', [PropertyController::class, 'property']);
});

Route::prefix('blogs')->group(function () {
    Route::get('/', function () {
        return view('blog.index');
    });

    Route::get('/{title}', function () {
        return view('blog.blog-content');
    });
});

Route::prefix('agent')->group(function () {
    Route::get('/{name}', function () {
        return view('agent.index');
    });
});

Route::prefix('2017')->group(function () {
    Route::get('/{id}', function () {
        return view('2017.index');
    });
});

Route::get('/predefined-search-form-fields', function () {
    return view('predefined-search-form-fields.index');
});

Route::get('/city-neighborhood-street', function () {
    return view('city-neighborhood-street.index');
});

Route::get('/advanced-search-form', function () {
    return view('advanced-search-form.index');
});


Route::get('/featured/properties', function () {
    return view('blog.blog-content');
});
