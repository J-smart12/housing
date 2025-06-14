<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SettingsModel extends Model
{
    protected $table = 'settings';
    protected $fillable = [
        'sitename',
        'address',
        'phone',
        'email',
        'about_us',
        'vision',
        'logo'
    ];
}
