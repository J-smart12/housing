<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyAttribute extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'has_archive',
        'display_after',
        'show',
        'card_show',
        'property_id',
        'icon'
    ];

    public function propertyAttribute(): HasMany
    {
        return $this->hasMany(PropertyAttributeValue::class);
    }
}
