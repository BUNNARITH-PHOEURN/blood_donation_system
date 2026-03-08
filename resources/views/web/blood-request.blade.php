@extends ('web.app')

@section ('content')
<!-- Top -->
<section class="hero-small">
    <div class="container">
        <div class="text-center">
            <h1 class="fw-bold">Request Blood</h1><br>
            <h5>Urgent Blood requirement? We're here to help 24/7</h5>
        </div>
    </div>
</section>

<!-- Hotline -->
<section style="background-color:#fefce8;">
    <div class="container p-4">
        <div class="row g-4 container fluid">
            <div class="col-md-6">
                <div class="d-flex align-items-start">
                    <div class="p-2"> 
                        <img src="img/clock.png" alt="#" width="40">
                    </div>
                    <div class="text-start p-2">
                        <div class="fw-bold">Emergency Hotline</div>
                        <div class="text-muted">Available 24/7 for urgent requests</div>
                    </div>
                </div>
            </div>

            <div class="col-md-6" align="right">
                <a href="#" class="btn btn-danger text-light me-3 fw-bold">Call: +855-BLOOD-NOW</a>
            </div>
        </div>
    </div>
</section>

<!-- Blood Type -->
<section class="py-5">
    <div class="container p-4">
        <div class="text-center">
            <h3 class="fw-bold">Current Blood Availability</h3><br>       
                    <div class="row g-4 container-fluid">
                    @foreach($bloodStock as $blood)
                    <div class="col">
                        <div class="card text-center border-{{ $blood['color'] }} p-3">
                            <div class="class-body">
                                <h4 class="fw-bold text-center">{{ $blood['type'] }}</h4>
                                <p class="text-muted text-center small">{{ $blood['units'] }} units</p>
                                <span class="text-{{ $blood['color'] }} small">
                                {{ $blood['status'] }}
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>

        </div>
    </div>
</section>

<!-- Request -->
<section class="py-5" style="background-color: #f9fafb;">
    <div class="container">
        <div class="row g-4 justify-content-center">
        <div class="card col-md-6 p-4">
            <div class="p-4">
                <h4 class="fw-bold p-2">Blood Request Form</h4>
                <p class="text-muted">Fill out this form for non-emergency blood requests</p>
                <br>
                <form action="#" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="small">Patient Name *</label>
                            <input type="text" name="name" class="form-control" placeholder="John Doe">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small">Hospital / Clinic Name *</label>
                            <input type="hospital" name="hospital" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small">Contact Email*</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small">Blood Type *</label>
                            <select name="blood_type" class="form-control">
                            <option value=""></option>
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
                            <label class="small">Number of Units *</label>
                            <input type="number" name="weight" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small">Urgency Level *</label>
                            <select name="urgency" class="form-control">
                            <option value=""></option>
                            <option>Normal</option>
                            <option>Urgent</option>
                            <option>Emergency</option>
                            </select>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="small">Require by Date *</label>
                            <input type="date" name="require" class="form-control">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="small">Reason Request *</label>
                            <select name="reason" class="form-control">
                            <option value=""></option>
                            <option>Surgery</option>
                            <option>Accident / Trauma</option>
                            <option>Amenia</option>
                            <option>Pregnent Complications</option>
                            <option>Others</option>
                            </select>
                        </div>

                        <div class="col-md-12 mb-3">
                        <label class="small">Additional Information</label>
                        <textarea name="add_info" class="form-control"></textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <input type="checkbox" required>
                            I confirm that the information provided is accurate
                        </div>
                            <button class="btn btn-danger">Submit Blood Request</button>
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
                            <h6 class="fw-bold">Verification</h6>
                            <p class="small text-muted">Our team will verify your request and check blood availability within 30 minutes.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border-0">
                        <div class="card-body p-4">
                            <p><img src="img/second.png" width="65"></p>
                            <h6 class="fw-bold">Verification</h6>
                            <p class="small text-muted">We'll contact you to coordinate delivery details and required documentation.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border-0">
                        <div class="card-body p-4">
                            <p><img src="img/third.png" width="65"></p>
                            <h6 class="fw-bold">Verification</h6>
                            <p class="small text-muted">Blood will be delivered to the specified hospital according to your urgency level.</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>

@endsection