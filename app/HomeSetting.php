<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeSetting extends Model
{
    
	protected $fillable=['carousel1','carousel2','carousel3','first_title','first_content',
		'second_title','second_content'];
}
