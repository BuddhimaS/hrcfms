@extends('layouts.dashboard')
@section('content')

<div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title">View Employee</h1>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>emp_name</th>
                      <th>emp_mobile</th>
                      <th>emp_email</th>
                      <th>employee_type</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ( $employees as $em )
                    <tr>
                      <td>{{ $em['emp_name'] }}</td>
                      <td>{{ $em['emp_mobile'] }}</td>
                      <td>{{ $em['emp_email'] }}</td>
                      <td>{{ $em['employee_type'] }}</td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        

@endsection
