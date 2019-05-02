<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable =[
    	'name',
        'description',
        'image',
        'description_short',
        'status',
        'user_id',
        'slug',
    ];
}
