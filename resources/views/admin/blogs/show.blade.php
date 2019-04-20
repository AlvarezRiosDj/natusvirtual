@extends('admin.layouts.main')

@section('content')
<div class="row justify-content-md-center">
    <div class="col-md-12">
        <br>
            <h4 class="text-center">BLOG</h4> 
        <br>
    </div>
    <div class="col-md-4">
        <img src="/{{ $blog->image }}" width="100%" alt="">
        <br><br>
        <h3 class="text-center"> <strong>{{ $blog->name }}</strong> </h3>
        <hr>
        {!! $blog->description !!}
        <p> <strong>Status: </strong> 
            @if( $blog->status)
                <span class="badge badge-primary">enabled</span>
            @else
                <span class="badge badge-dangeer">disabled</span>
            @endif
        </p>
    </div>    
</div>
<div class="row justify-content-md-center">
    <div class="col-md-4">
        <a href="/admin/blogs" class="btn btn-primary">List</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="/admin/blogs/{{ $blog->id }}/edit" class="btn btn-success"> Edit</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <button class="btn btn-danger">Delete</button>
    </div>
</div>
@endsection