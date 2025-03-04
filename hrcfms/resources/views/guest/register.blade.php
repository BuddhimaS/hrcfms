@extends ('layouts.app') 
@section('content')

  <!-- Membership Section Begin -->
  <section class="membership-section py-3 text-center">
    <div class="container">
    <h2 class="fw-bold">Join Sitara</h2>
    <p class="mb-2">To enjoy member benefits, exclusive member rates, and more</p>
    <div class="row justify-content-center">
      <div class="col-md-3">
      <div class="card border-0 text-center">
        <div class="card-body">
        <i class="bi bi-award fs-1 text-warning"></i>
        <h5 class="mt-3">Member Exclusive Offers</h5>
        <img src="{{url('public/img/offer.jpg')}}" alt="" class="img-fluid"
          style="max-width: 60px; height: auto; margin-top: 10%">
        </div>
      </div>
      </div>
      <div class="col-md-3">
      <div class="card border-0 text-center">
        <div class="card-body">
        <i class="bi bi-emoji-smile fs-1 text-warning"></i>
        <h5 class="mt-3">Children Eat Free</h5>
        <img src="{{url('public/img/baby.jpg')}}" alt="" class="img-fluid"
          style="max-width: 60px; height: auto; margin-top: 10%">
        </div>
      </div>
      </div>
    </div>
    <!-- Divider Line -->
    <hr class="my-4" style="box-shadow:10px 10px 2px #ebc934;">
    </div>


  </section>
  <!-- Membership Section End -->



  <!-- About Us Section Begin -->
  <section class="aboutus-section spad" style="padding-top: 20px !important;">
    <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <form method="post" action="{{route('guest.store')}}" class="row g-3" novalidate>
        @csrf

        <div class="col-md-6">
        <label for="Fname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="Fname" name="Fname" placeholder="First Name">
        @error('Fname')
      <span class="text-danger">{{$message}}</span>
    @enderror
        </div>

        <div class="col-md-6">
        <label for="Lname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="Lname" name="Lname" placeholder="Last Name">
        @error('Lname')
      <span class="text-danger">{{$message}}</span>
    @enderror
        </div>

        <div class="col-md-6">
        <label for="DOB" class="form-label">Date of Birth</label>
        <input type="date" class="form-control" id="DOB" name="DOB">
        </div>

        <div class="col-md-6">
        <label for="Email" class="form-label">Email</label>
        <input type="email" class="form-control" id="Email" name="Email" placeholder="Email">
        @error('Email')
      <span class="text-danger">{{$message}}</span>
    @enderror
        </div>

        <div class="col-md-6">
        <label for="Mobile" class="form-label">Mobile Number</label>
        <input type="text" class="form-control" id="Mobile" name="Mobile" placeholder="Mobile Number">
        @error('Mobile')
      <span class="text-danger">{{$message}}</span>
    @enderror
        </div>

        <div class="col-md-6">
        <label for="CountryID" class="form-label d-block">Country</label>
        <select class="form-select" aria-label="Country" name="CountryID">
          <option selected>Choose Country</option>
          <option value="1">USA</option>
          <option value="2">Canada</option>
          <option value="3">India</option>
          <!-- Add more options as needed -->
        </select>
        </div>

        <div class="col-md-6">
        <label for="City" class="form-label">City</label>
        <input type="text" class="form-control" id="City" name="City" placeholder="City">
        </div>

        <div class="col-md-6">
        <label for="Password" class="form-label">Password</label>
        <input type="password" class="form-control" id="Password" name="Password" placeholder="Password">
        @error('Password')
      <span class="text-danger">{{$message}}</span>
    @enderror
        </div>

        <!-- Terms and Conditions Section -->
        <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
          <label class="form-check-label" for="terms">
          I have read and agree to the
          <a href="{{ route('guest.term') }}" target="_blank" style="color: #dfa974;">
            <strong>Terms and Conditions & the Privacy policy</strong>
          </a>


          </label>
        </div>
        @error('terms')
      <span class="text-danger">{{$message}}</span>
    @enderror
        </div>

        <div class="col-12 d-flex justify-content-center mt-4">
        <button type="submit" class="btn btn-primary"
          style="background-color:#dfa974; border-color: #dfa974;">Register</button>
        </div>

      </div>
    </div>
    </div>
  </section>
  <!-- About Us Section End -->

@endsection