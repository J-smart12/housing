<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $fillable = [
        'title',
        'category',
        'author',
        'author_image',
        'author_quote',
        'body',
    ];
    public function comments()
    {
        return $this->hasMany(BlogsComment::class);
    }
}
