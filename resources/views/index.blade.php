@extends("base")
@section("content")
<div id="side-bar" class="side-bar header-three">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="inner-main-wrapper-desk">
        <div class="thumbnail">
            <img src="{{ asset('/assets/images/banner/04.jpg') }}" alt="elevate">
        </div>
        <div class="inner-content">
            <h4 class="title">We Build Building and Great Constructive Homes.</h4>
            <p class="disc">
                We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master new technologies.
            </p>
            <div class="footer">
                <h4 class="title">Got a project in mind?</h4>
                <a href="{{ route('contact') }}" class="rts-btn btn-seconday">Let's talk</a>
            </div>
        </div>
    </div>
    <!-- mobile menu area start -->
    @include('mobile-nav')
    <!-- mobile menu area end -->
</div>


<!-- rts banner swiper wrapper -->
<div class="swiper mySwiper-bannner-12">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <!-- rts banner area start -->
            <div class="rts-banner-area-12 rts-section-gap bg-image-h-15 bg_image">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-content-12-wrapper with-thirteen">
                                <span class="pre-title">Specialized supplier of top-notch safety and lifting gear</span>
                                <h1 class="title-main">
                                    INTEGRATED LIFTING EQUIPMENT <br> SUPPLIERS IN UAE
                                </h1>
                                <p class="disc">
                                    Catering to a wide range of industries including Marine, Oil & Gas, Off-shore, Construction, Piling & Foundation, Crane, and Engineering
                                </p>
                                <a href="{{ route('contact') }}" class="rts-btn btn-primary icon-separete">Contact Us <i class="fa-regular fa-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- rts banner area end -->
        </div>
        <div class="swiper-slide">
            <!-- rts banner area start -->
            <div class="rts-banner-area-12 rts-section-gap bg-image-h-16 bg_image">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-content-12-wrapper with-thirteen">
                                <span class="pre-title">Specialized supplier of top-notch safety and lifting gear</span>
                                <h1 class="title-main">
                                    INTEGRATED LIFTING EQUIPMENT <br> SUPPLIERS IN UAE
                                </h1>
                                <p class="disc">
                                    Catering to a wide range of industries including Marine, Oil & Gas, Off-shore, Construction, Piling & Foundation, Crane, and Engineering
                                </p>
                                <a href="{{ route('contact') }}" class="rts-btn btn-primary icon-separete">Contact Us <i class="fa-regular fa-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- rts banner area end -->
        </div>
        <div class="swiper-slide">
            <!-- rts banner area start -->
            <div class="rts-banner-area-12 rts-section-gap bg-image-h-17 bg_image">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-content-12-wrapper with-thirteen">
                                <span class="pre-title">Specialized supplier of top-notch safety and lifting gear</span>
                                <h1 class="title-main">
                                    INTEGRATED LIFTING EQUIPMENT <br> SUPPLIERS IN UAE
                                </h1>
                                <p class="disc">
                                    Catering to a wide range of industries including Marine, Oil & Gas, Off-shore, Construction, Piling & Foundation, Crane, and Engineering
                                </p>
                                <a href="{{ route('contact') }}" class="rts-btn btn-primary icon-separete">Contact Us <i class="fa-regular fa-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- rts banner area end -->
        </div>
    </div>
    <div class="swiper-button-next"><i class="fa-light fa-arrow-right"></i></div>
    <div class="swiper-button-prev"><i class="fa-light fa-arrow-left"></i></div>
</div>
<!-- rts banner swiper wrapper end -->


<!-- our offer area start -->
<div class="rts-our-offer-area-main rts-section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="offer-left-13">
                    <div class="title-area-wrapper-13">
                        <span>ABOUT US</span>
                        <h2 class="title">
                            Manarat Al Falah Trading LLC - MAFT
                        </h2>
                        <p class="disc text-justify">
                            We are a specialized supplier of top-notch safety and lifting gear, catering to a wide range of industries including Marine, Oil & Gas, Off-shore, Construction, Piling & Foundation, Crane, and Engineering. With our unwavering commitment to quality, we take pride in delivering products that meet and exceed international standards.<br /><br />
                            At <a href="https://maft.ae" class="text-orange">MAFT</a>, our experienced team is dedicated to understanding anf fulfilling the unique needs of our customers. Drawing on our expertise and industry knowledge, we strive to provide tailored solution that optimize performance and ensure safety.<br /><br />
                            We emphasize the importance of adhering to stringent quality control measures throughout our manufacturing and supply processes. Each product undergoes rigorous testing and inspection to guarantee, reliability, durability, and compaliance with international standards.<br /><br />
                            Whether you require lifting gear for Marine applications, Oil & Gas projects, Offshore installations, Construction sites, Piling and Foundation work, or Engineering Ventures, <a href="https://maft.ae" class="text-orange">MAFT</a> is your trusted partner. We are committed to providing exceptional products that empower your operations and contribute to your success.
                        </p>
                        <a href="{{ asset('/assets/docs/maft-catalogue.pdf') }}" class="rts-btn btn-primary" target="_blank">View Catalogue
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-shape">
        <img src="{{ asset('/assets/images/about/01.png') }}" alt="about">
    </div>
