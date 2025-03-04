<?php

namespace App\Http\Controllers;
use App\Models\pickpay;
use App\Models\pickpaycash;
use App\Models\pickreview;
use App\Models\pickspa;
use Illuminate\Support\Facades\Log;
use App\Models\contact;
use App\Models\pickguest;
use App\Models\pickroom;
use App\Models\roomreservation;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\guest;
use Illuminate\Support\Facades\Auth;
use App\Models\complaint;
use App\Models\feedback;
use App\Models\review;
Use App\Models\meal;
Use App\Models\pickcab;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;



class GuestController extends Controller
{

    public function dashboard(){
        return view ('guest.dashboard');
    }
    
    public function about(){
        return view ('guest.about');
    }
    public function deluxe(){
        return view ('guest.deluxe');
    }
    public function suite(){
        return view ('guest.suite');
    }
    public function superior(){
        return view ('guest.superior');
    }
    
    public function gallery(){
        return view ('guest.about');
    }

    public function reviews(){
        return view ('guest.reviews');
    }

    public function term(){
        return view ('guest.term');
    }

    public function contact(){
        return view ('guest.contact');
    }
    public function pickroom(){
        return view ('guest.pickroom');
    }

    public function pickguest()
    {
        return view('guest.pickguest');
    }
    

    public function pickown(){
        return view ('guest.pickown');
    }

    public function pickcab(){
        return view ('guest.pickcab');
    }

    public function pickspa()
    {
    return view('guest.pickspa');
    }
    
    public function pickpay()
    {
    return view('guest.pickpay');
    }

    public function pickpaycash()
    {
    return view('guest.pickpaycash');
    }

    public function successbooking()
    {
    return view('guest.successbooking');
    }
    public function pickreview()
    {
    return view('guest.pickreview');
    }

    public function create(){
        return view('guest.register');
    }
    
    public function createcomplaint()
    {
        return view('guest.complaint'); // Ensure this file exists
    }
    
    
    public function createfeedback()
    {
        return view('guest.feedback'); // Ensure this file exists
    }

    public function createreview()
    {
        return view('guest.review'); // Ensure this file exists
    }

    public function createroomreservation()
    {
        return view('guest.roomreservation'); // Ensure this file exists
    }

    public function mealreservation()
    {
        return view('guest.meal'); // Ensure this file exists
    }

    public function spareservation()
    {
        return view('guest.spa'); // Ensure this file exists
    }

    public function store(Request $request)
    {
        $request->validate([
            'Fname'=>'required|string|max:255',
            'Lname'=>'required|string|max:255',
            'Email'=>'required|email|max:255|unique:users'


        ]);
     // Create the User
        $user = User::create([
            'Fname' => $request->input('Fname'),
            'LName' => $request->input('Lname'),
            'DOB' => $request->input('DOB'),
            'email' => $request->input('Email'),
            'City' => $request->input('City'),
            'State' => $request->input('State') ,
            'PinCode' => $request->input('PinCode'),
            'name' => $request->input('Fname') . ' ' . $request->input('Lname'), // Full name
            'password' => Hash::make($request->input('Password')), 
            'user_type'=>'guest'   
                     
                     
        ]);

        // Create the Guest
        guest::create([
            'user_id'=> $user->id,
            'Fname' => $request->input('Fname'),
            'Lname' => $request->input('Lname'),
            'DOB' => $request->input('DOB'),
            'Email' => $request->input('Email') ,
            'City' => $request->input('City'),
            'State' => $request->input('State') ,
            'PinCode' => $request->input('PinCode'),
            'country_id'=> $request->input('CountryID'),
            'Mobile'=> $request->input('Mobile'),
            'Password'=> $request->input('Password'),
            

        ]);
        return view('guest.success');  

    }
 
