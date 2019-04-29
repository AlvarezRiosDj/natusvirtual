<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $fillable =[
    	'name',
        'description',
        'order',
        'slug',
        'status',
        'group_id',
    ];
}
