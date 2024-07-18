<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;
use App\Models\Tag;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		$posts = Post::factory(30)->create();
		$tags = Tag::all();

		foreach($posts as $post) {
			$post->tags()->attach($tags->random(3)->pluck('id')); // этот код вернет коллекцию айдишников
		}

    }
}