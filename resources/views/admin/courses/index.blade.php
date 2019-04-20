@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <br>
            <h4 class="text-center">LIST COURSE</h4>
            <br>
        </div>
        <div class="col-md-12">
            <a href="/admin/courses/create" class="btn btn-primary"> New</a>
        </div>

        <div class="col-md-12">
        <br>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>DESCRIPTION</th>
                        <th>STATUS</th>
                        <th>ACTIONS</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($courses as $course )
                        <tr>
                            <td>{{ $course->id }}</td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->description }}</td>
                            <td>

                                @if( $course->status)
                                    <span class="badge badge-primary">enabled</span>
                                @else
                                    <span class="badge badge-dangeer">disabled</span>
                                @endif
                            
                            </td>
                            <td>
                                <a href="/admin/courses/{{ $course->id }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                <a href="/admin/courses/{{ $course->id }}/edit" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="/admin/groups/index/{{ $course->id }}" class="btn btn-primary btn-sm">groups</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection