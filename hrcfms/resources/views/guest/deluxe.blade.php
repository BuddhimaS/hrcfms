@extends('layouts.app')

@section('content')

<!-- Deluxe Room Section Begin -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<section class="aboutus-section spad py-5">
<div id="roomSlider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner rounded">
        <div class="carousel-item active" data-bs-interval="2000">
            <img src="{{ url('public/img/deluxe1.jpg') }}" class="d-block w-100 rounded" alt="Deluxe Room">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="{{ url('public/img/deluxe2.jpg') }}" class="d-block w-100 rounded" alt="Deluxe Room 2">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#roomSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#roomSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

                
                <!-- Description -->
                <div class="mt-4 text-center">
                    <h2 class="mb-3">Deluxe Room</h2>
                    <p class="text-muted">The Deluxe Room at Sitara Hotel offers a perfect combination of luxury, comfort, and modern amenities, ensuring a relaxing stay for both leisure and business travelers.</p>
                    <p>Elegantly furnished, the room features a spacious layout with either a king-size or twin beds, complemented by premium linens for a restful experience.</p>
                    <p>Guests can enjoy a private balcony with scenic views, providing a serene atmosphere to unwind. The en-suite bathroom is equipped with a rain shower and complimentary toiletries, offering a spa-like experience.</p>
                    <p>Modern conveniences such as high-speed Wi-Fi, a flat-screen Smart TV, a mini-bar, and coffee and tea-making facilities ensure an enjoyable stay. An in-room safe is also provided for added security.</p>
                    <p>Daily housekeeping and laundry services maintain a clean and comfortable environment. Guests can start their day with a complimentary breakfast and enjoy access to the swimming pool and fitness center.</p>
                    <p>For added convenience, 24-hour room service is available, and special discounts on spa treatments enhance the overall experience.</p>
                    <p class="fw-bold">Whether visiting for business or leisure, the Deluxe Room at Sitara Hotel provides a refined and comfortable stay with exceptional hospitality.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Deluxe Room Section End -->

@endsection
