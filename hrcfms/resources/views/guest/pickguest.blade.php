@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form action="{{ route('pickguest.store_pickguest') }}" method="POST">
                    @csrf
                    <!-- Progress Bar -->
                    <div class="stepper-wrapper">
                        <div class="stepper-item completed">
                            <div class="step-counter">1</div>
                            <div class="step-name">Pick a Room</div>
                        </div>
                        <div class="stepper-item active">
                            <div class="step-counter">2</div>
                            <div class="step-name">Guest Details</div>
                        </div>
                        <div class="stepper-item">
                            <div class="step-counter">3</div>
                            <div class="step-name">Make It Your Own</div>
                        </div>
                        <div class="stepper-item">
                            <div class="step-counter">4</div>
                            <div class="step-name">Payment Confirmation</div>
                        </div>
                    </div>

                    <!-- Guest Details Section -->
                    <section class="aboutus-section">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="title" class="form-label d-block">Title</label>
                                <select id="title" name="title" class="form-select" required>
                                    <option selected>Choose...</option>
                                    <option>Mr.</option>
                                    <option>Ms.</option>
                                    <option>Mrs.</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="first_name">
                                @error('firstName')
                                        <span class="text -red-500">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="last_name" required>
                                
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" class="form-control" id="country" name="country" required>
                            </div>
                            <div class="col-md-6">
                                <label for="mobile" class="form-label">Mobile Number</label>
                                <input type="text" class="form-control" id="mobile" name="mobile_number" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="confirmEmail" class="form-label">Confirm Email</label>
                                <input type="email" class="form-control" id="confirmEmail" name="confirm_email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="specialRequest" class="form-label">Special Request</label>
                            <textarea class="form-control" id="specialRequest" name="special_request" rows="3"></textarea>
                        </div>
                    </section>

                    <!-- Arrival Estimate Section -->
                    <section class="aboutus-section">
                        <div class="mb-3">
                            <label for="arrivalTime" class="form-label d-block">Arrival Time</label>
                            <select id="arrivalTime" name="arrival_time" class="form-select" required>
                                <option selected disabled>Choose...</option>
                                <option>Morning</option>
                                <option>Afternoon</option>
                                <option>Evening</option>
                            </select>
                        </div>
                        <p class="text-muted mt-3">
                            To make your stay even more convenient, let us know your expected arrival time! This allows us
                            to prepare for your arrival.
                        </p>
                    </section>

                    <!-- Membership Section -->
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
                            <p>Already a Member? <a href="#">Sign In now>></a></p>
                        </div>
                    </section>

                    <!-- Next Button -->
                    <div class="d-flex justify-content-end mt-4">
                        <button type="submit" class="btn btn-primary"
                            style="background-color:#dfa974; border-color: #dfa974;">
                            Next
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        .stepper-wrapper {
            margin-top: auto;
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .stepper-item {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            flex: 1;

            @media (max-width: 768px) {
                font-size: 12px;
            }
        }

        .stepper-item::before {
            position: absolute;
            content: "";
            border-bottom: 2px solid #ccc;
            width: 100%;
            top: 20px;
            left: -50%;
            z-index: 2;
        }

        .stepper-item::after {
            position: absolute;
            content: "";
            border-bottom: 2px solid #ccc;
            width: 100%;
            top: 20px;
            left: 50%;
            z-index: 2;
        }

        .stepper-item .step-counter {
            position: relative;
            z-index: 5;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #ccc;
            margin-bottom: 6px;
        }

        .stepper-item.active {
            font-weight: bold;
        }

        .stepper-item.completed .step-counter {
            background-color: #dfa974;
        }
    </style>
@endsection