<?php

// Relacion de muchos a mucho php artisan make:model CategoryPost --pivot
namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CategoryPost extends Pivot
{
    protected $table = "category_post";

    protected $fillable = [
        'post_id',
        'category_id'
    ];
}
