<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
	public function index ()
	{
		return Category::all();
	}

	public function store()
	{
		$data = $this->getData();
		$category = Category::create($data);
		return $category;
	}

	public function show (Category $category)
	{
		return $category;
	}

	public function update (Category $category)
	{
		$category->update([
			'title' => $category->title.' edited'
		]);
		return Response::HTTP_NO_CONTENT;
	}

	public function destroy (Category $category)
	{
		$category->delete();
		return Response::HTTP_NO_CONTENT;
	}

	private function getData ()
	{
		$arTitles = ['Development', 'Layout', 'Football', 'Dinner'];

		$randomKeys = array_rand($arTitles);

		return [
			'title' => $arTitles[$randomKeys],
		];

	}
}