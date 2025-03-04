<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\feedback;
use App\Models\room;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function dashboard(){
        return view ('admin.dashboard');
    }

    
    public function createRoom()
    {
        return view('admin.room'); // Ensure this file exists
    }

    public function viewRoom()
    {   
        $rooms=room::all();
        return view('admin.viewroom',compact('rooms'));
         
    }

    public function viewEmployee()
    {
        $employees = Employee::all(); // Fetch employees from the database
        return view('admin.viewemployee', compact('employees'));
    }
    

    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'room_number' => 'required|unique:rooms',
            'room_type' => 'required',
            'bed_type' => 'required',
            'price_per_night' => 'required|numeric',
            'room_description' => 'nullable|string',
            'status' => 'required',
        ]);

        // Create the room
        Room::create([
            'room_number' => $request->input('room_number'),
            'room_type' => $request->input('room_type'),
            'bed_type' => $request->input('bed_type'),
            'price_per_night' => $request->input('price_per_night'),
            'room_description' => $request->input('room_description'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('admin.room')->with('success', 'Room added successfully!');
    }

    public function createEmployee()
    {
        return view('admin.employee'); // Ensure this file exists
    }


    public function store_employee(Request $request)
    {

        // Validate input
        $request->validate([
            'emp_name' => 'required|string',
            'emp_mobile' => 'required|unique:employees',
            'emp_email' => 'required|email|unique:employees',
            'emp_type' => 'required',
        ]);

        // Create the room
        employee::create([
            'emp_name' => $request->input('emp_name'),
            'emp_mobile' => $request->input('emp_mobile'),
            'emp_email' => $request->input('emp_email'),
            'employee_type' => $request->input('emp_type'),
            'emp_password' => bcrypt('defaultpassword'),
            

        ]);

        return redirect()->route('admin.employee')->with('success', 'Employee added successfully!');
    }


}