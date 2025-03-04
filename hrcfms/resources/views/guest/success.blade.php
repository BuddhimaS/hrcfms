@extends ('layouts.app')
@section('content')

<!-- About Us Section Begin -->
<section class="aboutus-section spad">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">
                    <img src="{{url('public/img/successicon.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Registration Success</h5>
                        <p class="card-text">Registration successfull! you can log in</p>
                        <a href="{{route('login')}}" class="btn btn-primary">Login</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- About Us Section End -->
@endsection