<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'type', // e.g., 'property-type', 'city', etc.
        'link',
        'options'
    ];

    protected $casts = [
        'options' => 'array',
    ];

    public function properties(): HasMany
    {
        return $this->hasMany(Properties::class);
    }
}
