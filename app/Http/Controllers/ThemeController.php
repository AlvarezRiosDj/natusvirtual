<?php

namespace App\Http\Controllers;

use App\Group;
use App\Theme;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTheme;
use Illuminate\Support\Str;



class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Group $group)
    {
        $themes = $group->themes;       
        return view('admin.themes.index',['group'=>$group,'themes'=>$themes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Group $group)
    {
        return view('admin.themes.create',['group'=>$group]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTheme $request)
    {   
        $request['slug'] = Str::slug($request->name, '-');
        $theme = Theme::create($request->all());
        return redirect('admin/themes/'.$theme->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function show(Theme $theme)
    {
        return view('admin.themes.show',['theme'=>$theme]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function edit(Theme $theme)
    {
        return view('admin.themes.edit',['theme'=>$theme]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Theme $theme)
    {   
        $request['slug'] = Str::slug($request->name, '-');
        $theme->fill($request->all());
        $theme->save();
        return redirect('admin/themes/'.$theme->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Theme $theme)
    {
        //
    }
}
