@extends('public.layouts.main')

@section('content')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon_house_alt"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->


<div class="container">
<div class="row">
        <!-- Section Heading -->
        <div class="col-12">
            <div class="section-heading text-center">
            <h2>{{ $course->name }}</h2>
                <p>{{ $course->description }}</p>
            </div>
        </div>
        <div class="col-12">
            @foreach($groups as $group)
                <div class="alert alert-primary" role="alert">
                    {{ $group->name }}
                </div>
                <div class="alert alert-light" role="alert">
                    <ul>
                        <li><a href="">asdfadf</a></li>
                        <li><a href="">asdfadf</a></li>
                        <li><a href="">asdfadf</a></li>
                        <li><a href="">asdfadf</a></li>
                        <li><a href="">asdfadf</a></li>
                        <li><a href="">asdfadf</a></li>
                    </ul>
                </div>
            @endforeach

            

        </div>
       
    </div>
</div>



@endsection