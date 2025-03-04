@extends('layouts.dashboard')
@section('content')

<!-- Employee Form Section Begin -->
<section class="employee-form-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <h2 class="mb-4" style="font-size: 27px;">Add Employee</h2>
                <form method="post" action="{{route('employee.store_employee')}}" novalidate>
                    @csrf

                    <div class="mb-3">
                        <label for="emp_name" class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="emp_name">
                        @error('emp_name')
                            <span>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="emp_mobile" class="form-label">Mobile</label>
                        <input type="text" class="form-control" placeholder="Enter Mobile Number" name="emp_mobile">
                        @error('emp_mobile')
                            <span>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="emp_email" class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Enter Email" name="emp_email">
                        @error('emp_email')
                            <span>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="emp_type" class="form-label">Employee Type</label>
                        <select class="form-select" name="emp_type">
                            <option selected>Choose Employee Type</option>
                            <option value="Admin">Admin</option>
                            <option value="Front Desk Staff">Front Desk Staff</option>
                            <option value="Marketing Staff">Marketing Staff</option>
                            <option value="Housekeeping Staff">Housekeeping Staff</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="emp_password" class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Password" name="emp_password">
                        @error('emp_password')
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
<!-- Employee Form Section End -->

@endsection