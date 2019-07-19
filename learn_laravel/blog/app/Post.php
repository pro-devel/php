<?php

namespace App;

use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = ['title', 'body', 'summary', 'hot', 'category', 'image'];
    public function comments() {
    	return $this->hasMany(Comment::class);
    }
    public function user() {
    	return $this->belongsTo(User::class);
    }
    public static function countCat($catname) {
    	return Post::where('category', $catname)->count();
    }
}
