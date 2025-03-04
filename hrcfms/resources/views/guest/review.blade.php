@extends('layouts.guestdashboard')
@section('content')


<!-- Review Form Section Begin -->
<section class="review-form-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="mb-4" style="font-size: 27px;">Add Review</h2>
                <form method="post" action="{{ route('review.store_review') }}" enctype="multipart/form-data" novalidate>
                    @csrf
                    
                    <!-- Booking Number -->
                    <div class="mb-3">
                        <label class="form-label">Booking Number</label>
                        <input type="text" class="form-control" name="booking_number" required>
                    </div>
                    
                    <!-- PIN Code -->
                    <div class="mb-3">
                        <label class="form-label">PIN Code</label>
                        <input type="password" class="form-control" name="pin_code" required>
                    </div>
                    
                    <!-- Relevant Date -->
                    <div class="mb-3">
                        <label class="form-label">Relevant Date</label>
                        <input type="date" class="form-control" name="relevant_date" required>
                    </div>
                    
                    <!-- Topic -->
                    <div class="mb-3">
                        <label class="form-label">Bring Your Topic to the Sitara Family Table</label>
                        <input type="text" class="form-control" name="review_topic" required>
                    </div>
                    
                    <!-- Story -->
                    <div class="mb-3">
                        <label class="form-label">Your Story with Sitara Family</label>
                        <textarea class="form-control" name="review_story" rows="4" required></textarea>
                    </div>
                    
                    <!-- Rating -->
                    <div class="mb-3">
                        <label class="form-label">How would you rate your experience out of 10?</label>
                        <input type="number" class="form-control" name="rating" min="1" max="10" required>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Review Form Section End -->

@endsection
