<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        Post::create([
            'user_id'=>1,
            'category_id'=>1,
            'title'=>'post01',
            'body'=>'gggggggggggggggggggggggg',
            'excerpt'=>'ddddddddd',
            'slug'=>'iiiiiiiii'


        ]);
    }
}
