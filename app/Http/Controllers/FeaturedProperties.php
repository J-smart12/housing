<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properties;

class FeaturedProperties extends Controller
{
    public function index(Request $request) {
        $page = $request->input('page', 1);
        $perPage = 6; // Number of items per page
        $offset = ($page - 1) * $perPage;
        // Fetch featured properties with pagination
        $featuredProperties = Properties::where('is_featured', true)
            ->skip($offset)
            ->take($perPage)
            ->get();
        return view('featured.index', compact('featuredProperties', 'page', 'perPage'));
    }
}
