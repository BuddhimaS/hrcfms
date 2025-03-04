@extends('layouts.app')
@section('content')



<!-- Suite Room Section Begin -->
<section class="aboutus-section spad">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Image Slider -->
                <div id="roomSlider" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ url('public/img/suite1.jpg') }}" class="d-block w-100" alt="Suite Room">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ url('public/img/suite2.jpg') }}" class="d-block w-100" alt="Suite Room 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ url('public/img/suite3.jpg') }}" class="d-block w-100" alt="Suite Room 3">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#roomSlider" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#roomSlider" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
                
                <!-- Description -->
                <div class="mt-4">
                    <h2>Suite Room</h2>
                    <p>The Suite Rooms at Sitara Weligama are designed to offer a luxurious and comfortable stay. These spacious rooms feature large windows that provide breathtaking views of the white sand beach and surrounding nature. The modern decor and high-end amenities, such as air conditioning, free Wi-Fi, a flat-screen television with cable channels, and a private bathroom with a bidet, bathrobes, and free toiletries, ensure a relaxing experience.</p>
                    <p>Additional features include a desk, safety deposit box, ironing facilities, and an electric kettle. Each suite also comes with a balcony or terrace where guests can unwind while enjoying scenic views. The hotel offers amenities like an outdoor pool, private beach area, and an on-site restaurant serving a variety of cuisines.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Suite Room Section End -->

@endsection
