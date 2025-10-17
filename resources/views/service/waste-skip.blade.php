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
                    <a href="{{ route('service5') }}" class="next">{{ $title }}</a>
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
                    <h3 class="title animated fadeIn">Waste Skip Rental Services in UAE</h3>
                    <p>Manarat Al Falah Trading LLC (MAFT) provides reliable and certified waste skip rental services across the UAE, helping businesses manage construction, industrial, and commercial waste efficiently and safely.
                        Our waste skips are built for heavy-duty use, suitable for various waste types including construction debris, general waste, scrap, and recyclable materials. Whether you need a short-term or long-term rental, MAFT delivers fast, flexible, and compliant waste management solutions.
                    </p>
                    <h4>Key Features of Our Spreader Beam Services:</h4>
                    <ul>
                        <li>Available in multiple sizes: 1m³ to 12m³ and above</li>
                        <li>Heavy-duty steel construction for rough site conditions</li>
                        <li>Designed for forklift and crane handling</li>
                        <li>Drain holes and reinforced corners for durability</li>
                        <li>Compliant with UAE waste handling regulations</li>
                    </ul>
                    <h4>Applications:</h4>
                    <ul>
                        <li>Construction site waste collection</li>
                        <li>Industrial and manufacturing waste</li>
                        <li>Demolition debris and scrap metal</li>
                        <li>Residential and commercial waste removal</li>
                        <li>Marine, offshore, and oil & gas waste handling</li>
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