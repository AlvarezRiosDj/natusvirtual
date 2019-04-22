<?php

namespace App\Http\Controllers;

use App\Course;
use App\Group;
use App\Theme;

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
        $themes = Theme::all();
        return view('public.courses.course',['course'=>$course,'groups'=>$groups,'themes'=>$themes]);
    }

    public function theme($theme_id)
    {
        $theme = Theme::find($theme_id);
        return view('public.courses.theme',['theme'=>$theme]);
    }

}
