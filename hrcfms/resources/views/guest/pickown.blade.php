@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">

            <!-- Form Section -->
            <div class="col-md-10">
                <form action="{{ route('pickown.store_pickown') }}" method="POST">
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
                                        <img src="{{ url('public/img/meal.jpg') }}" class="img-fluid rounded"
                                            alt="Swedish Massages">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ url('public/img/meal1.jpg') }}" class="img-fluid rounded"
                                            alt="Deluxe Room 2">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#roomSlider"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#roomSlider"
                                    data-bs-slide="next">
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
                                        <button type="button" class="btn btn-warning w-100 service-btn">Meal</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="button" class="btn btn-light w-100 service-btn"
                                            onclick="window.location.href='{{ route('guest.pickcab') }}'">Cab
                                            Service</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="button" class="btn btn-light w-100 service-btn"
                                            onclick="window.location.href='{{ route('guest.pickspa') }}'">Spa
                                            Service</button>
                                    </div>
                                </div>

                                <!-- Meal Selection -->
                                <div class="mb-3 d-inline-flex align-items-center">
                                    <label class="form-label" style="margin-right: 20px;">Select a Meal</label>
                                    <select class="form-select mt-2" name="meal_selection" required>
                                        <option value="">Meal Selection</option>
                                        <option value="Breakfast at Central-3200">Breakfast at Central</option>
                                        <option value="Lunch at Central-5700">Lunch at Central</option>
                                        <option value="Dinner at Central-5800">Dinner at Central</option>
                                    </select>
                                </div>

                                <!-- Count -->
                                <div class="mb-3">
                                    <label class="form-label">Enter Count</label>
                                    <input type="number" class="form-control" name="meal_count" min="1" required>
                                </div>

                                <!-- Reservation Date -->
                                <div class="mb-3">
                                    <label class="form-label">Reservation Date</label>
                                    <input type="date" class="form-control" name="reservation_date" required>
                                </div>

                                <!-- Buttons -->
                                <div class="d-flex justify-content-between mt-4">
                                    <button type="submit" class="btn btn-secondary action-btn">Add Meal</button>
                                    <button type="submit" class="btn btn-primary action-btn">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
            /* height: 300px; */
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