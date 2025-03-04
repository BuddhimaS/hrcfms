@extends('layouts.dashboard')
@section('content')

<div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title">View Room</h1>

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
                      <th>Room number</th>
                      <th>room_type</th>
                      <th>bed_type</th>
                      <th>price_per_night</th>
                      <th>room_description</th>
                      <th>status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ( $rooms as $r )
                    <tr>
                      <td>{{ $r['room_number'] }}</td>
                      <td>{{ $r['room_type'] }}</td>
                      <td>{{ $r['bed_type'] }}</td>
                      <td>{{ $r['price_per_night'] }}</td>
                      <td>{{ $r['room_description'] }}</td>
                      <td>{{ $r['status'] }}</td>
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
