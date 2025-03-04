@extends('layouts.guestdashboard')
@section('content')

<!-- Spa Services Booking Form Section Begin -->
<section class="spa-booking-form-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="mb-4" style="font-size: 27px;">Reserve Your Spa Services</h2>
                <form method="post" action="{{ route('spa.store_spa') }}" enctype="multipart/form-data" novalidate>
                    @csrf
                    
                    <!-- Spa Service Selection -->
                    <div class="mb-3">
                        <label class="form-label">Select Spa Service</label>
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
                    <div class="mb-3">
                        <label class="form-label">Preferred Time Slot</label>
                        <select class="form-select" name="time_slot" required>
                            <option value="">Select Time Slot</option>
                            <option value="09:00 AM - 11:00 AM">09:00 AM - 11:00 AM</option>
                            <option value="11:00 AM - 01:00 PM">11:00 AM - 01:00 PM</option>
                            <option value="01:00 PM - 03:00 PM">01:00 PM - 03:00 PM</option>
                            <option value="03:00 PM - 05:00 PM">03:00 PM - 05:00 PM</option>
                            <option value="05:00 PM - 07:00 PM">05:00 PM - 07:00 PM</option>
                        </select>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Reserve Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Spa Services Booking Form Section End -->

@endsection
