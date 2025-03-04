@extends('layouts.dashboard')
@section('content')

<!-- About Us Section Begin -->
<section class="aboutus-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <h2 class="mb-4" style="font-size: 27px;">Add Room</h2>
                <form method="post" action="{{route('room.store')}}" novalidate>
                    @csrf

                    <div class="mb-3">
                        <label for="room_number" class="form-label">Room Number</label>
                        <input type="text" class="form-control" placeholder="Room Number" name="room_number">
                        @error('room_number')
                            <span>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="room_type" class="form-label">Room Type</label>
                        <select class="form-select" name="room_type">
                            <option selected>Choose Room Type</option>
                            <option value="Single">Single</option>
                            <option value="Double">Double</option>
                            <option value="Suite">Suite</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="bed_type" class="form-label">Bed Type</label>
                        <select class="form-select" name="bed_type">
                            <option selected>Choose Bed Type</option>
                            <option value="King">King</option>
                            <option value="Queen">Queen</option>
                            <option value="Twin">Twin</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="price_per_night" class="form-label">Price Per Night</label>
                        <input type="number" class="form-control" placeholder="Price Per Night" name="price_per_night">
                    </div>

                    <div class="mb-3">
                        <label for="room_description" class="form-label">Room Description</label>
                        <textarea class="form-control" placeholder="Enter room description"
                            name="room_description"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status Availability</label>
                        <select class="form-select" name="status">
                            <option selected>Choose Availability</option>
                            <option value="Available">Available</option>
                            <option value="Booked">Booked</option>
                            <option value="Under Maintenance">Under Maintenance</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>



            </div>
        </div>
    </div>
</section>
<!-- About Us Section End -->


@endsection