<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

	protected $guarded = false;

	public function profile()
	{
		return $this->belongsTo(Profile::class);
	}

	public function tags ()
	{
		return $this->belongsToMany(Tag::class);
	}

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function comments()
	{
		return $this->morphMany(Comment::class, 'commentable');
	}

	public function likedByProfiles()
	{
		return $this->morphToMany(Profile::class, 'likeable', 'likeable');
	}


}