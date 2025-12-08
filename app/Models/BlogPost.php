<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $table = 'blog_posts';

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'description',
        'image_file',
        'meta_title',
        'meta_description',
        'blog_date',
    ];

    public function blogCategory()
    {
        return $this->belongsTo(BlogCategory::class);
    }

    protected static function booted()
    {
        static::deleting(function ($post) {
            $uploadRoot = base_path(env('UPLOAD_ROOT'));
            $folderPath = $uploadRoot . '/blogs';
            if ($post->image_file && file_exists($folderPath.'/'.$post->image_file)) {
                @unlink($folderPath.'/'.$post->image_file);
            }
        });
    }
}
