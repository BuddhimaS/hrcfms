@extends('layouts.frontdeskofficerdashboard')
@section('content')

<!-- Task Form Section Begin -->
<section class="task-form-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <h2 class="mb-4" style="font-size: 27px;">Create House Keeping Ticket</h2>
                <form method="post" action="{{route('task.store')}}" novalidate>
                    @csrf

                    <div class="mb-3">
                        <label for="room_number" class="form-label">Room Number</label>
                        <input type="text" class="form-control" placeholder="Enter Room Number" name="room_number">
                        @error('room_number')
                            <span>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="task_type" class="form-label">Task Type</label>
                        <select class="form-select" name="task_type">
                            <option selected>Choose Task Type</option>
                            <option value="Cleaning">Cleaning</option>
                            <option value="Maintenance">Maintenance</option>
                            <option value="Restocking">Restocking</option>
                        </select>
                        @error('task_type')
                            <span>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="priority" class="form-label">Priority</label>
                        <select class="form-select" name="priority">
                            <option selected>Choose Priority</option>
                            <option value="Low">Low</option>
                            <option value="Medium">Medium</option>
                            <option value="High">High</option>
                        </select>
                        @error('priority')
                            <span>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" rows="4" placeholder="Enter Task Description" name="description"></textarea>
                        @error('description')
                            <span>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Task Form Section End -->



@endsection




