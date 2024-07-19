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
		/*
		 * сущности
		 * */
		/*
		$user = User::find(1);
		$profile = Profile::first();
		$post = Post::find(1);
		$comment = Comment::find(1);
		$category = Category::find(1);
		$tag = Tag::find(1);
		$role = Role::find(1);
		*/



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


		// morphOneMany Post
		// $post = Post::find(2);
		// dd($post->comments);

		// comment
		// $comment = Comment::first();
		// dd($comment->commentable);

		// лайки постов
		// $profile = Profile::first();
		// dd($profile->likedPosts);

		// кто лайкнул пост
		// $post = Post::first();
		// dd($post->likedByProfiles);

		// лайкнуть кодом - не работает
		// $profile = Profile::first();
		// $profile->likedPosts()->attach([5]);

		// найти категорию 5
		$category = Category::find(5);
		dd($category->comments);





		// !!! сиды сделать, чтобы генерили комменты



		//dd($comment->category);

		//$role = Role::find(2);

		// many-to-many-through
		// dd($profile->comments);





		dd(11111);
    }
}