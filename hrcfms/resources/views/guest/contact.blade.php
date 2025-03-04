@extends('layouts.app')
@section('content')

  <!-- Image at the top of the page -->
  <div class="text-center mb-4">
    <img src="{{ url('public/img/contact.jpg') }}" alt="Sitara" style="width: 100%; max-width: 650px; height: auto;">
  </div>

  <!-- Contact Us Section Begin -->
  <section class="contact-section py-5">
    <div class="container">
    <h2 class="text-center fw-bold mb-4">Contact Us</h2>
    <div class="row">

      <!-- Contact Details -->
      <div class="col-md-6">
      <h5 class="fw-bold">Get in Touch</h5>
      <p><i class="bi bi-geo-alt-fill text-primary"></i> 268/5 Modarawatta, Pelena, Weligama, Sri Lanka</p>
      <p><i class="bi bi-telephone-fill text-primary"></i> +94 71 234 5678</p>
      <p><i class="bi bi-envelope-fill text-primary"></i> info@sitarahotel.com</p>
      <h5 class="fw-bold mt-4">Follow Us</h5>
      <a href="#" class="text-primary me-3"><i class="bi bi-facebook fs-4"></i></a>
      <a href="#" class="text-primary me-3"><i class="bi bi-instagram fs-4"></i></a>
      <a href="#" class="text-primary"><i class="bi bi-twitter fs-4"></i></a>
      </div>

      <!-- Contact Form -->
      <div class="col-md-6">
      <form method="POST" action="{{ route('contact.store_contact') }}" class="row g-3">
        @csrf
        <div class="col-12">
        <label for="name" class="form-label">Your Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
        </div>
        <div class="col-12">
        <label for="mobile" class="form-label">Mobile Number</label>
        <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter your mobile number">
        </div>
        <div class="col-12">
        <label for="email" class="form-label">Your Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
        </div>
        <div class="col-12">
        <label for="subject" class="form-label">Subject</label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject">
        </div>
        <div class="col-12">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="4"
          placeholder="Enter your message"></textarea>
        </div>
        <div class="col-12 text-center mt-3">
        <button type="submit" class="btn btn-primary" style="background-color:#dfa974; border-color: #dfa974;">Send
          Message</button>
        </div>
      </form>
      </div>
    </div>

    <!-- Google Map -->
    <div class="row mt-5">
      <div class="col-12">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.282080841378!2d80.4182!3d5.9755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173a08c1768e9%3A0x5dfbdf9c8e5165f!2sSitara%20Weligama%20Hotel!5e0!3m2!1sen!2slk!4v1710000000000"
        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>

    </div>
  </section>
  <!-- Contact Us Section End -->

@endsection