<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'properties_id',
        'image',
        'alt'
    ];

    protected $hidden = [
        'id',
        'properties_id',
        'created_at',
        'updated_at',
    ];

    public function property(): BelongsTo
    {
        return $this->belongsTo(Properties::class);
    }
}
