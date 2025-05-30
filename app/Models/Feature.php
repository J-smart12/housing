<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Feature extends Model
{
    protected $fillable = [
        'name',
        'value',
        'link',
        'slug',
        'options'
    ];

    protected $casts = [
        'options' => 'array'
    ];

    public function properties(): BelongsToMany
    {
        return $this->belongsToMany(Properties::class,'feature_property');
    }
}
