<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\SettingsModel;

class BlogsController extends Controller
{
    public function index() {
        $blogs = Blogs::all();
        $settings = SettingsModel::where('id', 1)->first();
        return view('blog.index', compact('blogs', 'settings'));
    }

    public function blog($slug) {
        $blog = Blogs::where('slug', $slug)->first();
        $recents = Blogs::latest()->take(6)->get();
        $settings = SettingsModel::where('id', 1)->first();
        return view('blog.blog-content', compact('blog', 'settings', 'recents'));
    }

}
