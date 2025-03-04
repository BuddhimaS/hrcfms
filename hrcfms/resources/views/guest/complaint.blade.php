@extends('layouts.guestdashboard')
@section('content')

<!-- Add Complaint Form Section Begin -->
<section class="complaint-form-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="mb-4" style="font-size: 27px;">Add Complaint</h2>
                <form method="post" action="{{ route('complaint.store_complaint') }}" enctype="multipart/form-data" novalidate>
                    @csrf

                    <!-- Types of Complaint -->
                    <div class="mb-3">
                        <label for="complain_type" class="form-label">Types of Complaint</label>
                        <select class="form-select" name="complain_type" required>
                            <option selected disabled>Choose Complaint Type</option>
                            <option value="Service">Service</option>
                            <option value="Cleanliness">Cleanliness</option>
                            <option value="Maintenance">Maintenance</option>
                            <option value="Staff Behavior">Staff Behavior</option>
                            <option value="Others">Others</option>
                        </select>
                        @error('complain_type')
                            <span>{{$message}}</span>
                        @enderror
                    </div>

                    <!-- Date and Time for the Incident -->
                    <div class="mb-3">
                        <label for="incident_datetime" class="form-label">Date and Time for the Incident</label>
                        <input type="datetime-local" class="form-control" name="incident_datetime" required>
                        @error('incident_datetime')
                            <span>{{$message}}</span>
                        @enderror
                    </div>

                    <!-- Attachments -->
                    <div class="mb-3">
                        <label for="attachments" class="form-label">Attachments</label>
                        <input type="file" class="form-control" name="attachments" multiple>
                        @error('attachments')
                            <span>{{$message}}</span>
                        @enderror
                    </div>

                    <!-- Feedback Agreement -->
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="feedback_agreement" required  value="1">
                        <label class="form-check-label" for="feedback_agreement">
                            I agree to provide feedback regarding this complaint.
                        </label>
                        @error('feedback_agreement')
                            <span>{{$message}}</span>
                        @enderror
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
<!-- Add Complaint Form Section End -->

@endsection
