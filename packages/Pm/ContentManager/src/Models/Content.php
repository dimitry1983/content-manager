<?php

namespace Pm\ContentManager\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Content extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'type',
        'content',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    protected static function booted()
    {
        static::saving(function ($content) {
            if (empty($content->slug)) {
                $content->slug = Str::slug($content->title);
            }
        });
    }

    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at');
    }

    public function scopePages($query)
    {
        return $query->where('type', 'page');
    }

    public function scopeBlogs($query)
    {
        return $query->where('type', 'blog');
    }
}
