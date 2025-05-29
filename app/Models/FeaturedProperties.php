<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeaturedProperties extends Model
{
    protected $table = 'featured_properties';
    protected $fillable = [
        'property_id',
    ];
}
