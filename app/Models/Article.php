<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public $fillable = [
        'cover',
        'title',
        'description',
        'tags',
        'likes',
        'views'
    ];
}
