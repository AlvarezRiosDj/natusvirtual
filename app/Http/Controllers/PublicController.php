<?php

namespace App\Http\Controllers;

use App\Course;
use App\Group;
use App\Theme;
use App\Blog;
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
        ->select('themes.*')
        ->join('groups','group_id','=','groups.id')
        ->join('courses','groups.course_id','=','courses.id')
        ->where('courses.id',$course->id)
        ->get();
 
        return view('public.courses.course',['course'=>$course,'groups'=>$groups,'themes'=>$themes]);
    }

    public function theme($course_slug,$group_slug,$theme_slug)
    {
        $theme = Theme::where('slug',$theme_slug)->first();
        return view('public.courses.theme',['theme'=>$theme]);
    }

    public function blog()
    {
        $blogs = Blog::all();
        return view('public.blogs.blogs',['blogs'=>$blogs]);
    }


    public function blog_detalle($blog_slug)
    {
        $blog = Blog::where('slug',$blog_slug)->first();
        return view('public.blogs.blog',['blog'=>$blog]);
    }

}
