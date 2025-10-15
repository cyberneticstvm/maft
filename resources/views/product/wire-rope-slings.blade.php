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
                    <a href="{{ route('product15') }}" class="next">Wire Rope Slings</a>
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
                    <h3 class="title animated fadeIn">Wire Rope Slings – Strong & Flexible Lifting Solutions</h3>
                    <p class="disc">At Manarat Al Falah Trading LLC (MAFT), we provide premium wire rope slings designed to handle heavy lifting tasks with safety and reliability. Manufactured from high-grade steel wire ropes, these slings offer exceptional strength, flexibility, and resistance to abrasion and environmental factors.</p>
                    <p>Wire rope slings are widely used across various industries in the UAE, including construction, manufacturing, shipping, oil & gas, and logistics. They are suitable for lifting loads with irregular shapes or heavy-duty requirements where durability and safety are paramount.</p>
                    <p class="italic">
                        Choose MAFT’s wire rope slings for your lifting needs and benefit from durable, safe, and cost-effective solutions that comply with UAE industry standards.
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-12">
                <h3 class="title mb--0 animated fadeIn" data-sal="slide-up" data-sal-delay="150" data-sal-duration="900">Wire Rope Slings</h3>
                <p>Wire Rope Sling is a lifting device made from strands of steel wire twisted together to form a strong, flexible rope used for hoisting, rigging, and load securing. It is designed to safely lift heavy and irregularly shaped loads by distributing the weight evenly across the sling.</p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 pr--80">
                <h4>Wire Rope Slings Features</h4>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Made from high-strength steel wire ropes
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Available in single-leg, multi-leg (2, 3, or 4 legs) configurations
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Resistant to abrasion, corrosion, and heat
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Flexible and adaptable to different load shapes
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Compliant with international safety standards (EN, ASTM, ISO)
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Custom lengths and fittings available
                    </p>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 pr--80">
                <h4>Wire Rope Slings Applications</h4>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Lifting steel plates, pipes, and structural components
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Hoisting heavy machinery and equipment
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Rigging in shipyards and offshore platforms
                    </p>
                </div>
                <div class="single-project-details-challenge">
                    <div class="icon">
                        <i class="far fa-check-circle"></i>
                    </div>
                    <p class="details">
                        Loading and unloading cargo in warehouses and ports
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