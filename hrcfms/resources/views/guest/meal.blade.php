@extends('layouts.guestdashboard')
@section('content')

    <!-- Meal Selection Form Section Begin -->
    <section class="meal-form-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="mb-4" style="font-size: 27px;">Reserve Your Perfect Meal</h2>
                    <form method="post" action="{{ route('meal.store_meal') }}" novalidate>
                        @csrf

                        <!-- Meal Selection -->
                        <div class="mb-3">
                            <label class="form-label">Select Meal</label>
                            <select class="form-select" name="meal_selection" required>
                                <option value="">Choose...</option>
                                <option value="Breakfast at Central">Breakfast at Central</option>
                                <option value="Lunch at Central">Lunch at Central</option>
                                <option value="Dinner at Central">Dinner at Central</option>
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

                        <!-- Submit Button -->
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Reserve Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Meal Selection Form Section End -->

@endsection