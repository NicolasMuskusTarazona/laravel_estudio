<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, SoftDelete;
    protected $table = "posts";

    protected $fillable = [
        'title','content','status'
        'published_at', 'conver_image', 'tags', 'metadss'
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'tags' => 'array',
        'meta' => 'meta'
    ];

    public function categories(){
        return $this->belongsToMany(Category::class)->using(CategoryPost::class)->withTimestamps();
    }
}
