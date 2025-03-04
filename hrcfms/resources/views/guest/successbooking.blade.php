@extends ('layouts.app')
@section('content')

<!-- Booking Success Section Begin -->
<section class="booking-success-section spad">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">
                    <img src="{{ url('public/img/successicon.png') }}" class="card-img-top" alt="Success Icon">
                    <div class="card-body">
                        <h5 class="card-title">Booking Successful</h5>
                        <p class="card-text">Your booking has been successfully completed. Thank you for  joing with the sithara family!</p>
                        <a href="{{ url('/') }} " class="btn btn-primary">Go to Sitara Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Booking Success Section End -->

@endsection