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
                    <a href="{{ route('service3') }}" class="next">{{ $title }}</a>
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
                    <h3 class="title animated fadeIn">Material Basket Services in UAE</h3>
                    <p class="disc">Manarat Al Falah Trading LLC (MAFT) offers robust and certified material basket services across the UAE, supporting safe and efficient transportation of tools, equipment, and construction materials to elevated or hard-to-reach areas.
                        Our material baskets, also known as lifting baskets or cargo baskets, are built with heavy-duty steel, fully certified for crane or forklift lifting, and designed to handle rough site conditions. These are ideal for use in construction, oil & gas, marine, and industrial sectors.
                    </p>
                    <h4>Key Features of Our Material Basket Services:</h4>
                    <ul>
                        <li>Rugged steel construction with mesh or solid sides</li>
                        <li>Available in various sizes and load capacities</li>
                        <li>Certified for lifting by crane or forklift</li>
                        <li>Lifting lugs and tie-down points for secure transport</li>
                        <li>Custom basket solutions available upon request</li>
                    </ul>
                    <h4>Applications:</h4>
                    <ul>
                        <li>Lifting and transporting tools, machinery & construction materials</li>
                        <li>Offshore and onshore oil & gas operations</li>
                        <li>High-rise and infrastructure projects</li>
                        <li>Industrial maintenance and shutdown activities</li>
                        <li>Marine logistics and dockside handling</li>
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