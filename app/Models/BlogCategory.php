<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'blogs_categories';

    protected $fillable = [
        'title',
        'slug',
        'sort_order',
    ];

    public function posts()
    {
        return $this->hasMany(BlogPost::class);
    }
}
