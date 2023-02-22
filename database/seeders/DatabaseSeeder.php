<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PostModel;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        PostModel::create([
            'title' => 'Post 1',
            'content'   => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, molestiae minima? Minus quaerat est velit.',
            'slug'  => 'post-1',
            'status'    => 1,
            'user_id'   => 2
        ]);
        PostModel::create([
            'title' => 'Post 2',
            'content'   => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, molestiae minima? Minus quaerat est velit.',
            'slug'  => 'post-2',
            'status'    => 2,
            'user_id'   => 1
        ]);
        PostModel::create([
            'title' => 'Post 3',
            'content'   => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, molestiae minima? Minus quaerat est velit.',
            'slug'  => 'post-3',
            'status'    => 2,
            'user_id'   => 2
        ]);
        PostModel::create([
            'title' => 'Post 4',
            'content'   => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, molestiae minima? Minus quaerat est velit.',
            'slug'  => 'post-4',
            'status'    => 1,
            'user_id'   => 1
        ]);
    }
}


