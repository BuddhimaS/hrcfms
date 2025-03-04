@extends('layouts.app')
@section('content')

<!-- Promotion Banner Section Begin -->
<section class="promotion-banner text-center py-5">
  <div class="container">
    <h2 class="fw-bold text-success">Sitara Family Loyalty Offer</h2>
    <p class="lead">Enjoy 5% off on all bookings for Sitara Family members!</p>
    <p class="fs-5">Valid Until: Ongoing</p>
  </div>
</section>
<!-- Promotion Banner Section End -->

<!-- Offer Details Section Begin -->
<section class="offer-details py-5">
  <div class="container">
    <h3 class="fw-bold text-center">Offer Details</h3>
    <ul class="list-group">
      <li class="list-group-item"><strong>Offer:</strong> 5% off on all bookings for Sitara Family members</li>
      <li class="list-group-item"><strong>Valid Until:</strong> Ongoing</li>
      <li class="list-group-item"><strong>Terms & Conditions:</strong></li>
      <ul>
        <li>Must be a registered guest with Sitara Weligama.</li>
        <li>Valid for direct bookings through the official website or app.</li>
        <li>The discount applies to room rates, packages, and services.</li>
        <li>Cannot be combined with other offers.</li>
        <li>Proof of registration (email or membership ID) required during booking or check-in.</li>
      </ul>
    </ul>
  </div>
</section>
<!-- Offer Details Section End -->

<!-- Bonus for Joining Section Begin -->
<section class="bonus-offer bg-light py-5">
  <div class="container">
    <h3 class="fw-bold text-center">Bonus for Joining</h3>
    <p class="text-center lead">Sign up today and get an additional 5% off your first stay!</p>
    <div class="text-center">
      <a href="/register" class="btn btn-primary">Join Sitara Family</a>
    </div>
  </div>
</section>
<!-- Bonus for Joining Section End -->

<!-- Join Now Highlighted Section Begin -->
<section class="join-now-highlight py-5 bg-warning text-center">
  <div class="container">
    <h3 class="fw-bold text-dark">To join with the Sitara Family, please click on</h3>
    <h2 class="fw-bold text-danger">Join Now</h2>
    <p class="lead text-dark">Become a part of our exclusive Sitara Family and enjoy amazing offers and benefits!</p>
    <a href="/register" class="btn btn-dark">Join Now</a>
  </div>
</section>
<!-- Join Now Highlighted Section End -->

@endsection
