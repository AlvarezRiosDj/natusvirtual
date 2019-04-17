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
                                <li class="breadcrumb-item active" aria-current="page">Error 404</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Error Content Area Start -->
    <section class="hami-error-area text-center section-padding-100-0 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="assets/public/img/bg-img/404.png" alt="">
                    <h2>Opps! This page Could Not Be Found!</h2>
                    <p>Sorry bit the page you are looking for does not exist, have been removed or name changed</p>
                    <a href="index.html" class="btn hami-btn mt-30">Go To Homepage</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Error Content Area End -->

    <!-- Call To Action Area Start -->
    <section class="hami-cta-area">
        <div class="container">
            <div class="cta-text">
                <h2>Proudly Hosting Over <span class="counter">800,000</span> Websites Since 2000</h2>
            </div>
        </div>
    </section>
    <!-- Call To Action Area End -->
@endsection