    public function store_complaint(Request $request)
{
     //Validate input
    $request->validate([
        'complain_type' => 'required|string',
        'incident_datetime' => 'required|date',
        'attachments' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
        'feedback_agreement' => 'required|boolean',
    ]);
    

       // Handle multiple file uploads
       $attachmentPaths = [];
       if ($request->hasFile('attachments')) {
           foreach ($request->file('attachments') as $file) {
               $attachmentPaths[] = $file->store('complaints', 'public');
           }
       } 

    // Create the complaint
    complaint::create([
        'complain_type' => $request->input('complain_type'),
        'incident_datetime' => $request->input('incident_datetime'),
        'attachments' => json_encode($attachmentPaths), // Store file paths as JSON
        'feedback_agreement' => $request->input('feedback_agreement'),
        'guest_id'=>Auth::user()->id
    ]);
    

    return redirect()->route('guest.complaint')->with('success', 'Complaint added successfully!');
    

   
}


public function store_feedback(Request $request)
{
    // Validate input
    $request->validate([
        'overall_experience' => 'required|in:Very Satisfied,Satisfied,Neutral,Dissatisfied,Very Dissatisfied',
        'room_cleanliness' => 'required|in:Very Satisfied,Satisfied,Neutral,Dissatisfied,Very Dissatisfied',
        'staff_friendliness' => 'required|in:Very Satisfied,Satisfied,Neutral,Dissatisfied,Very Dissatisfied',
        'service_quality' => 'required|in:Very Satisfied,Satisfied,Neutral,Dissatisfied,Very Dissatisfied',
        'recommend' => 'required|in:Yes,No',
        'suggestions' => 'nullable|string',
    ]);

    // Store feedback
    feedback::create([
        'overall_experience' => $request->input('overall_experience'),
        'room_cleanliness' => $request->input('room_cleanliness'),
        'staff_friendliness' => $request->input('staff_friendliness'),
        'service_quality' => $request->input('service_quality'),
        'recommend' => $request->input('recommend'),
        'suggestions' => $request->input('suggestions'),
    ]);

    return redirect()->route('guest.feedback')->with('success', 'Feedback submitted successfully!');
}

public function store_review(Request $request)
{
    // Validate input
    $request->validate([
        'booking_number' => 'required|string',
        'pin_code' => 'required|string',
        'relevant_date' => 'required|date',
        'review_topic' => 'required|string|max:255',
        'review_story' => 'required|string',
        'rating' => 'required|integer|min:1|max:10',
    ]);

    // Store review
    review::create([
        'booking_number' => $request->input('booking_number'),
        'pin_code' => $request->input('pin_code'),
        'relevant_date' => $request->input('relevant_date'),
        'review_topic' => $request->input('review_topic'),
        'review_story' => $request->input('review_story'),
        'rating' => $request->input('rating'),
    ]);

    return redirect()->route('guest.review')->with('success', 'Review submitted successfully!');
}

public function store_roomreservation(Request $request)
{
    // Validate input
    $request->validate([
        'room_number' => 'required|exists:rooms,room_number',
        'checkin_date' => 'required|date|after_or_equal:today',
        'checkout_date' => 'required|date|after:checkin_date',
        'adults' => 'required|integer|min:1',
        'children' => 'nullable|integer|min:0',
        'promo_code' => 'nullable|string',
    ]);

    // Store reservation
    roomreservation::create([
        'room_number' => $request->input('room_number'),
        'checkin_date' => $request->input('checkin_date'),
        'checkout_date' => $request->input('checkout_date'),
        'adults' => $request->input('adults'),
        'children' => $request->input('children', 0),
        'promo_code' => $request->input('promo_code'),
    ]);

    return redirect()->route('guest.roomreservation')->with('success', 'Reservation created successfully!');
}

public function store_pickown(Request $request)
{
    // Validate input
    $request->validate([
        'meal_selection' => 'required|string',
        'meal_count' => 'required|integer',
        'reservation_date' => 'required|date',// Ensure a valid date is entered
    ]);

    // Store meal
    meal::create([
        'meal_type' => $request->input('meal_selection'),
        'count' => $request->input('meal_count'),
        'reservation_date' => $request->input('reservation_date'), // Save the reservation date
    ]);

    return redirect()->route('guest.pickown')->with('success', 'Meal selection submitted successfully!');
}


public function store_pickspa(Request $request)
{
    // Validate input
    $request->validate([
        
        'spa_service' => 'required|string',
        'appointment_date' => 'required|date',
        'time_slot' => 'required|string|max:255',
    ]);

    // Store spa booking
    pickspa::create([
    
        'spa_service' => $request->input('spa_service'),
        'appointment_date' => $request->input('appointment_date'),
        'time_slot' => $request->input('time_slot'),
    ]);

    return redirect()->route('guest.pickspa')->with('success', 'Spa service booked successfully!');
}

public function store_contact(Request $request)
{
    // Validate input
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'mobile' => 'nullable|string|max:20',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    // Store contact message
    Contact::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'mobile' => $request->input('mobile'),
        'subject' => $request->input('subject'),
        'message' => $request->input('message'),
    ]);

    return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
}

public function store_pickguest(Request $request)
{
    // Validate input
    $request->validate([
        'title' => 'required|string|max:10',
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'country' => 'required|string|max:255',
        'mobile_number' => 'required|string|max:20',
        'email' => 'required|email|max:255',
        'confirm_email' => 'required|email|same:email',
        'special_request' => 'nullable|string',
        'arrival_time' => 'required|string|max:50',
    ]);

    // Store guest details
    pickguest::create([
        'title' => $request->input('title'),
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'country' => $request->input('country'),
        'mobile_number' => $request->input('mobile_number'),
        'email' => $request->input('email'),
        'confirm_email' => $request->input('confirm_email'),
        'special_request' => $request->input('special_request'),
        'arrival_time' => $request->input('arrival_time'),
    ]);

    return redirect()->route('guest.pickown')->with('success', 'Guest details saved successfully!');
}

