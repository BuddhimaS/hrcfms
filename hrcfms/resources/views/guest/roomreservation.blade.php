@extends('layouts.guestdashboard')
@section('content')

<!-- Room Selection Form Section Begin -->
<section class="room-selection-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="mb-4" style="font-size: 27px;">Reserve your Room</h2>
                <form method="post" action="{{ route('roomreservation.store_roomreservation') }}" novalidate>
                    @csrf

                    <!-- Check-in and Check-out Dates -->
                    <div class="mb-3">
                        <label class="form-label">Check-in Date</label>
                        <input type="date" class="form-control" name="checkin_date" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Check-out Date</label>
                        <input type="date" class="form-control" name="checkout_date" required>
                    </div>
                    
                    <!-- Room Selection -->
                    <div class="mb-3">
                        <label class="form-label">Select Room Type</label>
                        <select class="form-select" name="room_type" required>
                            <option selected disabled>Choose a room type</option>
                            <option value="Deluxe">Deluxe Room - LKR 50,236</option>
                            <option value="Suite">Suite Room - LKR 63,456</option>
                            <option value="Superior">Superior Room - LKR 70,507</option>
                        </select>
                    </div>

                    <!-- Number of Guests -->
                    <div class="mb-3">
                        <label class="form-label">Number of Adults</label>
                        <input type="number" class="form-control" name="adults" min="1" required>
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
                    
                    <!-- Submit Button -->
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Reserve Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Room Selection Form Section End -->

@endsection
