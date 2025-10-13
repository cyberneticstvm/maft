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
                    <a href="{{ route('product3') }}" class="next">Lever Hoists</a>
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
                    <h3 class="title animated fadeIn">Lever Hoist – Reliable Manual Lifting Solution by MAFT</h3>
                    <p class="disc">Manarat Al Falah Trading LLC (MAFT) brings you a premium-quality Lever Hoist, engineered for durability, precision, and ease of use. Ideal for lifting, pulling, and positioning heavy loads, this manual chain hoist ensures maximum efficiency and safety in demanding industrial environments.</p>
                    <p class="italic">
                        “Whether you’re handling construction materials, machinery, or warehouse loads, MAFT lever hoists ensure efficiency, reliability, and peace of mind.”</p>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-12">
                <h3 class="title mb--0 animated fadeIn" data-sal="slide-up" data-sal-delay="150" data-sal-duration="900">Lever Hoists</h3>
                <p>Lever Hoist (also called a Ratchet Lever Hoist or Come-Along) is a manual lifting and pulling device widely used in industrial safety and material handling applications. It’s designed to lift, lower, or pull heavy loads safely and precisely using a hand lever and internal ratchet mechanism — without the need for electricity or hydraulics.</p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 pr--80">
                <h4>Lever Hoists Features</h4>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        <strong>Robust Construction:</strong> Made from high-tensile alloy steel for superior strength and long service life.
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        <strong>Smooth Operation:</strong> Precision gearing and ergonomic lever handle for effortless load control.
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        <strong>Compact Design:</strong> Lightweight and portable, ideal for confined spaces and field work.
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        <strong>Safety Assured:</strong> Equipped with mechanical load brakes for secure load handling.
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        <strong>Capacity Range:</strong> Available from 0.5T to 9T models to meet various lifting requirements.
                    </p>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 pr--80">
                <h4>Lever Hoist Applications</h4>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Perfect for construction sites, workshops, warehouses, and heavy equipment maintenance operations.
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
                            <img src="{{ asset('/assets/images/products/product/lever-hoist1.png') }}" alt="{{ $title }} | Manarat Al Falah Trading LLC">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('/assets/images/products/product/lever-hoist2.png') }}" alt="{{ $title }} | Manarat Al Falah Trading LLC">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('/assets/images/products/product/lever-hoist3.jpg') }}" alt="{{ $title }} | Manarat Al Falah Trading LLC">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('/assets/images/products/product/lever-hoist4.jpg') }}" alt="{{ $title }} | Manarat Al Falah Trading LLC">
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