</div>
<!-- our offer area end -->
<!-- our service area start -->
<div class="rts-service-area-three rts-section-gap">
    <div class="container">
        <div class="row g-5">
            <div class="col-12">
                <span>INDUSTRIES WE SERVE</span>
                <h2 class="title">
                    We are lifting equipment suppliers in UAE and beyond to the following industries.
                </h2>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- single service area start-->
                <div class="rts-single-service-three" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                    <a href="#" class="">
                        <i class="fas fa-ship fa-5x text-orange"></i>
                    </a>
                    <div class="content-area">
                        <a href="#">
                            <h5 class="title">MARINE</h5>
                        </a>
                        <p class="disc">Tools & Equipments used in Marine</p>
                        <a href="#" class="read-more-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- single service area end-->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- single service area start-->
                <div class="rts-single-service-three" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800">
                    <a href="#" class="">
                        <i class="fas fa-anchor fa-5x text-orange"></i>
                    </a>
                    <div class="content-area">
                        <a href="#">
                            <h5 class="title">OFFSHORE</h5>
                        </a>
                        <p class="disc">Tools & Equipments used in Offshore</p>
                        <a href="#" class="read-more-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- single service area end-->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- single service area start-->
                <div class="rts-single-service-three" data-sal="slide-up" data-sal-delay="550" data-sal-duration="800">
                    <a href="#" class="">
                        <i class="fas fa-cogs fa-5x text-orange"></i>
                    </a>
                    <div class="content-area">
                        <a href="#">
                            <h5 class="title">ENGINEERING</h5>
                        </a>
                        <p class="disc">Tools & Equipments used in Engineering</p>
                        <a href="#" class="read-more-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- single service area end-->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- single service area start-->
                <div class="rts-single-service-three" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                    <a href="#" class="">
                        <i class="fas fa-tint fa-5x text-orange"></i>
                    </a>
                    <div class="content-area">
                        <a href="#">
                            <h5 class="title">OIL & GAS</h5>
                        </a>
                        <p class="disc">Tools & Equipments used in Oil & Gas Industry</p>
                        <a href="#" class="read-more-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- single service area end-->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- single service area start-->
                <div class="rts-single-service-three" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800">
                    <a href="#" class="">
                        <i class="fas fa-city fa-5x text-orange"></i>
                    </a>
                    <div class="content-area">
                        <a href="#">
                            <h5 class="title">CONSTRUCTION</h5>
                        </a>
                        <p class="disc">Tools & Equipments used for Construction</p>
                        <a href="#" class="read-more-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- single service area end-->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- single service area start-->
                <div class="rts-single-service-three" data-sal="slide-up" data-sal-delay="550" data-sal-duration="800">
                    <a href="#" class="">
                        <i class="fas fa-truck-loading fa-5x text-orange"></i>
                    </a>
                    <div class="content-area">
                        <a href="#">
                            <h5 class="title">INDUSTRIAL LIFTING</h5>
                        </a>
                        <p class="disc">Tools & Equipments used in Industrial Lifting</p>
                        <a href="#" class="read-more-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- single service area end-->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- single service area start-->
                <div class="rts-single-service-three" data-sal="slide-up" data-sal-delay="550" data-sal-duration="800">
                    <a href="#" class="">
                        <i class="fas fa-snowplow fa-5x text-orange"></i>
                    </a>
                    <div class="content-area">
                        <a href="#">
                            <h5 class="title">PILING & FOUNDATION</h5>
                        </a>
                        <p class="disc">Tools & Equipments used in Piling & Foundation</p>
                        <a href="#" class="read-more-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- single service area end-->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- single service area start-->
                <div class="rts-single-service-three" data-sal="slide-up" data-sal-delay="550" data-sal-duration="800">
                    <a href="#" class="">
                        <i class="fas fa-forklift fa-5x text-orange"></i>
                    </a>
                    <div class="content-area">
                        <a href="#">
                            <h5 class="title">CRANE & ENGINEERING</h5>
                        </a>
                        <p class="disc">Tools & Equipments used in Crane & Engineering</p>
                        <a href="#" class="read-more-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- single service area end-->
            </div>

        </div>
    </div>
