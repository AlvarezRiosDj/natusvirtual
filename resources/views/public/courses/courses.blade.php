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
            <h2>cursos</h2>
                <p>Our revolutionary Cloud solution is powerful, simple, and surprisingly affordable.</p>
            </div>
        </div>
        @foreach($courses as $course)
             <div class="col-4">
            
                <div class="card mb-3">
                    <h3 class="card-header">{{ $course->name }}</h3>
                    
                    <img style="height: 200px; width: 100%; display: block;" src="/{{ $course->image }}" alt="Card image">
                    <div class="card-body">
                        <p class="card-text">{{ $course->description }}</p>
                    </div>
                
                </div>           

            </div>  
        @endforeach

        
       
    </div>
</div>

@endsection