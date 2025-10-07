@extends("base")
@section("content")
<div class="rts-404-area ptb--200 ptb_md--100 ptb_sm--80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wrapper-404 text-center">
                    <div class="thumbnail">
                        <img src="assets/images/contact/04.png" alt="">
                    </div>
                    <h2 class="title mt--40">
                        Oops! Nothing Was Found
                    </h2>
                    <p class="disc">Sorry, we couldn’t find the page you where looking for. We suggest <br> that you
                        return to homepage.</p>
                    <a class="rts-btn btn-primary" href="{{ route('index') }}">Back To Homepage</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection