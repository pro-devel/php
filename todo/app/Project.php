<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $fillable = [
		'name', 'user_id'
	];
	public function user(){
		return $this->belongsTo('App\User');
	}
	public function tasks(){
		return $this->hasMany('App\Task');
	}
	public function getFromDateAttribute($value) {
		return \Carbon\Carbon::parse($value)->format('d-M-Y');
	}
}
