@extends('admin.layouts.main')

@section('content')
<br>
<h4 class="text-center">UPDATE COURSE</h4>
<br>
{!!Form::model($blog, ['url' => ['admin/blogs', $blog->id],'method'=>'PUT','files'=>true])!!}
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
            {!!Form::textarea('description',null,['class'=>'form-control','id'=>'summernote','required'])!!}
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
                {!!Form::label('status','Estado')!!}
                {!!Form::select('status', ['1' => 'enabled', '0' => 'disabled'],null,['class'=>'form-control'])!!}
        </div>
    </div>
</div>  

<div class="row justify-content-md-center">
  <div class="col-md-4">
        <a href="/admin/blogs" class="btn btn-primary">List</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" class="btn btn-success" value="Save">     
        
    </div>
</div>  
{!!Form::close()!!}
@endsection


@section('script')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
    <script>
      $('#summernote').summernote({
        placeholder: 'description',
        tabsize: 2,
        height: 100
      });
    </script>
@endsection