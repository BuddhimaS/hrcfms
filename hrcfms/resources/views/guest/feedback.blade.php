@extends('layouts.guestdashboard')
@section('content')

<!-- Feedback Form Section Begin -->
<section class="feedback-form-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="mb-4" style="font-size: 27px;">Submit Feedback</h2>
                <form method="post" action="{{ route('feedback.store_feedback') }}" enctype="multipart/form-data" novalidate>
                    @csrf

                    <!-- Overall Experience -->
                    <div class="mb-3">
                        <label class="form-label">1. Overall Experience</label>
                        <select class="form-select" name="overall_experience" required>
                            <option selected disabled>Choose an option</option>
                            <option>Very Satisfied</option>
                            <option>Satisfied</option>
                            <option>Neutral</option>
                            <option>Dissatisfied</option>
                            <option>Very Dissatisfied</option>
                        </select>
                    </div>
                    
                    <!-- Room Cleanliness -->
                    <div class="mb-3">
                        <label class="form-label">2. Room Cleanliness</label>
                        <select class="form-select" name="room_cleanliness" required>
                            <option selected disabled>Choose an option</option>
                            <option>Very Satisfied</option>
                            <option>Satisfied</option>
                            <option>Neutral</option>
                            <option>Dissatisfied</option>
                            <option>Very Dissatisfied</option>
                        </select>
                    </div>
                    
                    <!-- Staff Friendliness -->
                    <div class="mb-3">
                        <label class="form-label">3. Staff Friendliness</label>
                        <select class="form-select" name="staff_friendliness" required>
                            <option selected disabled>Choose an option</option>
                            <option>Very Satisfied</option>
                            <option>Satisfied</option>
                            <option>Neutral</option>
                            <option>Dissatisfied</option>
                            <option>Very Dissatisfied</option>
                        </select>
                    </div>
                    
                    <!-- Service Quality -->
                    <div class="mb-3">
                        <label class="form-label">4. Service Quality</label>
                        <select class="form-select" name="service_quality" required>
                            <option selected disabled>Choose an option</option>
                            <option>Very Satisfied</option>
                            <option>Satisfied</option>
                            <option>Neutral</option>
                            <option>Dissatisfied</option>
                            <option>Very Dissatisfied</option>
                        </select>
                    </div>
                    
                    <!-- Recommendation -->
                    <div class="mb-3">
                        <label class="form-label">5. Would you recommend our hotel to others?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="recommend" value="Yes" required>
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="recommend" value="No">
                            <label class="form-check-label">No</label>
                        </div>
                    </div>
                    
                    <!-- Suggestions -->
                    <div class="mb-3">
                        <label class="form-label">6. Suggestions</label>
                        <textarea class="form-control" name="suggestions" rows="3" placeholder="Enter your suggestions..."></textarea>
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
<!-- Feedback Form Section End -->

@endsection
