<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::factory()->count(3)->create();

        foreach ($users as $user) {
            $posts = Post::factory()->count(2)->create(['user_id'=> $user->id]);

            foreach ($posts as $post) {
                Comment::factory()->count(3)->create(['post_id' => $post->id]);
            }
        }
    }
}
