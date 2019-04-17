@extends('admin.layouts.main')

@section('content')
<br>
<div class="row">
    <div class="col-md-12">
        <h3 class="text-center">{{ $course->name }}</h3>
        <h5 class="text-center">(GROUPS)</h5>
       
    </div>
    <div class="col-md-2">
        <a href="/admin/groups/create/{{ $course->id }}" class="btn btn-primary">New</a>
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
                    <th>DESCRIPTION</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach($groups as $group)
                <tr>
                    <td>{{ $group->id }}</td>
                    <td>{{ $group->name }}</td>
                    <td>{{ $group->description }}</td>
                    <td>
                        <a href="/admin/groups/{{ $group->id }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <a href="/admin/groups/{{ $group->id }}/edit" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="/admin/themes/index/{{ $group->id }}" class="btn btn-primary btn-sm">themes</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection