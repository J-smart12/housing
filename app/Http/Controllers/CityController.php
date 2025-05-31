<?php

namespace App\Http\Controllers;

use App\Models\CityModel;
use App\Models\SettingsModel;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index($slug) {
        $city = CityModel::where('slug', $slug)->first();
        // $properties = Properties::where('user_id', $agent->id)->take(6)->get();
        $settings = SettingsModel::where('id', 1)->first();
        return view('city.index', compact('city', 'settings'));
    }
}
