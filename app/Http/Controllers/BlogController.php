<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBlog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('admin.blogs.index',['blogs'=>$blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlog $request)
    {   
        $anio = date("Y");       
        $id_user = Auth::id();
        $file =  $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $file->move(public_path('content/'.$anio.'/'),$fileName);
        $ruta = 'content/'.$anio.'/'.$fileName;
        
        $slug = Str::slug($request->name, '-');

        $blog = Blog::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$ruta,
            'user_id'=>$id_user,
            'description_short'=>$request->description_short,
            'slug'=>$slug
        ]);
        return redirect('admin/blogs/'.$blog->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('admin.blogs.show',['blog'=>$blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit',['blog'=>$blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $anio = date("Y");
        $id_user = Auth::id();

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
        
        $slug = Str::slug($request->name, '-');

        $blog->fill([
            'name'=>$request->name,
            'description'=>$request->description,   
            'status'=>$request->status,   
            'user_id'=>$id_user,
            'description_short'=>$request->description_short,
            'slug'=>$slug
        ]);
        $blog->save();
        return redirect('admin/blogs/'.$blog->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
