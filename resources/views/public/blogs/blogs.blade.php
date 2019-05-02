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
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Blog Area Start -->
    <div class="hami-news-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 col-lg-8">
                    @foreach($blogs as $blog)
                    <!-- Single Blog Post Area -->
                    <div class="single-blog-post mb-50">
                        <!-- Post Date -->
                        <span class="post-date">{{ $blog->updated_at }}</span>
                        <!-- Post Title -->
                        <a href="#" class="post-title">{{ $blog->name }}</a>
                        <!-- Post Thumbnail -->
                        <img class="post-thumbnail" src="/{{ $blog->image }}" alt="">
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a href="#" class="post-author">By Admin</a>
                            <a href="#" class="post-tutorial">Tutorials</a>
                        </div>
                        <p>{{ $blog->description_short }}</p>
                        <a href="/blog/{{ $blog->slug }}" class="btn continue-btn">Continuar leyendo <i class="arrow_right"></i></a>
                    </div>
                    @endforeach
                 

                    <!-- Pagination -->
                    <nav class="hami-pagination mb-50">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-12 col-md-5 col-lg-4">
                    <div class="hami-sidebar-area pl-md-4 mb-50">

                        <!-- Search Form -->
                        <div class="single-widget-area mb-50">
                            <form action="#" method="post" class="widget-form">
                                <input type="search" class="form-control" placeholder="Search...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>

                        <!-- Catagories List -->
                        <div class="single-widget-area mb-50">
                            <h4 class="widget-title mb-30">Categories</h4>
                            <!-- Cata List -->
                            <ul class="catagories-list">
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Content Marketing</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Conversion Rates</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Customer Spotlight</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> E-commerce Strategy</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Landing Pages</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Marketing Ideas</a></li>
                            </ul>
                        </div>

                        <!-- Recent Post -->
                        <div class="single-widget-area mb-50">
                            <h4 class="widget-title mb-30">Recent Posts</h4>

                            <!-- Single Recent Post -->
                            <div class="single-recent-post d-flex">
                                <!-- Thumb -->
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="assets/public/img/bg-img/10.jpg" alt=""></a>
                                </div>
                                <!-- Content -->
                                <div class="post-content">
                                    <a href="single-blog.html" class="post-title">Publishing packag esanse web page editos</a>
                                    <p class="post-date">December 9, 2018</p>
                                </div>
                            </div>

                            <!-- Single Recent Post -->
                            <div class="single-recent-post d-flex">
                                <!-- Thumb -->
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="assets/public/img/bg-img/11.jpg" alt=""></a>
                                </div>
                                <!-- Content -->
                                <div class="post-content">
                                    <a href="single-blog.html" class="post-title">Flathost Offers Dedicated Hosting</a>
                                    <p class="post-date">December 9, 2018</p>
                                </div>
                            </div>

                            <!-- Single Recent Post -->
                            <div class="single-recent-post d-flex">
                                <!-- Thumb -->
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="assets/public/img/bg-img/12.jpg" alt=""></a>
                                </div>
                                <!-- Content -->
                                <div class="post-content">
                                    <a href="single-blog.html" class="post-title">Managed Hosting vs Dedicated Hosting</a>
                                    <p class="post-date">December 9, 2018</p>
                                </div>
                            </div>

                            <!-- Single Recent Post -->
                            <div class="single-recent-post d-flex">
                                <!-- Thumb -->
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="assets/public/img/bg-img/13.jpg" alt=""></a>
                                </div>
                                <!-- Content -->
                                <div class="post-content">
                                    <a href="single-blog.html" class="post-title">5 Pitfalls of Domain Registration</a>
                                    <p class="post-date">December 9, 2018</p>
                                </div>
                            </div>
                        </div>

                        <!-- Add Banner -->
                        <div class="single-widget-area mb-50">
                            <a href="#"><img src="assets/public/img/core-img/banner.png" alt=""></a>
                        </div>

                        <!-- Popular Tags -->
                        <div class="single-widget-area mb-50">
                            <h4 class="widget-title mb-30">Popular Tags</h4>

                            <ul class="popular-tags">
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Unique</a></li>
                                <li><a href="#">Audio</a></li>
                                <li><a href="#">Ideas</a></li>
                                <li><a href="#">Dedicated</a></li>
                                <li><a href="#">Wordpress Template</a></li>
                                <li><a href="#">Startup</a></li>
                                <li><a href="#">Video</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->

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