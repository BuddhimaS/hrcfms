<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\MarketingStaffController;
use App\Http\Middleware\FrontDeskOfficerMiddleware;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontDeskOfficerController;
use App\Http\Controllers\CleaningStaffController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/about', function () {
    return view('guest.about');
})->name('about');

Route::get('/gallery', function () {
    return view('guest.gallery');
})->name('gallery');

Route::get('/deluxe', function () {
    return view('guest.deluxe');
})->name('deluxe');

Route::get('/suite', function () {
    return view('guest.suite');
})->name('suite');

Route::get('/superior', function () {
    return view('guest.superior');
})->name('superior');

Route::get('/contact', function () {
    return view('guest.contact');
})->name('contact');
Route::post('guest/store_contact', [GuestController::class,'store_contact'])->name('contact.store_contact');


// Route::get('/guest/pickroom',[GuestController::class,'pickroom'])->name('guest.pickroom');
// Route::post('/guest/store_pickroom', [GuestController::class, 'store_pickroom'])->name('pickroom.store_pickroom');

Route::get('/guest/pickroom', [GuestController::class, 'pickroom'])->name('guest.pickroom');
Route::post('/guest/pickroom', [GuestController::class, 'store_pickroom'])->name('pickroom.store_pickroom');



Route::get('/guest/pickguest', [GuestController::class, 'pickguest'])->name('guest.pickguest');
Route::post('/guest/pickguest', [GuestController::class, 'store_pickguest'])->name('pickguest.store_pickguest');


Route::get('guest/pickown',[GuestController::class,'pickown'])->name('guest.pickown');
Route::post('/guest/store_pickown', [GuestController::class, 'store_pickown'])->name('pickown.store_pickown');

Route::get('pickcab',[GuestController::class,'pickcab'])->name('guest.pickcab');
Route::post('/guest/store_pickcab', [GuestController::class, 'store_pickcab'])->name('pickcab.store_pickcab');

Route::get('pickspa',[GuestController::class,'pickspa'])->name('guest.pickspa');
Route::post('/guest/store_pickspa', [GuestController::class, 'store_pickspa'])->name('pickspa.store_pickspa');


Route::get('pickpay',[GuestController::class,'pickpay'])->name('guest.pickpay');
Route::post('/guest/store_pickpay', [GuestController::class, 'store_pickpay'])->name('pickpay.store_pickpay');

Route::get('pickpaycash',[GuestController::class,'pickpaycash'])->name('guest.pickpaycash');
Route::post('/guest/store_pickpaycash', [GuestController::class, 'store_pickpaycash'])->name('pickpaycash.store_pickpaycash');

Route::get('pickreview',[GuestController::class,'pickreview'])->name('guest.pickreview');
Route::post('/guest/store_pickreview', [GuestController::class, 'store_pickreview'])->name('pickreview.store_pickreview');


Route::get('successbooking',[GuestController::class,'successbooking'])->name('guest.successbooking');

Route::get('/guest/register',[GuestController::class,'create'])->name('guest.register');
Route::post('/guest/store', [GuestController::class, 'store'])->name('guest.store');
Route::get('/guest/term',[GuestController::class,'term'])->name('guest.term');

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'Authlogin'])->name('login');

Route::get('admin/room',[AdminController::class,'createRoom'])->name('admin.room');
Route::post('/room/store', [AdminController::class, 'store'])->name(name: 'room.store');

Route::get('admin/viewroom',[AdminController::class,'viewRoom'])->name('admin.viewroom');

Route::get('admin/employee',[AdminController::class,'createEmployee'])->name('admin.employee');
Route::post('/employee/store_employee', [AdminController::class, 'store_employee'])->name(name: 'employee.store_employee');

Route::get('admin/viewemployee', [AdminController::class, 'viewEmployee'])->name('admin.viewemployee');


Route::group(['middleware'=>'Admin'],function(){
Route::get('admin/dashboard',[AdminController::class,'dashboard']);
});

Route::group(['middleware'=>'FrontDeskOfficer'],function(){
Route::get('FrontDeskOfficer/dashboard',[FrontDeskOfficerController::class,'dashboard']);

Route::get('/frontdeskofficer/task', [FrontDeskOfficerController::class,'createTask'])->name('frontdeskofficer.task');
Route::post('/task/store', [FrontDeskOfficerController::class, 'store'])->name('task.store');
});

Route::group(['middleware'=>'Guest'],function(){
Route::get('guest/dashboard',[GuestController::class,'dashboard']);

Route::get('guest/complaint',[GuestController::class,'createcomplaint'])->name('guest.complaint');
Route::post('guest/store_complaint', [GuestController::class,'store_complaint'])->name('complaint.store_complaint');

Route::get('guest/feedback',[GuestController::class,'createfeedback'])->name('guest.feedback');
Route::post('guest/store_feedback', [GuestController::class,'store_feedback'])->name('feedback.store_feedback');

Route::get('guest/review',[GuestController::class,'createreview'])->name('guest.review');
Route::post('guest/store_review', [GuestController::class,'store_review'])->name('review.store_review');

Route::get('guest/roomreservation',[GuestController::class,'createroomreservation'])->name('guest.roomreservation');
Route::post('guest/store_roomreservation', [GuestController::class,'store_roomreservation'])->name('roomreservation.store_roomreservation');

Route::get('guest/meal',[GuestController::class,'mealreservation'])->name('guest.meal');
Route::post('guest/store_meal', [GuestController::class,'store_meal'])->name('meal.store_meal');

Route::get('guest/spa',[GuestController::class,'spareservation'])->name('guest.spa');
Route::post('guest/store_spa', [GuestController::class,'store_spa'])->name('spa.store_spa');

});

Route::group(['middleware'=>'MarketingStaff'],function(): void{
Route::get('MarketingStaff/dashboard',[MarketingStaffController::class,'dashboard']);
});
Route::group(['middleware'=>'CleaningStaff'],function(){
Route::get('CleaningStaff/dashboard',[CleaningStaffController::class,'dashboard']);
});