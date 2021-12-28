<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    final public function run(): void
    {
        Post::factory()->count(10)->create();
        $countPost = Post::query()->count();

        for ($i = 0; $i < 10; $i++) {
            PostCategory::factory(['post_id' => rand(1, $countPost)])->create();
        }
    }
}
