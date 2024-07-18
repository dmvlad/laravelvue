<?php

namespace App\Console\Commands;

use App\Models\Profile;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Console\Command;

class GoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'go';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
		// посты профиля - получим коллекцию постов
		// $profile = Profile::first();
		// dd($profile->posts);

		// профиль поста
		// $post = Post::first();
		// dd($post->profile);

		// Запрос с отношениями - получим профиль и коллекцию постов профиля
		// $profile = Profile::with('posts')->first();
		// dd($profile);

		// теги
		// $tags = Tag::all();
		// dd($tags->random(5));

		// коллекция комментов для категории 9
		// $category = Category::find(9);
		// dd($category->comments);

		// последний коммент для категории 9
		// $category = Category::find(9);
		// dd($category->comment);

		// идем в коммент и говорим ему - дай свою категорию
		$comment = Comment::first();
		dd($comment->category);


		dd(11111);
    }
}