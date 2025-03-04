@extends('layouts.app')

@section('content')
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <form action="{{ route('pickroom.store_pickroom') }}" method="POST">
                        @csrf
                        <!-- Progress Bar -->
                        <div class="stepper-wrapper">
                            <div class="stepper-item active">
                                <div class="step-counter">1</div>
                                <div class="step-name">Pick a Room</div>
                            </div>
                            <div class="stepper-item">
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

                        <!-- New Section for Image on the Left Side -->
                        <div class="d-flex mb-4">
                            <!-- Light Side Image Carousel -->
                            <div class="col-md-6 d-flex justify-content-center align-items-center">
                                <div id="roomSlider" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ url('public/img/deluxe1.jpg') }}" class="d-block w-100"
                                                alt="Deluxe Room">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ url('public/img/deluxe2.jpg') }}" class="d-block w-100"
                                                alt="Deluxe Room 2">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#roomSlider"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#roomSlider"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>

                            <!-- Form Section -->
                            <div class="form-container col-md-7">

                                <!-- Room Selection -->

                                <div class="mb-3 d-inline-flex align-items-center">
                                    <label class="form-label me-2" style="margin-right: 20px;" for="room_type">Room Type:</label>
                                    <select name="room_type" id="room_type" required>
                                        <option value="">Select a Room Type</option>
                                        <option value="1">Deluxe Room</option>
                                        <option value="2">Suite Room</option>
                                        <option value="3">Superior Room</option>
                                    </select>
                                </div>
<!-- 
                                <div class="mb-3 d-inline-flex align-items-center">
                                    <label class="form-label me-2" for="room_type">Room Type:</label>
                                    <select name="room_type" id="room_type" required>
                                        <option value="">Select a Room Type</option>
                                        <option value="1" {{ old('room_type') == '1' ? 'selected' : '' }}>Deluxe Room</option>
                                        <option value="2" {{ old('room_type') == '2' ? 'selected' : '' }}>Suite Room</option>
                                        <option value="3" {{ old('room_type') == '3' ? 'selected' : '' }}>Superior Room</option>
                                    </select>
                                    @error('room_type')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div> -->


                                <!-- Check-in and Check-out Dates -->
                                <div class="form-group">

                                    <label for="checkin_date">Check-in Date:</label>
                                    <input type="date" name="checkin_date" value="{{ old('checkin_date') }}"
                                        class="form-control">
                                    @error('checkin_date')
                                        <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="checkout_date">Check-out Date:</label>
                                    <input type="date" name="checkout_date" value="{{ old('checkout_date') }}"
                                        class="form-control">
                                    @error('checkout_date')
                                        <small class="text-danger">Please enter a valid check-out date.</small>
                                    @enderror
                                </div>
                                <!-- Number of Guests -->
                                <div class="mb-3">
                                    <label for="adults" class="form-label">Number of Adults</label>
                                    <input type="number" class="form-control" name="adults" min="1">
                                    @error('adults')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    <!-- <small id="adultsError" class="text-danger"></small> -->
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Number of Children</label>
                                    <input type="number" class="form-control" name="children" min="0">
                                </div>

                                <!-- Promo Code -->
                                <div class="mb-3">
                                    <label class="form-label">Promo Code (Optional)</label>
                                    <input type="text" class="form-control" name="promo_code">
                                </div>

                                <!-- Next Button -->
                                <div class="d-flex justify-content-end mt-4">
                                    <button type="submit" class="btn btn-primary"
                                        style="background-color:#dfa974; border-color: #dfa974;">
                                        Next
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>


                    <script>
    document.getElementById("bookingForm").addEventListener("submit", function(event) {
        let adultsInput = document.getElementById("adults");
        let errorMsg = document.getElementById("adultsError");

        if (adultsInput.value.trim() === "" || adultsInput.value < 1) {
            errorMsg.textContent = "Please enter a valid number of adults (minimum 1).";
            event.preventDefault(); // Prevent form submission
        } else {
            errorMsg.textContent = ""; // Clear error message if valid
        }
    });
    </script>
                </div>
            </div>
        </div>

        <!-- <style>
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

                .stepper-item.active {
                    font-weight: bold;
                }

                .stepper-item.completed .step-counter {
                    background-color: #dfa974;
                }

                .form-control {
                    border-radius: 8px;
                    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
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

                .form-container {
                    background-color: #ffffff;
                    border-radius: 10px;
                    padding: 20px;
                    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
                }

                @media (max-width: 768px) {
                    .stepper-wrapper {
                        flex-direction: column;
                        align-items: center;
                    }

                    .d-flex {
                        flex-direction: column;
                    }

                    .col-md-7,
                    .col-md-5 {
                        width: 100%;
                    }
                }
            </style> -->

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

            .stepper-item.active {
                font-weight: bold;
            }

            .stepper-item.completed .step-counter {
                background-color: #dfa974;
            }

            .form-control {
                border-radius: 8px;
                box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
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

            .form-container {
                background-color: #ffffff;
                border-radius: 10px;
                padding: 20px;
                box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            }

            /* 50/50 Grid Layout */
            .d-flex {
                display: flex;
                justify-content: space-between;
            }

            .col-md-6,
            .col-md-7 {
                width: 50%;
            }

            .form-container {
                padding: 20px;
                margin-left: 20px;
                /* To add some space between form and carousel */
            }

            .col-md-5 .col-mb-4 {
                padding-top: 10%;
            }

            /* Image Carousel */
            ..carousel-inner {
                margin-top: 25%;
            }

            .carousel-inner img {
                height: 50vh;
            }

            @media (max-width: 768px) {
                .d-flex {
                    flex-direction: column;
                }

                .col-md-6,
                .col-md-7 {
                    width: 100%;
                    /* Make both the image and form take full width on smaller screens */
                    margin-bottom: 20px;
                    /* Space between image and form */
                }

                .form-container {
                    margin-left: 0;
                    /* Remove margin for mobile view */
                }
            }
        </style>

@endsection