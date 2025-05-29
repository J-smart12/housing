<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ListingReply extends Model
{
    protected $fillable = [
        'property_id',
        'name',
        'phone',
        'email',
        'message'
    ];

    public function properties(): BelongsTo
    {
        return $this->belongsTo(Properties::class);
    }
}
