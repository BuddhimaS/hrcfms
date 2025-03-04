@extends('layouts.app')
@section('content')

    <!-- Reviews Page Section Begin -->
    <section class="reviews-page-section spad"
        style="background: url('{{ url('public/img/review5.jpg') }}') no-repeat center center/cover; padding: 60px 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="review-form-wrapper p-5 bg-white shadow-lg rounded">
                        <h2 class="mb-4 text-center" style="font-size: 27px; font-weight: bold; color: #333;">Add Review
                        </h2>
                        <form method="post" action="{{ route('pickreview.store_pickreview') }}"
                            enctype="multipart/form-data" novalidate>
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
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg"
                                    style="background-color:#dfa974; border-color: #dfa974;">Add Review</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Reviews Page Section End -->

@endsection