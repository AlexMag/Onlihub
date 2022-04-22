<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

//use Ramsey\Uuid\Type\Integer;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 1000; $i++){

        DB::table('articles')->insert([
            'cover' => Str::random(10),
            'title' => 'Title: ' . Str::random(20),
            'description' => 'Description: ' . Str::random(100),
            'tags' => 'Tags: ' . Str::random(15),
            'likes' => rand(2, 100),
            'views' => rand(2, 100),
            'slug' => 'Title: ' . Str::random(20),
        ]);
    }
    }
}
