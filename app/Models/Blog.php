<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public $table = 'blog';
    protected $fillable = [
        'blog_category_id',
        'title',
        'thumbnail',
        'content',
        'author',
        'published_date',
        'view_count',
        'slug',
    ];

    public function blogCategory()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }
}
