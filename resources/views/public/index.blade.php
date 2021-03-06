@extends('public.layouts.main')

@section('content')
<!-- Welcome Area Start -->
<section class="welcome-area">

<!-- Welcome Pattern -->
<div class="welcome-pattern">
    <img src="assets/public/img/core-img/welcome-pattern.png" alt="">
</div>

<!-- Welcome Slide -->
<div class="welcome-slides owl-carousel">

    <!-- Single Welcome Slide -->
    <div class="single-welcome-slide">
        <!-- Welcome Content -->
        <div class="welcome-content h-100">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Welcome Text -->
                    <div class="col-12 col-md-9 col-lg-7">
                        <div class="welcome-text mb-50">
                            <h2 data-animation="fadeInLeftBig" data-delay="200ms" data-duration="1s">The Best <br> Web Hosting</h2>
                            <h3 data-animation="fadeInLeftBig" data-delay="400ms" data-duration="1s">Starting at <span>$7.99</span> $2.95/month*</h3>
                            <p data-animation="fadeInLeftBig" data-delay="600ms" data-duration="1s">Everything you will EVER need to Host and Manage your Website!</p>
                            <a href="#" class="btn hami-btn btn-2" data-animation="fadeInLeftBig" data-delay="800ms" data-duration="1s">Get Start Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome Thumbnail -->
        <div class="welcome-thumbnail">
            <img src="assets/public/img/bg-img/1.png" alt="">
        </div>
    </div>

    <!-- Single Welcome Slide -->
    <div class="single-welcome-slide">
        <!-- Welcome Content -->
        <div class="welcome-content h-100">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Welcome Text -->
                    <div class="col-12 col-md-9 col-lg-7">
                        <div class="welcome-text mb-50">
                            <h2 data-animation="fadeInUpBig" data-delay="200ms" data-duration="1s">The Best <br> Web Hosting</h2>
                            <h3 data-animation="fadeInUpBig" data-delay="400ms" data-duration="1s">Starting at <span>$7.99</span> $2.95/month*</h3>
                            <p data-animation="fadeInUpBig" data-delay="600ms" data-duration="1s">Everything you will EVER need to Host and Manage your Website!</p>
                            <a href="#" class="btn hami-btn btn-2" data-animation="fadeInUpBig" data-delay="800ms" data-duration="1s">Get Start Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome Thumbnail -->
        <div class="welcome-thumbnail">
            <img src="assets/public/img/bg-img/2.png" alt="">
        </div>
    </div>

</div>

<!-- Clouds -->
<div class="clouds">
    <img src="assets/public/img/core-img/cloud-1.png" alt="" class="cloud-1">
    <img src="assets/public/img/core-img/cloud-2.png" alt="" class="cloud-2">
    <img src="assets/public/img/core-img/cloud-3.png" alt="" class="cloud-3">
    <img src="assets/public/img/core-img/cloud-4.png" alt="" class="cloud-4">
    <img src="assets/public/img/core-img/cloud-5.png" alt="" class="cloud-5">
</div>
</section>
<!-- Welcome Area End -->

<!-- Find Domain Area Start -->
<section class="find-domain-area section-padding-100-0">
<div class="container">
    <div class="row align-items-center">
        <div class="col-12 col-md-4">
            <div class="domain-text mb-100">
                <h2>Find Your Perfect Domain Name</h2>
                <h6>Only $7 for the first year</h6>
            </div>
        </div>
        <div class="col-12 col-md-8">
            <div class="domain-search-form mb-100">
                <!-- Search Form -->
                <form action="#" method="post" class="form-inline">
                    <input type="search" placeholder="Enter Your Domain Name Here">
                    <select name="domain-extension" id="domainExtension">
                        <option value=".com">.COM</option>
                        <option value=".com">.NET</option>
                        <option value=".com">.ORG</option>
                        <option value=".com">.US</option>
                        <option value=".com">.BIZ</option>
                        <option value=".com">.CO</option>
                    </select>
                    <button type="submit">Search Domain</button>
                </form>

                <!-- Domain Price Help -->
                <div class="domain-price-help mt-50 d-flex align-items-center justify-content-between">
                    <p>.COM $5.75</p>
                    <p>.NET $9.45</p>
                    <p>.ORG $7.50</p>
                    <p>.US $5.99</p>
                    <p>.BIZ $9.99</p>
                    <p>.CO $6.0</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Find Domain Area End -->

