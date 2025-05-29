<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class OfferType extends Model
{
    protected $fillable = ['name', 'slug', 'link', 'value', 'options'];

    protected $casts = [
        'options' => 'array',
    ];

    public function properties(): BelongsToMany
    {
        return $this->belongsToMany(Properties::class);
    }
}
