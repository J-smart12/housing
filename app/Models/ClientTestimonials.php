<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientTestimonials extends Model
{
    protected $table = 'clients';
    protected $fillable = [
        'name',
        'position',
        'testimonial',
        'image',
        'company',
    ];
}
