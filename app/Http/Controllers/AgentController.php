<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SettingsModel;
use App\Models\Properties;

class AgentController extends Controller
{
    public function index($slug) {
        $agent = User::where('slug', $slug)->first();
        $properties = Properties::where('user_id', $agent->id)->take(6)->get();
        $settings = SettingsModel::where('id', 1)->first();
        return view('agent.index', compact('agent', 'settings', 'properties'));
    }
}
