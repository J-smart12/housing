<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\SettingsModel;

class BlogsController extends Controller
{
    public function index(Request $request) {
        // paginate
        $page     = (int) $request->query('page', 1);
        $limit    = (int) $request->query('limit', 10);
        $sortBy   = $request->query('sortBy', 'latest');
        
        $query = Blogs::all();
        $blogs = $query->paginate($limit, ['*'], 'page', $page);

        $settings = SettingsModel::where('id', 1)->first();
        $recents = Blogs::latest()->take(6)->get();
        return view('blog.index', compact('blogs', 'settings', 'recents'));
    }

    public function blog($slug) {
        $blog = Blogs::where('slug', $slug)->first();
        $recents = Blogs::latest()->take(6)->get();
        $settings = SettingsModel::where('id', 1)->first();
        return view('blog.blog-content', compact('blog', 'settings', 'recents'));
    }

}
