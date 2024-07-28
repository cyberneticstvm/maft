@extends("base")
@section("content")
<!-- rts contact area start -->
<div class="rts-contact-area-m rts-section-gap">
    <div class="container">
        <div class="row g-24">
            <!-- single contact area -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-contact-one-inner">
                    <div class="thumbnail">
                        <img src="{{ asset('/assets/images/contact/01.jpg') }}" alt="">
                    </div>
                    <div class="content">
                        <div class="icone">
                            <img src="{{ asset('/assets/images/contact/shape/01.svg') }}" alt="">
                        </div>
                        <div class="info">
                            <span>Call Us 24/7</span>
                            <a href="tel:+971501003687">
                                <h5>+971 50 100 3687</h5>
                            </a>
                            <a href="tel:+97165791070">
                                <h5>+971 6 579 1070</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single contact area end -->
            <!-- single contact area -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-contact-one-inner">
                    <div class="thumbnail">
                        <img src="{{ asset('/assets/images/contact/02.jpg') }}" alt="">
                    </div>
                    <div class="content">
                        <div class="icone">
                            <img src="{{ asset('/assets/images/contact/shape/02.svg') }}" alt="">
                        </div>
                        <div class="info">
                            <span>Make A Quote</span>
                            <a href="mailto:sales@maft.ae">
                                <h5>sales@maft.ae</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single contact area end -->
            <!-- single contact area -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-contact-one-inner">
                    <div class="thumbnail">
                        <img src="{{ asset('/assets/images/contact/03.jpg') }}" alt="">
                    </div>
                    <div class="content">
                        <div class="icone">
                            <img src="{{ asset('/assets/images/contact/shape/03.svg') }}" alt="">
                        </div>
                        <div class="info">
                            <span>Service Station</span>
                            <a href="#">
                                <h5>Industrial Area 1, Sharjah, UAE</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single contact area end -->
        </div>
    </div>
</div>
<!-- rts contact area end -->


<!-- contact form area strt -->
<div class="rts-contact-page-form-area rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="mian-wrapper-form">
                <div class="title-mid-wrapper-home-two" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                    <span class="pre">Get In Touch</span>
                    <h2 class="title">Needs Help? Let’s Get in Touch</h2>
                </div>
                <div id="form-messages"></div>
                <form action="{{ route('contact.submit') }}" method="POST" class="contact-form-contact">
                    @csrf
                    <div class="name-email">
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Your Name">
                        @error('name')
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                        @enderror
                        <input type="text" name="mobile" value="{{ old('mobile') }}" placeholder="Mobile Number">
                        @error('mobile')
                        <small class="text-danger">{{ $errors->first('mobile') }}</small>
                        @enderror
                    </div>
                    <input type="text" name="subject" value="{{ old('subject') }}" placeholder="Your Subject">
                    @error('subject')
                    <small class="text-danger">{{ $errors->first('subject') }}</small>
                    @enderror
                    <textarea placeholder="Type Your Message" name="message">{{ old('message') }}</textarea>
                    @error('message')
                    <small class="text-danger">{{ $errors->first('message') }}</small>
                    @enderror
                    <div class="col-md-4">
                        <div class="captcha">
                            <span>{!! captcha_img('mini') !!}</span>
                            <button type="button" class="btn btn-success btn-refresh"><i class="fa fa-refresh"></i></button>
                        </div>
                        <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                        @error('captcha')
                        <small class="text-danger">{{ $errors->first('captcha') }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="rts-btn btn-primary btn-submit">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- contact form area end -->
@endsection("content")