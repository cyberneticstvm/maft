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
                    <a href="{{ route('product7') }}" class="next">Shackle</a>
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
                    <h3 class="title animated fadeIn">Shackle – Heavy-Duty Load Connector for Safety & Strength</h3>
                    <p class="disc">At Manarat Al Falah Trading LLC (MAFT), we supply premium-quality shackles designed for secure and efficient lifting, rigging, and load-binding applications. Manufactured from high-tensile alloy steel, our shackles ensure maximum strength, corrosion resistance, and long-term reliability even under the most demanding conditions.</p>
                    <p class="italic">
                        “Whether for construction, marine, oil & gas, or industrial use, MAFT shackles provide dependable performance for connecting slings, chains, and lifting gear. Available in various sizes and types, including bow shackles and D shackles, each product complies with international safety standards.”</p>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-12">
                <h3 class="title mb--0 animated fadeIn" data-sal="slide-up" data-sal-delay="150" data-sal-duration="900">Shackles</h3>
                <p>Shackle is a U-shaped metal connector secured with a pin or bolt across the opening. It is a critical component in lifting, rigging, towing, and material handling operations. Shackles are used to connect lifting slings, chains, ropes, or other hardware to loads or equipment.
                </p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 pr--80">
                <h4>Shackle Features</h4>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        <strong>High Load Capacity:</strong> Shackles are engineered to handle extremely heavy loads safely, with each unit marked with a Working Load Limit (WLL).
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        <strong>Robust Construction:</strong> Made from high-tensile steel, alloy steel, or stainless steel, shackles are built for strength and long-term durability.
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        <strong>Corrosion Resistance:</strong> Available in galvanized or stainless finishes to resist rust and corrosion, especially in marine and offshore applications.
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        <strong>Versatile Designs:</strong> Bow Shackles (Anchor Shackles): Suitable for multidirectional loading and D Shackles (Chain Shackles): Best for straight-line loads.
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        <strong>Secure Pin Options:</strong> Screw Pin: Easy to attach/detach and Bolt Type with Nut & Cotter Pin: Offers added security in critical or permanent applications.
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        <strong>Compliance with Standards:</strong> Certified to meet international safety standards (e.g., EN 13889, ASTM A952, BS 3032) ensuring reliability and safety in lifting operations.
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        <strong>Size & Load Range Variety:</strong> Available in a wide range of sizes and load capacities (from small utility shackles to large industrial shackles for heavy-duty applications).
                    </p>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 pr--80">
                <h4>Shackle Applications</h4>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Lifting & Hoisting
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Load Securing
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Towing & Recovery
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Offshore & Onshore Operations
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
                            <img src="{{ asset('/assets/images/products/product/shackle1.png') }}" alt="{{ $title }} | Manarat Al Falah Trading LLC">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('/assets/images/products/product/shackle2.png') }}" alt="{{ $title }} | Manarat Al Falah Trading LLC">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('/assets/images/products/product/shackle3.png') }}" alt="{{ $title }} | Manarat Al Falah Trading LLC">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('/assets/images/products/product/shackle4.png') }}" alt="{{ $title }} | Manarat Al Falah Trading LLC">
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