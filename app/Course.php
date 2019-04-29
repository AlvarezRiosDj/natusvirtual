<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable =[
    	'name',
		'description',
		'image',
		'slug',
    	'status',
	];
	
	public function groups()
    {
        return $this->hasMany('App\Group');
	}
	

}
