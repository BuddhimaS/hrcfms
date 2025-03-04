@extends('layouts.app')
@section('content')


  <!-- Image at the top of the page -->
  <div class="text-center mb-4">
    <img src="{{ url('public/img/gallery2.jpg') }}" alt="Sitara" style="width: 100%; max-width: 650px; height: auto;">
  </div>



<!-- About Us Section Begin -->
<section class="about-us-section py-5 text-center">
  <div class="container">
    <h2 class="fw-bold">Gallery</h2>
    <p class="lead">Sitara Hotel Weligama is a premier beachfront destination in Sri Lanka, offering an unparalleled blend of luxury, comfort, and authentic Sri Lankan hospitality.</p>
    <p>Established with a vision to redefine the hospitality experience, Sitara Hotel provides a serene escape along the stunning coastline of Weligama, a renowned surfing and tourist hub.</p>
  </div>
</section>
<!-- About Us Section End -->

<!-- Gallery Section Begin -->
<section class="gallery-section py-5 text-center">
  <div class="container">
    <h2 class="fw-bold">Gallery</h2>
    <p class="lead">Explore the beauty and ambiance of Sitara Hotel through our curated gallery.</p>
    
    <!-- Collapse Button for Gallery -->
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#galleryImages" aria-expanded="false" aria-controls="galleryImages">
      <i class="bi bi-arrow-down-circle"></i> View Gallery
    </button>
    
    <!-- Gallery Images Collapse -->
    <div class="collapse mt-4" id="galleryImages">
      <div class="row g-4">
        <!-- Room Images -->
        <div class="col-md-4">
          <div class="card">
            <img src="/images/room1.jpg" class="card-img-top gallery-img" alt="Room 1">
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="/images/room2.jpg" class="card-img-top gallery-img" alt="Room 2">
          </div>
        </div>
        <!-- Hotel Facilities Images -->
        <div class="col-md-4">
          <div class="card">
            <img src="/images/pool.jpg" class="card-img-top gallery-img" alt="Pool">
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="/images/spa.jpg" class="card-img-top gallery-img" alt="Spa">
          </div>
        </div>
        <!-- Local Attractions Images -->
        <div class="col-md-4">
          <div class="card">
            <img src="/images/beach.jpg" class="card-img-top gallery-img" alt="Beach">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Gallery Section End -->

<!-- Modal for Image Popup -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="" id="modalImage" class="img-fluid" alt="Large View">
      </div>
    </div>
  </div>
</div>

<!-- Sitara Hospitality Section Begin -->
<section class="sitara-hospitality-section py-5 bg-light text-center">
  <div class="container">
    <h3 class="fw-bold">Sitara Hospitality</h3>
    <p>We operate with a commitment to excellence, ensuring every guest enjoys world-class service, modern amenities, and a tranquil atmosphere. Designed for both leisure and business travelers, our hotel reflects a perfect harmony of contemporary elegance and Sri Lanka's rich cultural heritage.</p>
  </div>
</section>
<!-- Sitara Hospitality Section End -->

<!-- Unmatched Experiences Section Begin -->
<section class="unmatched-experiences-section py-5 text-center">
  <div class="container">
    <h3 class="fw-bold">Unmatched Experiences</h3>
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <h5>Scenic Beachfront Location</h5>
        <p>Wake up to breathtaking ocean views.</p>
      </div>
      <div class="col-md-6 col-lg-4">
        <h5>Luxury Accommodations</h5>
        <p>Stylishly designed rooms with modern conveniences.</p>
      </div>
      <div class="col-md-6 col-lg-4">
        <h5>Culinary Excellence</h5>
        <p>A fusion of local and international flavors at our signature restaurant.</p>
      </div>
      <div class="col-md-6 col-lg-4">
        <h5>Recreational Activities</h5>
        <p>Surfing, whale watching, and cultural excursions for an unforgettable stay.</p>
      </div>
      <div class="col-md-6 col-lg-4">
        <h5>Personalized Hospitality</h5>
        <p>A dedicated team ensuring a seamless guest experience.</p>
      </div>
    </div>
  </div>
</section>
<!-- Unmatched Experiences Section End -->

<!-- Our Commitment Section Begin -->
<section class="our-commitment-section py-5 bg-light text-center">
  <div class="container">
    <h3 class="fw-bold">Our Commitment</h3>
    <p>At Sitara Hotel Weligama, we are devoted to creating memorable stays through exceptional service, sustainable tourism practices, and a deep respect for Sri Lankan traditions. Our goal is to provide an escape where guests can experience the true beauty of Weligama while enjoying world-class comfort.</p>
  </div>
</section>
<!-- Our Commitment Section End -->

<!-- Awards Section Begin -->
<section class="awards-section py-5 text-center">
  <div class="container">
    <h3 class="fw-bold">Awards</h3>
    <p>We take pride in maintaining the highest standards of service and hospitality, earning us recognition among the finest beachfront hotels in Sri Lanka.</p>
  </div>
</section>
<!-- Awards Section End -->

<!-- Careers Section Begin -->
<section class="careers-section py-5 bg-light text-center">
  <div class="container">
    <h3 class="fw-bold">Careers</h3>
    <p>Looking for a career in hospitality? Join our team and become part of a world-class hotel experience, dedicated to providing unforgettable moments for guests.</p>
  </div>
</section>
<!-- Careers Section End -->

<!-- Our Management Section Begin -->
<section class="our-management-section py-5 text-center">
  <div class="container">
    <h3 class="fw-bold">Our Management</h3>
    <p>Sitara Hotel Weligama is backed by a team of experienced hospitality professionals committed to delivering excellence in service and guest satisfaction.</p>
  </div>
</section>
<!-- Our Management Section End -->

@endsection

@push('scripts')
<!-- Bootstrap 5 JS for modal and collapse functionality -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<script>
  // Open modal with the clicked image
  document.querySelectorAll('.gallery-img').forEach(item => {
    item.addEventListener('click', function() {
      const imageSrc = this.src;
      document.getElementById('modalImage').src = imageSrc;
      const imageModal = new bootstrap.Modal(document.getElementById('imageModal'));
      imageModal.show();
    });
  });
</script>
@endpush
