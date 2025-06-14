<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blogs extends Model
{
    use HasFactory;
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
