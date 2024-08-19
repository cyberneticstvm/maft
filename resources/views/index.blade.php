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
                                    <img src="{{ asset('/assets/images/products/load-arrestors.jpg') }}" alt="Load Arrestors">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Load Arrestors</h5>
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
                                    <img src="{{ asset('/assets/images/products/container-lifting.jpg') }}" alt="Container Lifting">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Container Lifting</h5>
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
                                    <img src="{{ asset('/assets/images/products/magnets.jpg') }}" alt="Magnets">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Magnets</h5>
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
                                    <img src="{{ asset('/assets/images/products/pipe-lifting.jpg') }}" alt="Pipe Lifting">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Pipe Lifting</h5>
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
                                    <img src="{{ asset('/assets/images/products/modular-spreader-beams.jpg') }}" alt="Modular Spreader Beams">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Modular Spreader Beams</h5>
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
                                    <img src="{{ asset('/assets/images/products/load-weighing-equipment.jpg') }}" alt="Load Weighing Equipment">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Load Weighing Equipment</h5>
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
                                    <img src="{{ asset('/assets/images/products/lifting-points-accessories.jpg') }}" alt="Lifting Points Accessories">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Lifting Points Accessories</h5>
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
                                    <img src="{{ asset('/assets/images/products/chainslings-1-single-leg--1-5-to-31-5-tonne.jpg') }}" alt="Chainslings Single Leg Tonne">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Chainslings Single Leg Tonne</h5>
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
                                    <img src="{{ asset('/assets/images/products/chainslings-2-leg-wll-2-1-to-45-tonne.jpg') }}" alt="Chainslings Two Leg Wll Tonne">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Chainslings Two Leg Wll Tonne</h5>
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
                                    <img src="{{ asset('/assets/images/products/chain-slings-4-leg--3-1-to-67-tonne.jpg') }}" alt="Chainslings Four Leg Tonne">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Chainslings Four Leg Tonne</h5>
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
                                    <img src="{{ asset('/assets/images/products/multi-leg-wire-rope-slings.jpg') }}" alt="Multi Leg Wire Rope Slings">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Multi Leg Wire Rope Slings</h5>
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
                                    <img src="{{ asset('/assets/images/products/electric-hoists-three-phase-415v.jpg') }}" alt="Electric Hoists Three Phase 415v">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Electric Hoists Three Phase 415v</h5>
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
                                    <img src="{{ asset('/assets/images/products/plate-clamps.jpg') }}" alt="Plate Clamps">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Plate Clamps</h5>
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
                                    <img src="{{ asset('/assets/images/products/rud-lifting-points.jpg') }}" alt="Rud Lifting Points">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Rud Lifting Points</h5>
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
                                    <img src="{{ asset('/assets/images/products/eye-nuts.jpg') }}" alt="Eye Nuts">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Eye Nuts</h5>
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
                                    <img src="{{ asset('/assets/images/products/green-pin-shackles.jpg') }}" alt="Green Pin Shackles">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Green Pin Shackles</h5>
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
                                    <img src="{{ asset('/assets/images/products/shackles-safety-pin.jpg') }}" alt="Shackles Safety Pin">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Shackles Safety Pin</h5>
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
                                    <img src="{{ asset('/assets/images/products/shackles-screw-pin.jpg') }}" alt="Shackles Screw Pin">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Shackles Screw Pin</h5>
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
                                    <img src="{{ asset('/assets/images/products/lifting-winches.jpg') }}" alt="Lifting Winches">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Lifting Winches</h5>
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
                                    <img src="{{ asset('/assets/images/products/eyebolts.jpg') }}" alt="Eye Bolts">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Eye Bolts</h5>
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
                                    <img src="{{ asset('/assets/images/products/leverhoists.jpg') }}" alt="Lever Hoists">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Lever Hoists</h5>
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
                                    <img src="{{ asset('/assets/images/products/beam-clamp.jpg') }}" alt="Beam Clamp">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Beam Clamp</h5>
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
                                    <img src="{{ asset('/assets/images/products/wire-rope-slings.jpg') }}" alt="Wire Rope Slings">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Wire Rope Slings</h5>
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
                                    <img src="{{ asset('/assets/images/products/beam-trolley.jpg') }}" alt="Beam Trolley">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Beam Trolley</h5>
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
                                    <img src="{{ asset('/assets/images/products/chainblocks.jpg') }}" alt="Chain Blocks">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Chain Blocks</h5>
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
                                    <img src="{{ asset('/assets/images/products/snatch-blocks.jpg') }}" alt="Snatch Blocks">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Snatch Blocks</h5>
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
                                    <img src="{{ asset('/assets/images/products/polyester-round-sling.jpg') }}" alt="Polyester Round Sling">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Polyester Round Sling</h5>
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
                                    <img src="{{ asset('/assets/images/products/polyester-webbing-sling.jpg') }}" alt="Polyester Webbing Sling">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Polyester Webbing Sling</h5>
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
                                    <img src="{{ asset('/assets/images/products/wire-rope-winches.jpg') }}" alt="Wire Rope Winches">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Wire Rope Winches</h5>
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
                                    <img src="{{ asset('/assets/images/products/lg-pallet-truck.jpg') }}" alt="Pallet Truck">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Pallet Truck</h5>
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
                                    <img src="{{ asset('/assets/images/products/life-line-rope.jpg') }}" alt="Life Line Rope">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Life Line Rope</h5>
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
                                    <img src="{{ asset('/assets/images/products/safety-harness.jpg') }}" alt="Safety Harness">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Safety Harness</h5>
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
                                    <img src="{{ asset('/assets/images/products/hydraulic-cylindrical-jack.webp') }}" alt="Hydraulic cylindrical jack">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Hydraulic cylindrical jack</h5>
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
                                    <img src="{{ asset('/assets/images/products/lg-cargo-lashing.jpg') }}" alt="Cargo Lashing">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="#">
                                    <h5 class="title">Cargo Lashing</h5>
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