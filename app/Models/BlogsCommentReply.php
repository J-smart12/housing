<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogsCommentReply extends Model
{
    protected $fillable = [
        'blog_comment_id',
        'name',
        'website',
        'email',
        'comment',
    ];
    public function comment()
    {
        return $this->belongsTo(BlogsComment::class, 'blog_comment_id');
    }
}
