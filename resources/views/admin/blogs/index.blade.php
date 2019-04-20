@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <br>
            <h4 class="text-center">LIST BLOGS</h4>
            <br>
        </div>
        <div class="col-md-12">
            <a href="/admin/blogs/create" class="btn btn-primary"> New</a>
        </div>

        <div class="col-md-12">
        <br>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>STATUS</th>
                        <th>ACTIONS</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $blog )
                        <tr>
                            <td>{{ $blog->id }}</td>
                            <td>{{ $blog->name }}</td>
                            <td>

                                @if( $blog->status)
                                    <span class="badge badge-primary">enabled</span>
                                @else
                                    <span class="badge badge-dangeer">disabled</span>
                                @endif
                            
                            </td>
                            <td>
                                <a href="/admin/blogs/{{ $blog->id }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                <a href="/admin/blogs/{{ $blog->id }}/edit" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                               
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection