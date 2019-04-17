@extends('admin.layouts.main')

@section('content')
<br>
<h4 class="text-center">CREATE COURSE</h4>
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
{!!Form::open(['url'=>'admin/courses','files'=>true])!!}
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
        
        <label class="label">Image (*)</label>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="custom-file">
                <input type="file" name="image" id="docfile_edit" class="custom-file-input" id="inputGroupFile02">
                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                </div>
            </div>
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