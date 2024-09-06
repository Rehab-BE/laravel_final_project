<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $filelable =
    [
     'title',
     'category_name',
     'content',
     'no_of_view',
     'published',
     'trending',
     'image',
    ];
}
