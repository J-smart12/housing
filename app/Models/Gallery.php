<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    protected $fillable = [
        'property_id',
        'image',
        'alt'
    ];

    public function property(): BelongsTo
    {
        return $this->belongsTo(Properties::class);
    }
}
