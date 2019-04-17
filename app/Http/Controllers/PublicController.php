<?php

namespace App\Http\Controllers;

use App\Course;
use App\Group;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return "bienvenido";
    }


    public function courses()
    {
        $courses = Course::where('status',true)->orderBy('id', 'desc')->get();
        return view('public.courses.courses',['courses'=>$courses]);
    }


    public function course($course_id)
    {
        $course = Course::find($course_id);
        $groups = Group::where('course_id',$course_id)->where('status',true)->get();       
        return view('public.courses.course',['course'=>$course,'groups'=>$groups]);
    }

    public function theme()
    {
        return view('public.courses.theme');
    }

}
