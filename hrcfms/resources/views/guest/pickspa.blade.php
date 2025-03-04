@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">

            <!-- Form Section -->
            <div class="col-md-10">
                <form action="{{ route('pickspa.store_pickspa') }}" method="POST">
                    @csrf

                    <!-- Progress Bar -->
                    <div class="stepper-wrapper">
                        <div class="stepper-item completed">
                            <div class="step-counter">1</div>
                            <div class="step-name">Pick a Room</div>
                        </div>
                        <div class="stepper-item completed">
                            <div class="step-counter">2</div>
                            <div class="step-name">Guest Details</div>
                        </div>
                        <div class="stepper-item active">
                            <div class="step-counter">3</div>
                            <div class="step-name">Make It Your Own</div>
                        </div>
                        <div class="stepper-item">
                            <div class="step-counter">4</div>
                            <div class="step-name">Payment Confirmation</div>
                        </div>
                    </div>

                    <!-- Form Content -->
                    <div class="row">
                        <!-- Left Column for Image Carousel -->
                        <div class="col-md-5 mb-4">
                            <div id="roomSlider" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ url('public/img/spa2.jpg') }}" class="img-fluid rounded" alt="Swedish Massages">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ url('public/img/spa3.jpg') }}" class="img-fluid rounded" alt="Deluxe Room 2">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#roomSlider" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#roomSlider" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            </div>
                        </div>

                        <!-- Right Column for Form Fields -->
                        <div class="col-md-7">
                            <div class="form-container">
                                <!-- Service Selection -->
                                <div class="row mt-4 text-center">
                                    <div class="col-md-4">
                                        <button type="button" class="btn btn-light w-100 service-btn" onclick="window.location.href='{{ route('guest.pickown') }}'">Meal</button>
                                    </div>
                                    <div class="col-md-4">
                                    <button type="button" class="btn btn-light w-100 service-btn" onclick="window.location.href='{{ route('guest.pickcab') }}'">Cab Service</button>
                                    </div>
                                    <div class="col-md-4">
                                    <button type="button" class="btn btn-warning w-100 service-btn">Spa Service</button>
                                    </div>
                                </div>

                                
                                 
                    <!-- Spa Service Selection -->
                    <div class="mb-3 d-inline-flex align-items-center">
                        <label class="form-label" style="margin-right: 20px;">Select Spa Service</label>
                        <select class="form-select" name="spa_service" required>
                            <option value="">Select Service</option>
                            <option value="Massage Therapy">Massage Therapy</option>
                            <option value="Facial Treatments">Facial Treatments</option>
                            <option value="Body Treatments">Body Treatments</option>
                            <option value="Manicure and Pedicure">Manicure and Pedicure</option>
                            <option value="Aromatherapy">Aromatherapy</option>
                            <option value="Reflexology">Reflexology</option>
                        </select>
                    </div>
                    
                    <!-- Appointment Date -->
                    <div class="mb-3">
                        <label class="form-label">Appointment Date</label>
                        <input type="date" class="form-control" name="appointment_date" required min="{{ \Carbon\Carbon::today()->toDateString() }}">
                    </div>
                    
                    <!-- Preferred Time Slot -->
                    <div class="mb-3 d-inline-flex align-items-center">
                        <label class="form-label" style="margin-right: 20px;">Preferred Time Slot</label>
                        <select class="form-select" name="time_slot" required>
                            <option value="">Select Time Slot</option>
                            <option value="09:00 AM - 11:00 AM">09:00 AM - 11:00 AM</option>
                            <option value="11:00 AM - 01:00 PM">11:00 AM - 01:00 PM</option>
                            <option value="01:00 PM - 03:00 PM">01:00 PM - 03:00 PM</option>
                            <option value="03:00 PM - 05:00 PM">03:00 PM - 05:00 PM</option>
                            <option value="05:00 PM - 07:00 PM">05:00 PM - 07:00 PM</option>
                        </select>
                    </div>
                                <!-- Buttons -->
                                <div class="d-flex justify-content-between mt-4">
                                    <button type="submit" class="btn btn-secondary action-btn">Add Spa Service</button>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <button type="submit" class="btn btn-primary action-btn"  onclick="window.location.href='{{ route('guest.pickpay') }}'">Next</button>
            </div>
        </div>
    </div>

    <style>
        .stepper-wrapper {
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
        }

        .stepper-item::before,
        .stepper-item::after {
            position: absolute;
            content: "";
            border-bottom: 2px solid #ccc;
            width: 100%;
            top: 20px;
        }

        .stepper-item::before {
            left: -50%;
            z-index: 2;
        }

        .stepper-item::after {
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

        .stepper-item.completed .step-counter {
            background-color: #dfa974;
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 6px rgba(145, 136, 136, 0.1);
        }

        .form-control {
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(83, 71, 71, 0.1);
        }

        .btn-primary {
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #c88a52;
            border-color: #c88a52;
        }

        .service-btn {
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            transition: 0.3s;
        }

        .service-btn:hover {
            background-color: #c88a52;
            color: white;
        }

        .action-btn {
            padding: 12px 20px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 8px;
            transition: 0.3s;
        }

        .action-btn:hover {
            background-color: #c88a52;
            border-color: #c88a52;
        }

        /* Carousel */
        #roomSlider {
            max-width: 100%;
            height: auto;
        }

        .carousel-inner {
            width: 100%;
            margin-top: 25%;
        }

        .carousel-item img {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        @media (max-width: 768px) {
            .stepper-wrapper {
                flex-direction: column;
                align-items: center;
            }

            .col-md-5,
            .col-md-7 {
                width: 100%;
            }
        }
    </style>
@endsection
