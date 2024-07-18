<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Post;
use App\Http\Resources\Post\PostResource;
use App\Http\Requests\Api\Post\StoreRequest;
use App\Http\Requests\Api\Post\UpdateRequest;

class PostController extends Controller
{

	public function index()
	{
		//return Post::all();
		return PostResource::collection(Post::all())->resolve();
	}

	public function show(Post $post)
	{
		return PostResource::make($post)->resolve();
	}

	public function store(StoreRequest $request)
	{
		$data = $request->validated();
		$post = Post::create($data);
		return PostResource::make($post)->resolve();
	}

	public function update(UpdateRequest $request, Post $post)
	{
		$data = $request->validated();
		$post->update($data);
		return PostResource::make($post)->resolve();
	}

	public function destroy(Post $post)
	{
		$post->delete();
		return response(['message' =>  'deleted'], Response::HTTP_OK);
		//return Response::HTTP_NO_CONTENT;
	}
}