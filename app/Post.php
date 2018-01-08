<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   use SoftDeletes;
   protected $fillable = [
		'title', 'slug', 'content', 'category_id', 'featured', 'user_id'];
	
	protected $dates = ['deleted_at'];
 
	public function user()
	{
		return $this->belongsTo('App\User');
	}
	
	public function category()
	{
		return $this->belongsTo('App\Category');
	}
}
