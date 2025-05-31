<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\SettingsModel;
use Illuminate\Http\Request;

class DController extends Controller
{
    public function index($year, $id)
    {
        // $city = CityModel::where('slug', $slug)->first();
        // $properties = Properties::where('user_id', $agent->id)->take(6)->get();
        $months = [
            '01' => 'January',
            '02' => 'February',
            '03' => 'March',
            '04' => 'April',
            '05' => 'May',
            '06' => 'June',
            '07' => 'July',
            '08' => 'August',
            '09' => 'September',
            '10' => 'October',
            '11' => 'November',
            '12' => 'December',
        ];
        $month = $months[$id];
        $query = Blogs::query();

        if ($month && $year) {
            $query->whereMonth('created_at', $id)->whereYear('created_at', $year);
        }

        $posts = $query->get();
        $settings = SettingsModel::where('id', 1)->first();
        $recents = Blogs::latest()->take(6)->get();
        return view('2017.index', compact('posts', 'settings', 'year', 'month', 'recents'));
    }
}
