<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

    protected $fillable =[
    	'name',
			'description',
			'order',
			'slug',
			'status',
			'course_id',
	];

	public function themes()
    {
        return $this->hasMany('App\Theme');
	}


}
