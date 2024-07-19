<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

	protected $guarded = false;

	public function comments()
	{
		// с кем отношения и через кого
		// у комментариев есть fk на пост
		// у поста есть fk на категорию
		// эти 2 fk надо задать в firstKey и secondKey

		return $this->hasManyThrough(Comment::class,
			Post::class,
			'category_id',
			'commentable_id',
			'id',
			'id'
		);
	}

	public function comment()
	{
		return $this->hasOneThrough(Comment::class, Post::class)->latest();
	}

}