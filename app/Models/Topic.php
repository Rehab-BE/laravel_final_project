<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'title',
        'cate_name',
        'content',
        'no_of_view',
        'published',
        'trending',
        'image',
        'category_id',

    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
