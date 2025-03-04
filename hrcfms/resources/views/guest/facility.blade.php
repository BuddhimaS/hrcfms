@extends('layouts.app')
@section('content')

<!-- Image at the top of the page -->
<div class="text-center mb-4">
  <img src="path/to/hotel-facilities-image.jpg" alt="Hotel Facilities" class="img-fluid" style="max-width: 100%; height: auto;">
</div>

<!-- Hotel Facilities Section Begin -->
<section class="facilities-section py-5">
  <div class="container">
    <h2 class="text-center fw-bold mb-4">Our Facilities</h2>
    <div class="row">
      
      <!-- Facility 1: Restaurant -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm">
          <img src="path/to/restaurant-image.jpg" class="card-img-top" alt="Restaurant">
          <div class="card-body">
            <h5 class="card-title">Restaurant</h5>
            <p class="card-text">Our on-site restaurant offers a variety of local and international cuisines, prepared with the finest ingredients. Whether you're in the mood for a traditional Sri Lankan meal or a delicious international dish, our restaurant provides a memorable dining experience for all tastes.</p>
            <ul>
              <li>Breakfast, lunch, and dinner service</li>
              <li>Outdoor dining with ocean views</li>
              <li>Vegetarian and vegan-friendly options</li>
              <li>24/7 room service available</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Facility 2: Swimming Pool -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm">
          <img src="path/to/swimming-pool-image.jpg" class="card-img-top" alt="Swimming Pool">
          <div class="card-body">
            <h5 class="card-title">Swimming Pool</h5>
            <p class="card-text">Our large outdoor swimming pool provides a relaxing oasis, perfect for lounging or taking a refreshing dip. Surrounded by lush greenery and with a beautiful view of the ocean, it's the ideal place to unwind during your stay at Sitara Hotel Weligama.</p>
            <ul>
              <li>Infinity pool with scenic views</li>
              <li>Poolside bar for snacks and drinks</li>
              <li>Heated pool available during cooler months</li>
              <li>Dedicated children’s pool area</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Facility 3: Spa -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm">
          <img src="path/to/spa-image.jpg" class="card-img-top" alt="Spa">
          <div class="card-body">
            <h5 class="card-title">Spa</h5>
            <p class="card-text">Indulge in our luxurious spa treatments, designed to rejuvenate both your mind and body. Our skilled therapists offer a range of services, from traditional Ayurvedic treatments to relaxing massages and facials, ensuring a serene and restorative experience.</p>
            <ul>
              <li>Ayurvedic massage therapy</li>
              <li>Facial treatments and skin care</li>
              <li>Couples’ spa packages</li>
              <li>Relaxation areas with soothing ambiance</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Facility 4: Gym -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm">
          <img src="path/to/gym-image.jpg" class="card-img-top" alt="Gym">
          <div class="card-body">
            <h5 class="card-title">Gym</h5>
            <p class="card-text">Stay active and maintain your fitness routine at our fully equipped gym, featuring modern workout machines, free weights, and cardio equipment. Whether you're looking to do a quick workout or a full training session, our gym has everything you need.</p>
            <ul>
              <li>State-of-the-art fitness equipment</li>
              <li>Personal training available upon request</li>
              <li>Open daily from 6 AM to 10 PM</li>
              <li>Yoga and stretching areas</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Facility 5: Meeting Room -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm">
          <img src="path/to/meeting-room-image.jpg" class="card-img-top" alt="Meeting Room">
          <div class="card-body">
            <h5 class="card-title">Meeting Room</h5>
            <p class="card-text">Our modern and fully-equipped meeting room is perfect for corporate events, business meetings, and conferences. Featuring high-speed internet, audio-visual equipment, and flexible seating arrangements, it provides an ideal environment for productivity and collaboration.</p>
            <ul>
              <li>Boardroom and conference seating options</li>
              <li>Projector and screen setup</li>
              <li>High-speed internet and printing services</li>
              <li>Catering and refreshment services available</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Facility 6: Beach Access -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm">
          <img src="path/to/beach-access-image.jpg" class="card-img-top" alt="Beach Access">
          <div class="card-body">
            <h5 class="card-title">Beach Access</h5>
            <p class="card-text">Sitara Hotel Weligama offers direct access to a beautiful, pristine beach. You can enjoy the sun, sand, and surf just a few steps away from the hotel. Whether you're looking to relax on the beach or try out some water sports, our beach access will provide the perfect setting.</p>
            <ul>
              <li>Private beach area for guests</li>
              <li>Sun loungers and beach umbrellas available</li>
              <li>Water sports activities including surfing and kayaking</li>
              <li>Beachside bar for refreshments</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Hotel Facilities Section End -->

@endsection