<!-- Features Area Start -->
<section class="hami-features-area bg-gray section-padding-100">
<div class="container">
    <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
            <div class="section-heading text-center">
                <h2>Overall Features</h2>
                <p>Our revolutionary Cloud solution is powerful, simple, and surprisingly affordable.</p>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- Single Feature Area -->
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-feature-area d-flex mb-50">
                <div class="feature-icon">
                    <i class="icon_cloud-upload_alt"></i>
                </div>
                <div class="feature-text">
                    <h5>Auto Updates</h5>
                    <p>Don't be distracted by criticism. Remember the only taste of success some people.</p>
                </div>
            </div>
        </div>

        <!-- Single Feature Area -->
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-feature-area d-flex mb-50">
                <div class="feature-icon">
                    <i class="icon_adjust-vert"></i>
                </div>
                <div class="feature-text">
                    <h5>Optimized Software</h5>
                    <p>Don't be distracted by criticism. Remember the only taste of success some people.</p>
                </div>
            </div>
        </div>

        <!-- Single Feature Area -->
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-feature-area d-flex mb-50">
                <div class="feature-icon">
                    <i class="icon_archive_alt"></i>
                </div>
                <div class="feature-text">
                    <h5>Daily Backups</h5>
                    <p>Don't be distracted by criticism. Remember the only taste of success some people.</p>
                </div>
            </div>
        </div>

        <!-- Single Feature Area -->
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-feature-area d-flex mb-50">
                <div class="feature-icon">
                    <i class="icon_globe-2"></i>
                </div>
                <div class="feature-text">
                    <h5>Wide Networking</h5>
                    <p>Don't be distracted by criticism. Remember the only taste of success some people.</p>
                </div>
            </div>
        </div>

        <!-- Single Feature Area -->
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-feature-area d-flex mb-50">
                <div class="feature-icon">
                    <i class="icon_shield"></i>
                </div>
                <div class="feature-text">
                    <h5>Protected</h5>
                    <p>Don't be distracted by criticism. Remember the only taste of success some people.</p>
                </div>
            </div>
        </div>

        <!-- Single Feature Area -->
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-feature-area d-flex mb-50">
                <div class="feature-icon">
                    <i class="icon_headphones"></i>
                </div>
                <div class="feature-text">
                    <h5>Free Support</h5>
                    <p>Don't be distracted by criticism. Remember the only taste of success some people.</p>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Feature Pattern -->
<div class="feature-pattern">
    <img src="assets/public/img/core-img/welcome-pattern.png" alt="">
</div>
</section>
<!-- Features Area End -->

