@extends('admin.layouts.main')

@section('content')
<br>
{!!Form::open(['url'=>'admin/courses'])!!}
<div class="row justify-content-md-center">
    <div class="col-md-4">
        <div class="form-group">
            {!!Form::label('name','Name')!!}
            {!!Form::text('name',null,['class'=>'form-control','required'])!!}
        </div>
    </div>
</div>  
<div class="row justify-content-md-center">
  <div class="col-md-4">
        <div class="form-group">
            {!!Form::label('description','Description')!!}
            {!!Form::textarea('description',null,['class'=>'form-control','required'])!!}
        </div>
    </div>
</div>  

<div class="row justify-content-md-center">
  <div class="col-md-4">
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Save">
        </div>
    </div>
</div>  
{!!Form::close()!!}

@endsection