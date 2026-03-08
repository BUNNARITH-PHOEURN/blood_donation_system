@extends ('web.app')

@section ('content')
<!-- Top -->
<section class="hero-small">
    <div class="container">
        <div class="text-center">
            <p><img src="img/heart-2.png" alt="#" width="80"></p>
            <h1 class="fw-bold">Become a Blood Donor</h1>
            <p><h5>Join our community of heroes and help save lives</h5></p>
        </div>
    </div>
</section>

<!-- Requirement -->
<section class="py-5">
    <div class="container p-4">
            <div class="text-center">
                <h2 class="fw-bold">Eligibility Requirements</h2>
                <p class="text-muted">Please review these requirements before registering</p>
            </div>

            <div class="row g-4 p-4 container-fluid justify-content-center">
                <div class="col-md-5">
                    <div class="card" style="background-color:#f1fdf4; border-color:#e3fbeb;">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-start">
                                <div class="p-2"> 
                                    <img src="img/can.png" alt="#" width="20">
                                </div>

                                <div class="text-start p-2">
                                    <h6 class="fw-bold">You Can Donate If:</h6>
                                    <p class="small text-muted">
                                        • Age between 18-65 years<br>
                                        • Weight at least 50 kg (110 lbs)<br>
                                        • Generally in good health<br>
                                        • At least 56 days since last donation<br>
                                        • No recent tattoos or piercings (last 12 months)<br>
                                        • Not pregnant or breastfeeding<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="card" style="background-color:#fef3f3; border-color:#fee5e5;">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-start">
                                <div class="p-2"> 
                                    <img src="img/cannot.png" alt="#" width="20">
                                </div>

                                <div class="text-start p-2">
                                    <h6 class="fw-bold">You Cannot Donate If:</h6>
                                    <p class="small text-muted">
                                        • Currently taking antibiotics<br>
                                        • Have cold, flu, or fever<br>
                                        • Recent surgery (within 6 months)<br>
                                        • History of hepatitis, HIV, or malaria<br>
                                        • Chronic conditions (consult first)<br>
                                        • Currently on certain medications<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>

<!-- Register -->
<section class="py-5" style="background-color: #f9fafb;">
    <div class="container">
        <div class="row g-4 justify-content-center">
        <div class="card col-md-6 p-4">
            <div class="p-4">
                <h4 class="fw-bold p-2">Donor Registration Form</h4><br>
                <form action="#" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="small">Full Name *</label>
                            <input type="text" name="name" class="form-control" placeholder="John Doe">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small">Email *</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small">Phone *</label>
                            <input type="text" name="phone" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small">Date of Birth *</label>
                            <input type="date" name="dob" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small">Blood Type *</label>
                            <select name="blood_type" class="form-control">
                            <option value="">Select Blood Type</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>O+</option>
                            <option>O-</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small">Weight (kg) *</label>
                            <input type="number" name="weight" class="form-control">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="small">Last Blood Donation Date</label>
                            <input type="date" name="last_donation" class="form-control">
                        </div>

                        <div class="col-md-12 mb-3">
                        <label class="small">Medical Conditions</label>
                        <textarea name="medical_conditions" class="form-control"></textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <input type="checkbox" required>
                            I confirm that the information provided is accurate
                        </div>
                        <button class="btn btn-danger">Register Donor</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Next -->
<section class="py-5">
    <div class="container p-4">
       <div class="text-center">
            <h2 class="fw-bold">What Happens Next?</h2>
            <p class="text-muted">Please review these requirements before registering</p>
        </div> 

        <div class="row g-4 p-4 container-fluid justify-content-center text-center">
                <div class="col-md-3">
                    <div class="card border-0">
                        <div class="card-body p-4">
                            <p><img src="img/first.png" width="65"></p>
                            <h5 class="fw-bold">Verification</h5>
                            <p class="small text-muted">We'll review your registration and verify your eligibility within 24-48 hours.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border-0">
                        <div class="card-body p-4">
                            <p><img src="img/second.png" width="65"></p>
                            <h5 class="fw-bold">Confirmation</h5>
                            <p class="small text-muted">You'll receive a confirmation email with your donor ID and appointment details.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border-0">
                        <div class="card-body p-4">
                            <p><img src="img/third.png" width="65"></p>
                            <h5 class="fw-bold">First Donation</h5>
                            <p class="small text-muted">Visit your nearest center on the scheduled date to make your first donation.</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>

@endsection