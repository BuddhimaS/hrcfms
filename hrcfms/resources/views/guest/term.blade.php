@extends ('layouts.app')
@section('content')

<!-- Terms & Conditions Section Begin -->
<section class="terms-section spad">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Terms & Conditions - Sitara Hotel Room Reservation</h5>
                        <p><strong>1. Booking & Confirmation</strong><br>
                            Reservations are subject to availability and confirmation.<br>
                            A valid payment method is required to secure a booking.<br>
                            Guests must provide accurate details during the booking process.</p>
                        
                        <p><strong>2. Check-in & Check-out</strong><br>
                            Check-in time: 2:00 PM | Check-out time: 12:00 PM.<br>
                            Early check-in and late check-out are subject to availability and additional charges.<br>
                            A valid government-issued ID or passport is required at check-in.</p>
                        
                        <p><strong>3. Cancellation & Refund Policy</strong><br>
                            Free cancellation up to 48 hours before the check-in date.<br>
                            Cancellations made within 48 hours will be charged for one night’s stay.<br>
                            No-shows will be charged the full booking amount.</p>
                        
                        <p><strong>4. Payment Policy</strong><br>
                            Payment can be made via credit/debit card, bank transfer, or cash.<br>
                            Full payment is required at check-in unless otherwise stated.<br>
                            Additional charges such as minibar usage and room service must be settled at check-out.</p>
                        
                        <p><strong>5. Guest Responsibilities</strong><br>
                            Guests are responsible for any damages to hotel property.<br>
                            No smoking, pets, or illegal activities are allowed in hotel rooms.<br>
                            Noise levels should be kept minimal to respect other guests.</p>
                        
                        <p><strong>6. Hotel Rights</strong><br>
                            The hotel reserves the right to refuse service to any guest violating hotel policies.<br>
                            Management may enter rooms for maintenance or security purposes.<br>
                            Guests violating terms may be asked to leave without a refund.</p>
                        
                        <p><strong>7. Privacy & Data Protection</strong><br>
                            Guest information is confidential and used only for reservation and service purposes.<br>
                            Personal data will not be shared without guest consent unless required by law.</p>
                        
                        <p><strong>8. Liability Disclaimer</strong><br>
                            The hotel is not responsible for lost, stolen, or damaged belongings.<br>
                            Guests are advised to use in-room safes for valuables.<br>
                            The hotel is not liable for unforeseen circumstances affecting the booking (e.g., natural disasters, emergencies).</p>
                        
                        <p>By proceeding with the reservation, guests agree to abide by these terms and conditions.</p>
                        <p>For further inquiries, contact us at <strong>011-67675456</strong>.</p>
                    </div>
                </div>
                <div class="mt-4 text-center">
                    <a href="{{route('guest.term')}}" class="btn btn-secondary">Terms</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Terms & Conditions Section End -->
@endsection
