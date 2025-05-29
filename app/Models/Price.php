<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Price extends Model
{
    protected $fillable = [
        'property_id',
        'price',
        'is_range',
        'currency'
    ];

    protected $casts = [
        'is_range' => 'boolean',
    ];

    public function property(): BelongsTo
    {
        return $this->belongsTo(Properties::class);
    }
}
