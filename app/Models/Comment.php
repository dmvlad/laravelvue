<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

	public function posts ()
	{
		return $this->belongsTo(Post::class);
	}

	public function category()
	{
		return $this->post->category();
	}

	public function commentable()
	{
		return $this->morphTo();
	}


}