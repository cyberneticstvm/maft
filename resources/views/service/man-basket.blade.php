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
                    <a href="{{ route('service2') }}" class="next">{{ $title }}</a>
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
                    <h3 class="title animated fadeIn">Reliable Man Basket Services in UAE</h3>
                    <p class="disc">Manarat Al Falah Trading LLC (MAFT) provides professional man basket services designed to ensure the safety and efficiency of elevated work operations. Our man baskets (also known as man cages or work platforms) are engineered to carry personnel safely during tasks performed at heights.
                        Whether for maintenance, inspection, construction, or industrial applications, our man baskets meet international safety standards and are compatible with cranes and forklifts.
                    </p>
                    <h4>Key Features of Our Man Basket Services:</h4>
                    <ul>
                        <li>Heavy-duty steel construction for enhanced safety</li>
                        <li>Certified and tested according to international standards</li>
                        <li>Secure harness points for worker protection</li>
                        <li>Available in various sizes and load capacities</li>
                        <li>Suitable for crane or forklift mounting</li>
                        <li>On-site delivery and setup across UAE</li>
                    </ul>
                    <h4>Applications:</h4>
                    <ul>
                        <li>Building and infrastructure maintenance</li>
                        <li>Oil & gas and offshore platforms</li>
                        <li>High-rise inspections and repairs</li>
                        <li>Industrial shutdown and turnaround operations</li>
                        <li>Electrical, mechanical, and HVAC installations</li>
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