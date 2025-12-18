<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'user_id' => 1,
                'title' => 'First Post',
                'body' => 'This is the body of the first post.',
            ],
            [
                'user_id' => 1,
                'title' => 'Second Post',
                'body' => 'This is the body of the second post.',
            ],
            [
                'user_id' => 1,
                'title' => 'Third Post',
                'body' => 'This is the body of the third post.',
            ],
            [
                'user_id' => 3,
                'title' => 'Fourth Post',
                'body' => 'This is the body of the fourth post.',
            ],
            [
                'user_id' => 2,
                'title' => 'Fifth Post',
                'body' => 'This is the body of the fifth post.',
            ],
        ];

        DB::table('posts')->insert($posts);
    }
}
