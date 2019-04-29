<?php

namespace App\Http\Controllers;

use App\Course;
use App\Group;
use App\Theme;
use DB;

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


    public function course($course_slug)
    {
        $course = Course::where('slug',$course_slug)->first();   
       
        $groups = Course::find($course->id)->groups; 
        //$themes = Theme::all();

        $themes = DB::table('themes')
        ->join('groups','group_id','=','groups.id')
        ->join('courses','groups.course_id','=','courses.id')
        ->where('courses.id',$course->id)
        ->get();
 
        return view('public.courses.course',['course'=>$course,'groups'=>$groups,'themes'=>$themes]);
    }

    public function theme($theme_id)
    {
        $theme = Theme::find($theme_id);
        return view('public.courses.theme',['theme'=>$theme]);
    }

}
