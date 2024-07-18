<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\Post\PostResource;

class PostController extends Controller
{
    public function store()
	{
		$data = $this->getData();
		$post = Post::create($data);
		return $post;
	}

	public function index ()
	{
		return PostResource::collection(Post::all())->resolve();
	}

	public function show (Post $post)
	{
		//return $post;
		return PostResource::make($post)->resolve();
	}

	public function update (Post $post)
	{
		$post->update([
			'title' => $post->title.' edited',
			'content' => $post->content.' edited'
		]);
		return Response::HTTP_NO_CONTENT;
	}

	public function destroy (Post $post)
	{
		$post->delete();
		return Response::HTTP_NO_CONTENT;
	}

	private function getData ()
	{
		$arTitles1 = ['Very nice', 'So simple', 'Obvious', 'Awesome'];
		$arTitles2 = ['title', 'article', 'news', 'text'];
		$arAuthors1 = ['Ivan', 'John', 'Juan', 'Johann'];
		$arAuthors2 = ['Ivanov', 'Lennon', 'Iglesias', 'Muller'];

		$randomKeys1 = array_rand($arTitles1);
		$randomKeys2 = array_rand($arTitles2);

		$randomAuthor1 = array_rand($arAuthors1);
		$randomAuthor2 = array_rand($arAuthors2);

		return [
			'title' => $arTitles1[$randomKeys1].' '.$arTitles2[$randomKeys2],
			'content' => $arTitles1[$randomKeys1].' content',
			'description' => $arTitles1[$randomKeys1].' '.$arTitles2[$randomKeys2].' full description',
			'image_path' => '/upload/cw2/jhbffjfjbjhdvs.jpg',
			'status' => '1',
			'profile_id' => 1,
			'category' => 'PHP',
			'tag' => 'Develop'
		];

	}

}