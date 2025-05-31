<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OfferType extends Model
{
    use HasFactory;
    
    protected $table = 'offer_types';
    protected $fillable = ['name', 'slug', 'link', 'value', 'options'];

    protected $casts = [
        'options' => 'array',
    ];

    public function properties(): BelongsToMany
    {
        return $this->belongsToMany(Properties::class);
    }
}
