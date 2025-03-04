@extends ('layouts.app')
@section('content')

    <!-- About Us Section Begin -->
    <section class="aboutus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <span>Join with Sitara family</span>
                            <h2>Unlock member benefits, special rates</h2>
                        </div>
                        <p class="f-para">As a member, you can unlock a range of exclusive benefits that are tailored just for you. From special rates to personalized offers,
                             we make sure you receive the best value every time you engage with us.</p>
                        <p class="s-para">In addition to discounts, you'll gain access to unique perks and early access to promotions.
                             Enjoy all the advantages that come with being part of our exclusive membership today!</p>
                        <a href="{{route('guest.register')}}" class="primary-btn about-btn">Register as a guest</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-pic">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="{{url('public/img/about/happy.jpg')}}" alt="">
                                <img src="{{url('public/img/about/new1.jpg')}}" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img src="{{url('public/img/about/happyfammily.jpg')}}" alt="">
                                <img src="{{url('public/img/about/happy3.jpg')}}" alt="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->
@endsection