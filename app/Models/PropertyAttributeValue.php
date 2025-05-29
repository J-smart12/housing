<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyAttributeValue extends Model
{
    protected $fillable = [
        'property_attribute_id',
        'name',
        'value',
        'link',
        'slug',
        'options'
    ];

    protected $casts = [
        'options' => 'array'
    ];

    public function values(): BelongsTo
    {
        return $this->belongsTo(PropertyAttribute::class);
    }
}