</div>
<!-- our service area end -->
<div class="rts-blog-grid-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <span>PRODUCTS</span>
                        <h2 class="title">
                            Trusted Lifting Equipment Suppliers in UAE
                        </h2>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                        <!-- single blog two -->
                        <div class="blog-single-two-wrapper shop">
                            <div class="image-area">
                                <a href="#" class="thumbnail">
                                    <img src="{{ asset('/assets/images/products/Steel-Wire-Rope.jpg') }}" alt="Steel-Wire-Rope">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">STEEL WIRE ROPES</h5>
                                </a>
                            </div>
                        </div>
                        <!-- single blog two end -->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                        <!-- single blog two -->
                        <div class="blog-single-two-wrapper shop">
                            <div class="image-area">
                                <a href="#" class="thumbnail">
                                    <img src="{{ asset('/assets/images/products/Shackles.jpg') }}" alt="Shackles">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">SHACKLES</h5>
                                </a>
                            </div>
                        </div>
                        <!-- single blog two end -->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                        <!-- single blog two -->
                        <div class="blog-single-two-wrapper shop">
                            <div class="image-area">
                                <a href="#" class="thumbnail">
                                    <img src="{{ asset('/assets/images/products/SLINGS.png') }}" alt="Slings">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">SLINGS</h5>
                                </a>
                            </div>
                        </div>
                        <!-- single blog two end -->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                        <!-- single blog two -->
                        <div class="blog-single-two-wrapper shop">
                            <div class="image-area">
                                <a href="#" class="thumbnail">
                                    <img src="{{ asset('/assets/images/products/Hoisting.jpg') }}" alt="Hoisting">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">HOISTING</h5>
                                </a>
                            </div>
                        </div>
                        <!-- single blog two end -->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                        <!-- single blog two -->
                        <div class="blog-single-two-wrapper shop">
                            <div class="image-area">
                                <a href="#" class="thumbnail">
                                    <img src="{{ asset('/assets/images/products/Stainless-steel-products.png') }}" alt="Stainless-steel-products">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">STEEL PRODUCTS</h5>
                                </a>
                            </div>
                        </div>
                        <!-- single blog two end -->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                        <!-- single blog two -->
                        <div class="blog-single-two-wrapper shop">
                            <div class="image-area">
                                <a href="#" class="thumbnail">
                                    <img src="{{ asset('/assets/images/products/Chain-End-Fittings.jpg') }}" alt="Chain-End-Fittings">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">CHAIN END FITTINGS</h5>
                                </a>
                            </div>
                        </div>
                        <!-- single blog two end -->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                        <!-- single blog two -->
                        <div class="blog-single-two-wrapper shop">
                            <div class="image-area">
                                <a href="#" class="thumbnail">
                                    <img src="{{ asset('/assets/images/products/Lashing.jpg') }}" alt="Lashing">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">LASHING</h5>
                                </a>
                            </div>
                        </div>
                        <!-- single blog two end -->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                        <!-- single blog two -->
                        <div class="blog-single-two-wrapper shop">
                            <div class="image-area">
                                <a href="#" class="thumbnail">
                                    <img src="{{ asset('/assets/images/products/Synthetic-Ropes.jpg') }}" alt="Synthetic-Ropes">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">SYNTHETIC ROPES</h5>
                                </a>
                            </div>
                        </div>
                        <!-- single blog two end -->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                        <!-- single blog two -->
                        <div class="blog-single-two-wrapper shop">
                            <div class="image-area">
                                <a href="#" class="thumbnail">
                                    <img src="{{ asset('/assets/images/products/Marine-Products.png') }}" alt="Marine-Products">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">MARINE PRODUCTS</h5>
                                </a>
                            </div>
                        </div>
                        <!-- single blog two end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection("content")