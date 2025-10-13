@extends("base")
@section("content")
<div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb1 bg_image">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- bread crumb inner wrapper -->
                <div class="breadcrumb-inner text-center breadcrumb-inner-bg">
                    <h1 class="text-white">{{ $title }}</h1>
                </div>
                <div class="meta text-end">
                    <a href="{{ route('index') }}" class="prev">Home/</a>
                    <a href="{{ route('products') }}" class="prev">products/</a>
                    <a href="{{ route('product4') }}" class="next">Beam and Geared Trolley</a>
                </div>
                <!-- bread crumb inner wrapper end -->
            </div>
        </div>
    </div>
</div>
<div class="rts-project-details-area pb--100 pt--25">
    <div class="container">
        <div class="row mt--70 mb--50">
            <div class="col-12">
                <div class="product-details-main-inner" data-sal="slide-up" data-sal-delay="150" data-sal-duration="900">
                    <span>Manarat Al Falah Trading LLC (MAFT)</span>
                    <h3 class="title animated fadeIn">Beam and Geared Trolley – Smooth and Safe Load Handling by MAFT</h3>
                    <p class="disc">Manarat Al Falah Trading LLC (MAFT) provides robust and reliable Beam and Geared Trolleys, engineered for smooth load movement along I-beams and overhead tracks. These trolleys are essential for safe and efficient lifting operations in industrial, construction, and warehouse settings.</p>
                    <p class="italic">
                        “As one of the leading safety equipment suppliers in UAE, MAFT ensures top-quality lifting and rigging tools that meet international safety standards. Our beam and geared trolleys deliver performance, durability, and safety in every lift.”</p>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-12">
                <h3 class="title mb--0 animated fadeIn" data-sal="slide-up" data-sal-delay="150" data-sal-duration="900">Beam and Geared Trolley</h3>
                <p>Beam and Geared Trolley is a lifting and load-handling device used in industrial safety equipment systems to move heavy loads safely and smoothly along a beam or overhead track. It’s an essential part of material handling and lifting operations, ensuring safe, controlled, and efficient movement of suspended loads such as machinery, tools, or construction materials.</p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 pr--80">
                <h4>Beam and Geared Trolley Features</h4>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        <strong>Heavy-Duty Design:</strong> Made from premium-grade steel to handle demanding load conditions.
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        <strong>Smooth Mobility:</strong> Equipped with precision ball bearings for effortless movement.
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        <strong>Adjustable Width:</strong> Fits various beam sizes for flexible installation.
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        <strong>Safety & Stability:</strong> Designed for secure load transfer with anti-drop protection.
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        <strong>Options Available:</strong> Choose between Push Beam Trolley and Geared Trolley depending on your operation needs.
                    </p>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 pr--80">
                <h4>Beam and Geared Trolley Applications</h4>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Ideal for use with chain blocks, hoists, and lifting slings in workshops, factories, shipyards, and warehouses—ensuring safe, controlled, and efficient material handling.
                    </p>
                </div>
            </div>
        </div>
        <h5 class="mt-5">Gallery</h5>
        <div class="rts-project-details-thumbnail">
            <div class="container">
                <div class="row g-24">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('/assets/images/products/product/beam-and-geared-trolley1.jpg') }}" alt="{{ $title }} | Manarat Al Falah Trading LLC">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('/assets/images/products/product/beam-and-geared-trolley2.jpg') }}" alt="{{ $title }} | Manarat Al Falah Trading LLC">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('/assets/images/products/product/beam-and-geared-trolley3.jpg') }}" alt="{{ $title }} | Manarat Al Falah Trading LLC">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('/assets/images/products/product/beam-and-geared-trolley4.jpg') }}" alt="{{ $title }} | Manarat Al Falah Trading LLC">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5 mt-5">
            <div class="col-12">
                <h6 class="title mb--0 animated fadeIn" data-sal="slide-up" data-sal-delay="150" data-sal-duration="900">Why Choose MAFT for Your Lifting Equipment in UAE?</h6>
                <div class="single-project-details-challenge mt-3">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Certified and high-quality products
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Expert advice and technical support
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Competitive pricing and bulk availability
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Fast delivery across Dubai, Abu Dhabi, Sharjah, and the entire UAE
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Customized lifting solutions for various industries
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-5 mt-5">
            <div class="col-12">
                <a href="{{ route('contact') }}" class="rts-btn btn-primary btn-submit">Get a Quote</a>
            </div>
        </div>
    </div>
</div>
@endsection("content")