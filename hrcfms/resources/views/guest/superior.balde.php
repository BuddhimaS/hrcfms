@extends('layouts.app')

@section('content')

<!-- Navigation Link -->
<a href="">Superior Room</a>

<!-- Superior Room Section Begin -->
<section class="aboutus-section spad">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Image Slider -->
                <div id="roomSlider" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ url('public/img/superior1.jpg') }}" class="d-block w-100" alt="Superior Room 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ url('public/img/superior2.jpg') }}" class="d-block w-100" alt="Superior Room 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ url('public/img/superior3.jpg') }}" class="d-block w-100" alt="Superior Room 3">
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
                    <h2>Superior Room</h2>
                    <p>The Superior Room at Sitara Weligama Hotel is designed to offer guests a blend of comfort and elegance. The room is spacious and well-appointed, featuring a plush king-size bed, stylish furniture, and contemporary decor. Guests can unwind with modern amenities, including a flat-screen TV, a mini-fridge, and high-speed internet access. The room also comes with a private bathroom equipped with high-quality fixtures, ensuring a relaxing experience. The thoughtful touches and serene atmosphere make it a perfect choice for both business and leisure travelers.</p>
                    <p>In addition to the luxurious interior, the Superior Room boasts large windows that offer breathtaking views of the surrounding area, allowing guests to immerse themselves in the natural beauty of Weligama. Whether you're looking to relax after a day of exploring or need a quiet space to work, this room provides the ideal setting. The room's blend of functionality and style makes it an excellent choice for those seeking a memorable and comfortable stay at Sitara Weligama Hotel.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Superior Room Section End -->

@endsection
