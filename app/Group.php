<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable =[
    	'name',
    	'description',
			'status',
			'course_id',
    ];
}
