@extends('admin.layouts.main')

@section('content')
<br>
<div class="row">
    <div class="col-md-12">
        <h3 class="text-center">{{ $group->name }}</h3>
        <h5 class="text-center">(THEMES)</h5>
       
    </div>
    <div class="col-md-2">
        <a href="/admin/themes/create/{{ $group->id }}" class="btn btn-primary">New</a>
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
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach($themes as $theme)
                <tr>
                    <td>{{ $theme->id }}</td>
                    <td>{{ $theme->name }}</td>
                    <td>
                        <a href="/admin/themes/{{ $theme->id }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <a href="/admin/themes/{{ $theme->id }}/edit" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection