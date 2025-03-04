<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task; 

class FrontDeskOfficerController extends Controller
{
    public function dashboard()
    {
        return view('frontdeskofficer.dashboard'); 
    }

    public function createTask()
    {
        return view('frontdeskofficer.task'); // Adjust the view name as per your file naming conventions
    }

    public function store(Request $request)
    { 

        
        // Validate input
        $request->validate([
            'room_number' => 'required|string',
            'task_type' => 'required|in:Cleaning,Maintenance,Restocking',
            'priority' => 'required|in:Low,Medium,High',
            'description' => 'nullable|string',
            
        ]);

        // Create the task
        Task::create([ 
            'room_number' => $request->input('room_number'),
            'task_type' => $request->input('task_type'),
            'priority' => $request->input('priority'),
            'description' => $request->input('description'),
            
        ]);

        return redirect()->route('frontdeskofficer.task')->with('success', 'Task added successfully!');
        
        
    }
        
}
