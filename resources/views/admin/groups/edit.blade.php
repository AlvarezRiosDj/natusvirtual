@extends('admin.layouts.main')

@section('content')
<br>
<h4 class="text-center">UPDATE GROUP</h4>
<br>
<div class="row justify-content-md-center">
    <div class="col-md-4">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
{!!Form::model($group, ['url' => ['admin/groups', $group->id],'method'=>'PUT'])!!}
<div class="row justify-content-md-center">
 
    <div class="col-md-4">
        <div class="form-group">
            
            {!!Form::text('course_id',null,['hidden'=>'true','required'])!!}

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
                {!!Form::label('status','Estado')!!}
                {!!Form::select('status', ['1' => 'enabled', '0' => 'disabled'],null,['class'=>'form-control'])!!}
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