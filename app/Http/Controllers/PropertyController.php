<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properties;
use App\Models\SettingsModel;
use App\Models\ClientTestimonials;
use App\Models\CityModel;
use App\Models\Blogs;
use App\Models\User;

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
        $settings = SettingsModel::where('id', 1)->first();
        $testimonials = ClientTestimonials::limit(3)->get();
        $cities = CityModel::limit(6)->get();
        $blogs = Blogs::limit(4)->get();
        $staffs = User::limit(3)->get();
        return view('index', compact('settings', 'testimonials', 'featureds', 'cities', 'blogs', 'staffs'));
    }

    public function about () {
        $testimonials = ClientTestimonials::limit(3)->get();;
        $settings = SettingsModel::where('id', 1)->first();
        $staffs = User::limit(3)->get();
        return view('about-us.index', compact('settings', 'testimonials', 'staffs'));
    }

    public function login() {
        $settings = SettingsModel::where('id', 1)->first();
        return view('panel.index', compact('settings'));
    }

    public function teams() {
        $settings = SettingsModel::where('id', 1)->first();
        $staffs = User::all();
        return view('our-team.index', compact('settings', 'staffs'));
    }

    public function predefined_search() {
        $settings = SettingsModel::where('id', 1)->first();
        return view('predefined-search-form-fields.index', compact('settings'));
    }

    public function city_neighborhood() {
        $settings = SettingsModel::where('id', 1)->first();
        return view('city-neighborhood-street.index', compact('settings'));
    }

    public function advanced_search() {
        $settings = SettingsModel::where('id', 1)->first();
        return view('advanced-search-form.index', compact('settings'));
    }


    public function index(Request $request)
    {
        $page     = (int) $request->query('page', 1);
        $limit    = (int) $request->query('limit', 6);
        $sortBy   = $request->query('sortBy', 'latest');
        $currency = $request->query('currency', 'any');

        // Base query with relationships
        $query = Properties::with([
            'galleries',
            // 'features',
            // 'offerType',
            // 'price',
        ]);

        // $query = Properties::query();
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

    public function all_properties(Request $request) { 
        $settings = SettingsModel::where('id', 1)->first();
        $page     = (int) $request->query('page', 1);
        $limit    = (int) $request->query('limit', 10);
        $query = Properties::with([
            'gallery',
            'features',
            'offerType',
            'price',
        ]);
        $properties = $query->paginate($limit, ['*'], 'page', $page);

        return view('properties.index', compact('settings', 'properties'));
    }

    public function property($type, $city, $slug) { 
        // fetch from database where name 
        $settings = SettingsModel::where('id', 1)->first();
        $property = Properties::with(['galleries', 'features', 'offerTypes'])->where('slug', $slug)->first();
        // $property = Properties::where('slug', $slug)->first();
        // dd($property);
        return view('properties.property', compact('settings','type', 'city', 'property'));
    }
}
