<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TagController extends Controller
{
	public function index ()
	{
		return Tag::all();
	}

	public function store()
	{
		$data = $this->getData();
		$post = Tag::create($data);
		return $post;
	}

	public function show (Tag $tag)
	{
		return $tag;
	}

	public function update (Tag $tag)
	{
		$tag->update([
			'title' => $tag->title.' edited'
		]);
		return Response::HTTP_NO_CONTENT;
	}

	public function destroy (Tag $tag)
	{
		$tag->delete();
		return Response::HTTP_NO_CONTENT;
	}

	private function getData ()
	{
		$arTitles = ['PHP', 'Laravel', 'Symfony', 'Bitrix'];

		$randomKeys = array_rand($arTitles);

		return [
			'title' => $arTitles[$randomKeys],
		];

	}

}