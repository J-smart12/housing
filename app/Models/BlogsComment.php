<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogsComment extends Model
{
    protected $fillable = [
        'title',
        'category',
        'author',
        'author_image',
        'author_quote',
        'body',
    ];
    public function reply()
    {
        return $this->hasMany(BlogsCommentReply::class);
    }

    public function blogs()
    {
        return $this->belongsTo(Blogs::class, 'blog_id');
    }
}
