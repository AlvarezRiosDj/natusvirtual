@extends('admin.layouts.main')

@section('content')
<div class="row justify-content-md-center">
    <div class="col-md-12">
        <br>
            <h4 class="text-center">COURSE</h4> 
        <br>
    </div>
    <div class="col-md-4">
        <p> <strong>Name:</strong> {{ $course->name }}</p>
        <p> <strong>Description: </strong> </p>        
        <p>{{ $course->description }}</p>
        <p> <strong>Status: </strong> 
            @if( $course->status)
                <span class="badge badge-primary">Habilitado</span>
            @else
                <span class="badge badge-dangeer">Deshabilitado</span>
            @endif
        </p>
    </div>    
</div>
<div class="row justify-content-md-center">
    <div class="col-md-4">
        <a href="/admin/courses" class="btn btn-primary">Lista</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="/admin/courses/{{ $course->id }}/edit" class="btn btn-success"> Editar</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <button class="btn btn-danger">Eliminar</button>
    </div>
</div>
@endsection