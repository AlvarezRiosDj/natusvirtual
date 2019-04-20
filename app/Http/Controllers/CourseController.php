<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCourse;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('id', 'desc')->get();
        return view('admin.courses.index',['courses'=>$courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCourse $request)
    {
        $anio = date("Y");
        $file =  $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $file->move(public_path('content/'.$anio.'/'),$fileName);
        $ruta = 'content/'.$anio.'/'.$fileName;

       
        $course = Course::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$ruta,
        ]);
        return redirect('admin/courses/'.$course->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('admin.courses.show',['course'=>$course]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('admin.courses.edit',['course'=>$course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCourse $request, Course $course)
    {   
        $anio = date("Y");
        if($request->image != null){
            \File::delete(public_path($course->image));
            $file =  $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $size = $file->getClientSize();
            $file->move(public_path('content/'.$anio.'/'),$fileName);
            $ruta = 'content/'.$anio.'/'.$fileName;
            $course->fill(['image'=>$ruta]);
          }
        $course->fill([
            'name'=>$request->name,
            'description'=>$request->description,   
            'status'=>$request->status,         
        ]);
        $course->save();
        return redirect('admin/courses/'.$course->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
