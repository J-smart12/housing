<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\SettingsModel;
use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    public function all_features(Request $request) {
        // Fetch featured properties with pagination
        $allFeatures = Feature::select('id', 'name')->get();
        return response()->json([
            'status' => 'success',
            'data' => $allFeatures
        ]);
    }

    public function index($slug) {
        $settings = SettingsModel::where('id', 1)->first();
        $features = Feature::latest()->limit(10)->get();
        $feature = Feature::where('slug', $slug)->first();
        return view('features.index', compact('features','feature', 'settings'));
    }
}
