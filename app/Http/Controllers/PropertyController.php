<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properties;
use App\Models\SettingsModel;
use App\Models\ClientTestimonials;
use App\Models\CityModel;
use App\Models\Blogs;

class PropertyController extends Controller
{
    /**
     * Return paginated list of properties.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

     public function landing() {
        $featureds = Properties::where('is_featured', true)->take(6)->get();
        $settings = SettingsModel::where('id', 1)->get();
        $testimonials = ClientTestimonials::all();
        $cities = CityModel::all();
        $blogs = Blogs::all();
        return view('index', compact('settings', 'testimonials', 'featureds', 'cities', 'blogs'));
     }

    public function index(Request $request)
    {
        $page     = (int) $request->query('page', 1);
        $limit    = (int) $request->query('limit', 10);
        $sortBy   = $request->query('sortBy', 'latest');
        $currency = $request->query('currency', 'any'); // can be used later if needed

        // Base query with relationships
        $query = Properties::with([
            'attributes.propertyAttribute',
            'gallery',
            'features',
            'offerType',
            'price',
        ]);

        // Sort logic
        switch ($sortBy) {
            case 'popular':
                $query->orderByDesc('views'); // assumes there's a `views` column
                break;
            case 'latest':
                $query->orderByDesc('created_at');
                break;
            case 'price_asc':
                $query->orderBy('price');
                break;
            case 'price_desc':
                $query->orderByDesc('price');
                break;
            default:
                $query->orderByDesc('created_at');
        }

        // Paginate results
        $properties = $query->paginate($limit, ['*'], 'page', $page);

        return response()->json($properties);
    }

    public function property($type, $city, $slug) { 
        // fetch from database where name 
        $property = Properties::with(['galleries', 'features', 'offerTypes'])->where('slug', $slug)->first();
        return view('properties.property', compact('type', 'city', 'property'));
    }
}
