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
                    <a href="{{ route('product13') }}" class="next">Lifting Gear</a>
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
                    <h3 class="title animated fadeIn">Lifting Gear – Certified Equipment for Safe & Efficient Lifting</h3>
                    <p class="disc">At Manarat Al Falah Trading LLC (MAFT), we provide a comprehensive range of lifting gear designed to meet the demanding requirements of construction, industrial, marine, logistics, and oil & gas sectors across the UAE.</p>
                    <p>Our lifting gear includes wire rope slings, chain slings, polyester webbing slings, bow shackles, D shackles, lifting clamps, eye bolts, swivel hooks, and more — all sourced from trusted manufacturers and tested to meet international and UAE safety standards.</p>
                    <p>Whether you are lifting heavy machinery, transporting construction materials, or securing cargo, our products offer durability, load stability, and operator safety.</p>
                    <p class="italic">
                        With MAFT, you get more than just products—you get expert advice, custom lifting solutions, and prompt delivery across the UAE.
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-12">
                <h3 class="title mb--0 animated fadeIn" data-sal="slide-up" data-sal-delay="150" data-sal-duration="900">Lifting Gear</h3>
                <p>Lifting gear refers to a wide category of tools and equipment used to lift, lower, secure, or move heavy loads safely and efficiently. These items are essential in various industries for manual and mechanical lifting operations, often used in combination with cranes, hoists, or lifting machines.</p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 pr--80">
                <h4>Lifting Gear Features</h4>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        <strong>High Load Capacity: </strong>Designed to safely handle loads ranging from a few hundred kilograms to several tonnes.
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        <strong>Durable Construction: </strong>Made from heavy-duty steel, alloy, or synthetic materials to ensure strength and longevity.
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        <strong>Certified for Safety: </strong>Products are tested and certified for use in industrial environments, meeting global safety standards.
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        <strong>Versatile Configurations: </strong>Available in various sizes, shapes, and designs for lifting, rigging, and securing different types of loads.
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        <strong>Corrosion Resistance: </strong>Many items are coated or treated for use in harsh environments, including marine and offshore industries.
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        <strong>Easy Integration: </strong>Compatible with cranes, hoists, winches, and other lifting machinery.
                    </p>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 pr--80">
                <h4>Lifting Gear Applications</h4>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Construction & Infrastructure
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Manufacturing & Fabrication
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Oil & Gas / Petrochemical
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Shipping & Marine
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Warehousing & Logistics
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Mining & Heavy Industry
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
                            <img src="{{ asset('/assets/images/products/product/') }}" alt="{{ $title }} | Manarat Al Falah Trading LLC">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('/assets/images/products/product/') }}" alt="{{ $title }} | Manarat Al Falah Trading LLC">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('/assets/images/products/product/') }}" alt="{{ $title }} | Manarat Al Falah Trading LLC">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('/assets/images/products/product/') }}" alt="{{ $title }} | Manarat Al Falah Trading LLC">
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