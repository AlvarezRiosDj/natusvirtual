@extends('admin.layouts.main')

@section('content')
<div class="row justify-content-md-center">
    <div class="col-md-12">
        <br>
            <h4 class="text-center">COURSE</h4> 
        <br>
    </div>
    <div class="col-md-4">
        <img src="/{{ $course->image }}" width="100%" alt="">
        <br><br>
        <p> <strong>Name:</strong> {{ $course->name }}</p>
        <p> <strong>Description: </strong> </p>        
        <p>{{ $course->description }}</p>
        <p> <strong>Status: </strong> 
            @if( $course->status)
                <span class="badge badge-primary">enabled</span>
            @else
                <span class="badge badge-dangeer">disabled</span>
            @endif
        </p>
    </div>    
</div>
<div class="row justify-content-md-center">
    <div class="col-md-4">
        <a href="/admin/courses" class="btn btn-primary">List</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="/admin/courses/{{ $course->id }}/edit" class="btn btn-success"> Edit</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <button class="btn btn-danger">Delete</button>
    </div>
</div>
@endsection