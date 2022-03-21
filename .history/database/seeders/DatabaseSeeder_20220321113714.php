<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Comments;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::factory(5)->create();

        $comments = Comments::factory(5)->create();

        User::factory(10)->create()->each(function($user) use ($categories) {
            Post::factory(rand(1,3))->create([
                'user_id' => $user->id,
                'category_id' => ($categories->random(1)->first())->id,
                'comment_id' => ($comments->random(1)->first())->id,
            ]);
        });
    }
}