<!-- Price Plan Area Start -->
<section class="hami-price-plan-area mt-50">
<div class="container">
    <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
            <div class="section-heading text-center">
                <h2>Choose Your Web Hosting Plan</h2>
                <p>You want custom hosting plan. No hidden charge.</p>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">

        <!-- Single Price Plan -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="single-price-plan mb-100">
                <!-- Title -->
                <div class="price-plan-title">
                    <h4>Standard Hosting</h4>
                    <p>On sale - Save 50%</p>
                </div>
                <!-- Value -->
                <div class="price-plan-value">
                    <h2><span>$</span>1.99</h2>
                    <p>/per month</p>
                </div>
                <!-- Button -->
                <a href="#" class="btn hami-btn w-100 mb-30">Get Started</a>
                <!-- Description -->
                <div class="price-plan-desc">
                    <p><i class="icon_check"></i> Unlimited Number of Websites</p>
                    <p><i class="icon_check"></i> Unlimited Email Accounts</p>
                    <p><i class="icon_check"></i> Unlimited Bandwidth</p>
                    <p><i class="icon_check"></i> 2X Processing Power &amp; Memory</p>
                </div>
                <!-- View All Feature Button -->
                <a href="#" class="btn view-all-btn">Click here to see all features</a>
            </div>
        </div>

        <!-- Single Price Plan -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="single-price-plan active mb-100">
                <!-- Popular Tag -->
                <div class="popular-tag">
                    <i class="icon_star"></i> Best Plan <i class="icon_star"></i>
                </div>
                <!-- Title -->
                <div class="price-plan-title">
                    <h4>Advanced Hosting</h4>
                    <p>On sale - Save 70%</p>
                </div>
                <!-- Value -->
                <div class="price-plan-value">
                    <h2><span>$</span>3.99</h2>
                    <p>/per month</p>
                </div>
                <!-- Button -->
                <a href="#" class="btn hami-btn w-100 mb-30">Get Started</a>
                <!-- Description -->
                <div class="price-plan-desc">
                    <p><i class="icon_check"></i> Unlimited Number of Websites</p>
                    <p><i class="icon_check"></i> Unlimited Email Accounts</p>
                    <p><i class="icon_check"></i> Unlimited Bandwidth</p>
                    <p><i class="icon_check"></i> 2X Processing Power &amp; Memory</p>
                </div>
                <!-- View All Feature Button -->
                <a href="#" class="btn view-all-btn">Click here to see all features</a>
            </div>
        </div>

        <!-- Single Price Plan -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="single-price-plan mb-100">
                <!-- Title -->
                <div class="price-plan-title">
                    <h4>Unlimited Hosting</h4>
                    <p>On sale - Save 50%</p>
                </div>
                <!-- Value -->
                <div class="price-plan-value">
                    <h2><span>$</span>7.99</h2>
                    <p>/per month</p>
                </div>
                <!-- Button -->
                <a href="#" class="btn hami-btn w-100 mb-30">Get Started</a>
                <!-- Description -->
                <div class="price-plan-desc">
                    <p><i class="icon_check"></i> Unlimited Number of Websites</p>
                    <p><i class="icon_check"></i> Unlimited Email Accounts</p>
                    <p><i class="icon_check"></i> Unlimited Bandwidth</p>
                    <p><i class="icon_check"></i> 2X Processing Power &amp; Memory</p>
                </div>
                <!-- View All Feature Button -->
                <a href="#" class="btn view-all-btn">Click here to see all features</a>
            </div>
        </div>

    </div>
</div>
</section>
<!-- Price Plan Area End -->

<!-- Call To Action Area Start -->
<section class="hami-call-to-action bg-gray section-padding-100-0">
<div class="container">
    <div class="row align-items-center">
        <div class="col-12 col-md-6">
            <div class="cta-thumbnail mb-100">
                <img src="assets/public/img/bg-img/2.png" alt="">
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="cta--content mb-100">
                <h2>Up to 70% Discount with FREE Domain Name Registration Included!</h2>
                <!-- Description -->
                <div class="cta-desc mb-50">
                    <h6><i class="icon_check"></i> FREE Domain Name</h6>
                    <h6><i class="icon_check"></i> FREE Email Address</h6>
                    <h6><i class="icon_check"></i> Plenty of Disk Space</h6>
                    <h6><i class="icon_check"></i> FREE Website Builder</h6>
                    <h6><i class="icon_check"></i> FREE Marketing Tools</h6>
                    <h6><i class="icon_check"></i> 1-Click WordPress Install</h6>
                </div>
                <!-- Button -->
                <a href="#" class="btn hami-btn">Get Start Now!</a>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Call To Action Area End -->

<!-- Support Area Start -->
<section class="hami-support-area bg-gray">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="support-text">
                <h2>Need help? Call our award-winning support team 24/7: +65 1234-6868</h2>
            </div>
        </div>
    </div>
</div>

<!-- Support Pattern -->
<div class="support-pattern" style="background-image: url(assets/public/img/core-img/support-pattern.png);"></div>
</section>
<!-- Support Area End -->

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
