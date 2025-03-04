@extends('layouts.guestdashboard')
@section('content')

<!-- Cab Reservation Form Section Begin -->
<section class="reservation-form-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="mb-4" style="font-size: 27px;">Cab Service Reservation</h2>
                <form method="post" action="{{ route('cab.reserve') }}" enctype="multipart/form-data" novalidate>
                    @csrf
                    
                    <!-- Reservation ID -->
                    <div class="mb-3">
                        <label class="form-label">Reservation ID</label>
                        <input type="text" class="form-control" name="reservation_id" required>
                    </div>
                    
                    <!-- Pickup Date -->
                    <div class="mb-3">
                        <label class="form-label">Pickup Date</label>
                        <input type="date" class="form-control" name="pickup_date" required>
                    </div>
                    
                    <!-- Pickup Time -->
                    <div class="mb-3">
                        <label class="form-label">Pickup Time</label>
                        <select class="form-select" name="pickup_time" required>
                            <option value="09:00 AM - 11:00 AM">09:00 AM - 11:00 AM</option>
                            <option value="11:00 AM - 01:00 PM">11:00 AM - 01:00 PM</option>
                            <option value="01:00 PM - 03:00 PM">01:00 PM - 03:00 PM</option>
                            <option value="03:00 PM - 05:00 PM">03:00 PM - 05:00 PM</option>
                            <option value="05:00 PM - 07:00 PM">05:00 PM - 07:00 PM</option>
                        </select>
                    </div>
                    
                    <!-- Vehicle Type -->
                    <div class="mb-3">
                        <label class="form-label">Vehicle Type</label>
                        <select class="form-select" name="vehicle_type" required>
                            <option value="Large Van">Large Van</option>
                            <option value="Mini Van">Mini Van</option>
                            <option value="Car-CHR">Car-CHR</option>
                        </select>
                    </div>
                    
                    <!-- Drop Destination -->
                    <div class="mb-3">
                        <label class="form-label">Drop Destination</label>
                        <input type="text" class="form-control" name="drop_destination" required>
                    </div>
                    
                    <!-- Distance (KM) -->
                    <div class="mb-3">
                        <label class="form-label">Distance (KM)</label>
                        <input type="number" class="form-control" name="distance" min="1" required>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Reserve Cab</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Cab Reservation Form Section End -->

@endsection
