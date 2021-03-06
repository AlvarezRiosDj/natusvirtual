@extends('admin.layouts.main')

@section('content')
<br>
<h4 class="text-center">CREATE BLOG</h4>
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
{!!Form::open(['url'=>'admin/blogs','files'=>true])!!}
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
                <input type="file" name="image" class="custom-file-input" required>
                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                </div>
            </div>
        </div>
       
    </div>
</div>  

<div class="row justify-content-md-center">
  <div class="col-md-4">
        <div class="form-group">
            {!!Form::label('description_short','Description Short')!!}
            {!!Form::textarea('description_short',null,['class'=>'form-control','rows'=>'3','required'])!!}
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