// public function store_pickroom(Request $request)
// {
//     // Validate input
//     $request->validate([
//         'room_type.required' => 'Please select a room type before proceeding.',
//         'checkin_date' => 'required|date',
//         'checkout_date' => 'required|date',
//         'adults' => 'required|integer|min:1',
//         'children' => 'nullable|integer|min:0',
//         'promo_code' => 'nullable|string',
        
//     ]);

  
//     // Store room selection details
//     pickroom::create([
//         'room_type' => $request->input('room_type'),
//         'checkin_date' => $request->input('checkin_date'),
//         'checkout_date' => $request->input('checkout_date'),
//         'adults' => $request->input('adults'),
//         'children' => $request->input('children'),
//         'promo_code' => $request->input('promo_code'),
//     ]);
    
    
//     return redirect()->route('guest.pickguest')->with('success', 'Room selection saved successfully!');

    
// }

public function store_pickroom(Request $request)
{
    // Validate input
    $request->validate([
        'room_type' => 'required',
        'checkin_date' => 'required|date',
        'checkout_date' => 'required|date',
        'adults' => 'required|integer|min:1',
        'children' => 'nullable|integer|min:0',
        'promo_code' => 'nullable|string',
    ]);

    // Store room selection details
    pickroom::create([
        'room_type' => $request->input('room_type'),
        'checkin_date' => $request->input('checkin_date'),
        'checkout_date' => $request->input('checkout_date'),
        'adults' => $request->input('adults'),
        'children' => $request->input('children'),
        'promo_code' => $request->input('promo_code'),
    ]);
    
    return redirect()->route('guest.pickguest')->with('success', 'Room selection saved successfully!');
}

public function store_pickcab(Request $request)
{
    // Validate input
    $request->validate([
        'reservation_id' => 'required', 
        'pickup_date' => 'required|date',
        'pickup_time' => 'required|string',
        'vehicle_type' => 'required|string',
        'drop_destination' => 'required|string',
        'distance' => 'required|integer|min:1',
    ]);

    // Store cab details
    pickcab::create([
        'reservation_id' => $request->input('reservation_id'),
        'pickup_date' => $request->input('pickup_date'),
        'pickup_time' => $request->input('pickup_time'),
        'vehicle_type' => $request->input('vehicle_type'),
        'drop_destination' => $request->input('drop_destination'),
        'distance' => $request->input('distance'),
    ]);

    return redirect()->route('guest.pickcab')->with('success', 'Cab selection saved successfully!');
    
    
}

public function store_pickpay(Request $request)
{   
    // Validate input
    $request->validate([
        'transaction_reference' => 'required|string|max:255',
        'transfer_date' => 'required|date',
        'additional_details' => 'nullable|string',
        'payment_slip' => 'required', 
    ]);


        // Handle multiple file uploads
        $paymentSlipPaths = [];
        if ($request->hasFile('payment_slip')) {
            foreach ($request->file('payment_slip') as $file) {
                $paymentSlipPaths[] = $file->store('payment_slips', 'public'); // Store files in the 'payment_slips' directory
            }
        }


    // Store payment details
    pickpay::create([
        'transaction_reference' => $request->input('transaction_reference'),
        'transfer_date' => $request->input('transfer_date'),
        'additional_details' => $request->input('additional_details'),
        'payment_slip' => json_encode($paymentSlipPaths),
    ]);

    return redirect()->route('guest.pickpay')->with('success', 'Payment details saved successfully!');
   

    
    
}


public function store_pickpaycash(Request $request)
{
    // Validate input
    $request->validate([
        'paymentOption' => 'required|in:cash,card', // Ensure the payment option is valid
        'paymentDate' => 'required', // Ensure a valid date is entered
        'paymentTime' => 'required', // Ensure valid time format
    ]);

    // Store payment details
    pickpaycash::create([
        'payment_option' => $request->input('paymentOption'),
        'payment_date' => $request->input('paymentDate'),
        'payment_time' => $request->input('paymentTime'),
        
    ]);

    return redirect()->route('guest.pickpaycash')->with('success', 'Payment details submitted successfully!');
}

public function store_pickreview(Request $request)
{
    // Validate input
    $request->validate([
        'booking_number' => 'required|string',
        'pin_code' => 'required|string',
        'relevant_date' => 'required|date',
        'review_topic' => 'required|string|max:255',
        'review_story' => 'required|string',
        'rating' => 'required|integer|min:1|max:10',
    ]);

    // Store review
    pickreview::create([
        'booking_number' => $request->input('booking_number'),
        'pin_code' => $request->input('pin_code'),
        'relevant_date' => $request->input('relevant_date'),
        'review_topic' => $request->input('review_topic'),
        'review_story' => $request->input('review_story'),
        'rating' => $request->input('rating'),
    ]);

    return redirect()->route('guest.pickreview')->with('success', 'Review submitted successfully!');
}










   
}
