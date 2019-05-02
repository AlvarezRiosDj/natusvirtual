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

    <!-- Blog Details Area Start -->
    <section class="hami-blog-details-area section-padding-80-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="post-content">
                        <div class="post-meta">
                            <a href="#" class="post-date">{{ $blog->updated_at }}</a>
                        </div>
                        <h2 class="post-title">{{ $blog->name }}</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="post-thumbnail mb-50">
                        <img src="/{{ $blog->image }}" alt="">
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="blog-details-text">
                      {!! $blog->description !!}
                    </div>

                    <!-- Post Author Area -->
                    <div class="post-author-area d-flex align-items-center justify-content-between mb-50">
                        <ul class="popular-tags">
                            <li><a href="#">Agency</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>

                        <!-- Author Social Info -->
                        <div class="author-social-info d-flex align-items-center">
                            <p>Share:</p>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">

                    <!-- Related News Area -->
                    <div class="related-news-area section-padding-80-0">
                        <h2>Relatest News</h2>

                        <div class="row justify-content-between">
                            <!-- Single Related News Area -->
                            <div class="col-12 col-sm-6 col-lg-5">
                                <div class="single-related-news mb-80">
                                    <p class="post-date">December 9, 2018</p>
                                    <a href="single-blog.html" class="post-title">Managed Hosting vs Dedicated Hosting</a>
                                </div>
                            </div>
                            <!-- Single Related News Area -->
                            <div class="col-12 col-sm-6 col-lg-5">
                                <div class="single-related-news mb-80">
                                    <p class="post-date">December 9, 2018</p>
                                    <a href="single-blog.html" class="post-title">The 7-Step Guide to Creating Amazing Cornerstone Content</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Comments Area -->
                    <div class="comment_area mb-50 clearfix">
                        <h2>03 Comments</h2>

                        <ol>
                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="assets/public/img/bg-img/6.jpg" alt="author">
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <a href="#" class="post-date">27 Aug 2018</a>
                                        <h5>Jerome Leonard</h5>
                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                        <a href="#" class="like">Like</a>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                </div>

                                <ol class="children">
                                    <li class="single_comment_area">
                                        <!-- Comment Content -->
                                        <div class="comment-content d-flex">
                                            <!-- Comment Author -->
                                            <div class="comment-author">
                                                <img src="assets/public/img/bg-img/7.jpg" alt="author">
                                            </div>
                                            <!-- Comment Meta -->
                                            <div class="comment-meta">
                                                <a href="#" class="post-date">27 Aug 2018</a>
                                                <h5>Theodore Adkins</h5>
                                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                                <a href="#" class="like">Like</a>
                                                <a href="#" class="reply">Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </li>

                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="assets/public/img/bg-img/8.jpg" alt="author">
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <a href="#" class="post-date">27 Aug 2018</a>
                                        <h5>Roger Marshall</h5>
                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                        <a href="#" class="like">Like</a>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>

                    <!-- Leave A Reply -->
                    <div class="hami-contact-form mt-80 mb-30">
                        <h2>Leave A Comment</h2>

                        <!-- Form -->
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <input type="text" name="message-name" class="form-control mb-30" placeholder="Your Name">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="email" name="message-email" class="form-control mb-30" placeholder="Email">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control mb-30" placeholder="Start the discussion..."></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn hami-btn btn-3 mt-15">Post Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

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