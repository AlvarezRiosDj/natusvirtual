@extends('admin.layouts.main')

@section('content')
<div class="row justify-content-md-center">
    <div class="col-md-12">
        <br>
         <h4 class="text-center">GROUP</h4> 
        <br>
    </div>
    <div class="col-md-4">
        <p> <strong>Name:</strong> {{ $group->name }}</p>
        <p> <strong>Description: </strong> </p>        
        <p>{{ $group->description }}</p>
        <p> <strong>Status: </strong> 
            @if( $group->status)
                <span class="badge badge-primary">enabled</span>
            @else
                <span class="badge badge-dangeer">disabled</span>
            @endif
        </p>
    </div>    
</div>
<div class="row justify-content-md-center">
    <div class="col-md-4">
        <a href="/admin/groups/index/{{ $group->course_id }}" class="btn btn-primary">List</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="/admin/groups/{{ $group->id }}/edit" class="btn btn-success"> Edit</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <button class="btn btn-danger">Delete</button>
    </div>
</div>
@endsection