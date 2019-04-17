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
        $courses = Course::orderBy('id', 'desc')->get();
        return view('public.courses.courses',['courses'=>$courses]);
    }


    public function course()
    {
        return view('public.courses.course');
    }


    public function theme()
    {
        return view('public.courses.theme');
    }

}
