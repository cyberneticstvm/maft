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
                    <a href="{{ route('services') }}" class="prev">services/</a>
                    <a href="{{ route('service4') }}" class="next">{{ $title }}</a>
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
                    <h3 class="title animated fadeIn">Spreader Beam Services in UAE</h3>
                    <p class="disc">Manarat Al Falah Trading LLC (MAFT) provides certified spreader beam services to ensure safe and efficient lifting of heavy and oversized loads across the UAE. Our spreader beams are designed to distribute load weight evenly, minimize bending stress, and enhance lifting safety during crane operations.
                        Whether used in construction, marine, oil & gas, or industrial lifting, MAFT’s spreader beams comply with international lifting standards and are regularly inspected and tested for maximum reliability.
                    </p>
                    <h4>Key Features of Our Spreader Beam Services:</h4>
                    <ul>
                        <li>Available in various lengths and load capacities</li>
                        <li>Engineered for horizontal load control and stability</li>
                        <li>Complies with ASME and EN lifting standards</li>
                        <li>Suitable for use with slings, chains, and lifting shackles</li>
                        <li>Options for adjustable or fixed spreader beams</li>
                    </ul>
                    <h4>Applications:</h4>
                    <ul>
                        <li>Lifting heavy or wide structural components</li>
                        <li>Container and equipment handling</li>
                        <li>Offshore rig and platform lifting</li>
                        <li>Factory and plant machinery relocation</li>
                        <li>High-risk or precision lifting environments</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-12">
                <h6 class="title mb--0 animated fadeIn" data-sal="slide-up" data-sal-delay="150" data-sal-duration="900">Why Choose MAFT for Your Lifting Equipment in UAE?</h6>
                <div class="single-project-details-challenge mt-5">
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