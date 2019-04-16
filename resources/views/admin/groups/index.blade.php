@extends('admin.layouts.main')

@section('content')
<br>
<div class="row">
    <div class="col-md-12">
        <h3 class="text-center">{{ $course->name }}</h3>
       
    </div>
    <div class="col-md-2">
        <a href="/admin/groups/create/{{ $course->id }}" class="btn btn-primary">Nuevo</a>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($groups as $group)
                <tr>
                    <td>{{ group->id }}</td>
                    <td>{{ group->name }}</td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection