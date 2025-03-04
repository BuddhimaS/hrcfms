@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">

            <!-- Form Section -->
            <div class="col-md-10">
                <form action="{{ route('pickpay.store_pickpay') }}" method="POST">
                    @csrf

                    <!-- Progress Bar -->
                    <div class="stepper-wrapper">
                        <div class="stepper-item completed">
                            <div class="step-counter">1</div>
                            <div class="step-name">Pick a Room</div>
                        </div>
                        <div class="stepper-item completed">
                            <div class="step-counter">2</div>
                            <div class="step-name">Guest Details</div>
                        </div>
                        <div class="stepper-item completed">
                            <div class="step-counter">3</div>
                            <div class="step-name">Make It Your Own</div>
                        </div>
                        <div class="stepper-item active">
                            <div class="step-counter">4</div>
                            <div class="step-name">Payment Confirmation</div>
                        </div>
                    </div>

                    <!-- Form Content -->
                    <div class="row">
                        <!-- Right Column for Form Fields -->
                        <div class="col-md-12">
                            <div class="form-container">
                                <!-- Service Selection -->
                                <div class="row mt-4 text-center">
                                    <div class="col-md-5">
                                        <button type="button" class="btn btn-warning w-100 service-btn">Bank
                                            transfer</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-light w-100 service-btn"
                                            onclick="window.location.href='{{ route('guest.pickpaycash') }}'">Pre-Check-in Cash/Card
                                            Payment</button>
                                    </div>
                                </div>

                                <!-- Transaction Referoence Number -->
                                <div class="mb-3">
                                    <label class="form-label">Transaction Reference Number</label>
                                    <input type="text" class="form-control" name="transaction_reference" required>
                                </div>

                                <!-- Transfer Date -->
                                <div class="mb-3">
                                    <label class="form-label">Transfer Date</label>
                                    <input type="date" class="form-control" name="transfer_date" required>
                                </div>

                                <!-- Additional Details -->
                                <div class="mb-3">
                                    <label class="form-label">Additional Details</label>
                                    <textarea class="form-control" name="additional_details" rows="3"></textarea>
                                </div>

                                <!-- Payment Slip Upload -->
                                <div class="mb-3">
                                    <label class="form-label">Upload Payment Slip</label>
                                    <input type="file" class="form-control" name="payment_slip" required>      
                                </div>


                                <!-- Bank Transfer Details Section -->
                                <div class="card shadow-lg mt-4">
                                    <div class="card-header text-white text-center">
                                        <h4>Bank Transfer Details</h4>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><strong>Bank Name:</strong> Amana Bank</li>
                                            <li class="list-group-item"><strong>Account Holder Name:</strong> Sitara Hotel
                                                Weligama</li>
                                            <li class="list-group-item"><strong>Account Number:</strong> 8765 9678 9012 3456
                                            </li>
                                            <li class="list-group-item"><strong>Bank Branch:</strong> Weligama Branch</li>
                                            <li class="list-group-item"><strong>SWIFT/BIC Code:</strong> AACD L786</li>
                                        </ul>
                                        <div class="text-center mt-3">
                                            <button class="btn btn-success" onclick="copyDetails()">Copy Bank
                                                Details</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Buttons -->
                                <div class="d-flex justify-content-between mt-5">
                                    <button type="submit" class="btn btn-secondary action-btn">Add Bank Transfer</button>

                                </div>


                            </div>
                        </div>
                    </div>
                </form>
                <button type="submit" class="btn btn-primary action-btn"
                    onclick="window.location.href='{{ route('guest.pickpay') }}'">Next</button>
            </div>
        </div>
    </div>

    <style>
        .stepper-wrapper {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .stepper-item {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            flex: 1;
        }

        .stepper-item::before,
        .stepper-item::after {
            position: absolute;
            content: "";
            border-bottom: 2px solid #ccc;
            width: 100%;
            top: 20px;
        }

        .stepper-item::before {
            left: -50%;
            z-index: 2;
        }

        .stepper-item::after {
            left: 50%;
            z-index: 2;
        }

        .stepper-item .step-counter {
            position: relative;
            z-index: 5;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #ccc;
            margin-bottom: 6px;
        }

        .stepper-item.completed .step-counter {
            background-color: #dfa974;
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 6px rgba(145, 136, 136, 0.1);
        }

        .form-control {
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(83, 71, 71, 0.1);
        }

        .btn-primary {
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #c88a52;
            border-color: #c88a52;
        }

        .service-btn {
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            transition: 0.3s;
        }

        .service-btn:hover {
            background-color: #c88a52;
            color: white;
        }

        .action-btn {
            padding: 12px 20px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 8px;
            transition: 0.3s;
        }

        .action-btn:hover {
            background-color: #c88a52;
            border-color: #c88a52;
        }

        .payment-details {
            background-color: #f9f9f9;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .payment-details h5 {
            color: #c88a52;
        }

        /* Updated styles */
        .card-header {
            background-color: #dfa974;
            color: white;
            text-align: center;
        }

        .btn-success {
            background-color: #dfa974;
            border-color: #dfa974;
        }

        .btn-success:hover {
            background-color: #c88a52;
            border-color: #c88a52;
        }
    </style>

    <script>
        function copyDetails() {
            let details = `
                                    Bank Name: Amana Bank\n
                                    Account Holder Name: Sitara Hotel Weligama\n
                                    Account Number: 8765 9678 9012 3456\n
                                    Bank Branch: Weligama Branch\n
                                    SWIFT/BIC Code: AACD L786
                                `;
            navigator.clipboard.writeText(details);
            alert("Bank details copied!");
        }
    </script>
@endsection