<?php

namespace App\Http\Requests\Api\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{

    public function rules(): array
    {
		return [
			'title' => 'required|string',
			'content' => 'nullable|string',
			'description' => 'nullable|string',
			'published_at' => 'nullable|date_format:Y-m-d',
			'image_path' => 'nullable|string',
			'status' => 'nullable|integer',
			'author' => 'nullable|string',
			'category' => 'nullable|string',
			'tag' => 'nullable|string'
		];
    }

}