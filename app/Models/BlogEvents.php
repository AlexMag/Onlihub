<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BlogEvents extends Model
{
    public static function incrementView($id){

        DB::table('articles')->where('id', $id)->increment('views');
    }

    public static function incrementLike($id){

        DB::table('articles')->where('id', $id)->increment('likes');
    }
}
