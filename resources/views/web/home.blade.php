@extends('web.app')

@section('content')

<!-- Top -->
<section class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="display-4 fw-bold">
                Donate Blood <br>
                Save Lives
                </h1>
                <p class="mt-4">
                Every donation can save up to three lives.
                Join thousands of heroes who are making a difference in their communities.
                </p>

                <div class="mt-4">
                    <a href="/donor" class="btn btn-light text-danger hero-btn me-3 fw-bold">
                    Become a Donor
                    </a>
                    <a href="/request-blood" class="btn btn-outline-light hero-btn fw-bold">
                    Request Blood
                    </a>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <img src="img/heart.png" alt="#" width="220">
            </div>
        </div>
    </div>
</section>

<!-- card -->
<section class="py-5">
    <div class="container">
        <div class="row text-center p-4">
            <div class="col-md-3">
                <div class="card p-4 border-0 shadow-lg" style="background-color:#fcf3f2;">
                    <div class="center"><img src="img/donor.png" alt="#" width="65"></div><br>
                    <h2 class="fw-bold">{{ $donors }}</h2>
                    <p>Total Donors</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card p-4 border-0 shadow-lg" style="background-color:#fcf3f2;">
                    <div class="center"><img src="img/blood.png" alt="#" width="65"></div><br>
                    <h2 class="fw-bold">{{ $bloodUnits }}</h2>
                    <p>Blood Units Available</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card p-4 border-0 shadow-lg" style="background-color:#fcf3f2;">
                    <div class="center"><img src="img/pulse.png" alt="#" width="65"></div><br>
                    <h2 class="fw-bold">2,517</h2>
                    <p>Live Saved</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card p-4 border-0 shadow-lg" style="background-color:#fcf3f2;">
                    <div class="center"><img src="img/partner.png" alt="#" width="65"></div><br>
                    <h2 class="fw-bold">50+</h2>
                    <p>Partner Hospitals</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- blood donation -->
<section class="py-5" style="background-color: #f9fafb;">
    <div class="container p-4">
    <div>
        <h2 class="fw-bold" style="text-align:center;">How Blood Donation Works</h2>
        <p><h5 class="text-muted" style="text-align:center;">The donation process is simple, safe, and takes about an hour from start to finish.</h5></p>
    </div>
    <br>

    <div class="row g-4 container-fluid">
        <div class="col-md-3">
            <div class="card p-3 shadow-lg border-0">
                <div class="card-body">
                    <p><img src="img/one.png" alt="#" width="40"></p><br>
                    <h5 class="fw-bold">Registration</h5>
                    <p>Sign up and provide your basic information. We'll verify your eligibility to donate.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3 shadow-lg border-0">
                <div class="card-body">
                    <p><img src="img/two.png" alt="#" width="40"></p><br>
                    <h5 class="fw-bold">Health  Screening</h5>
                    <p>Quick health check including blood pressure, temperature, and hemoglobin levels.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3 shadow-lg border-0">
                <div class="card-body">
                    <p><img src="img/three.png" alt="#" width="40"></p><br>
                    <h5 class="fw-bold">Donation</h5>
                    <p>The actual blood donation takes 8-10 minutes. Relax while you save lives!</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3 shadow-lg border-0">
                <div class="card-body">
                    <p><img src="img/four.png" alt="#" width="40"></p><br>
                    <h5 class="fw-bold">Refreshment</h5>
                    <p>Enjoy snacks and drinks while you recover. Rest for 10-15 minutes before leaving.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    
</section>

<!-- benefits -->
<section class="py-5">
    <div class="container p-4">
    <div>
        <h2 class="fw-bold" style="text-align:center;">Benefits of Donating Blood</h2>
        <p><h5 class="text-muted" style="text-align:center;">Blood donation not only saves lives but also provides health benefits to donors.</h5></p>
    </div>
    <br>

    <!-- card-1 -->
    <div class="row g-4 container-fluid">
        <div class="col-md-4">
            <div class="card p-4 shadow-sm border-0" style="background-color:#fcf3f2;">            
                <div class="card-body">
                    <p><img src="img/live.png" alt="#" width="50"></p>
                    <h5 class="fw-bold">Save Lives</h5>
                    <p>One donation can save up to three lives. Your blood helps accident victims, cancer patients, and surgery patients.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4 shadow-sm border-0" style="background-color:#fcf3f2;">
                <div class="card-body">
                    <p><img src="img/health.png" alt="#" width="50"></p>
                    <h5 class="fw-bold">Health Check</h5>
                    <p>Free health screening including blood pressure, hemoglobin levels, and infectious disease testing.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4 shadow-sm border-0" style="background-color:#fcf3f2;">
                <div class="card-body">
                    <p><img src="img/security.png" alt="#" width="50"></p>
                    <h5 class="fw-bold">Reduce Heart Disease</h5>
                    <p>Regular blood donation helps reduce iron stores, which may lower the risk of heart disease.</p>
                </div>
            </div>
        </div>
    </div>
    <br>

    <!-- card-2 -->
    <div class="row g-4 container-fluid">
        <div class="col-md-4">
            <div class="card p-4 shadow-sm border-0" style="background-color:#fcf3f2;">
                <div class="card-body">
                    <p><img src="img/blood-1.png" alt="#" width="50"></p>
                    <h5 class="fw-bold">Burn Calories</h5>
                    <p>Donating blood burns approximately 650 calories, contributing to maintaining a healthy weight.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4 shadow-sm border-0" style="background-color:#fcf3f2;">
                <div class="card-body">
                   <p><img src="img/checked.png" alt="#" width="50"></p>
                    <h5 class="fw-bold">Stimulae Blood Cells</h5>
                    <p>Donation helps stimulate the production of new blood cells, keeping your body healthy and fresh.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4 shadow-sm border-0" style="background-color:#fcf3f2;">
                <div class="card-body">
                    <p><img src="img/physicology.png" alt="#" width="50"></p>
                    <h5 class="fw-bold">Physicalogy Benefits</h5>
                    <p>Feel the satisfaction of helping others, create a positive impact, and making a real difference in your community.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- Ready to save live -->
<section class="hero-small">
    <div class="container col-md-6">
        <div class="text-center">
            <h2 class="fw-bold">Ready to Saves Live?</h2>
            <p><h5>Join thousands of donors who are making a difference. Your donation can be the difference between life and death.</h5>
            <br>
            <a href="/donor" class="btn btn-light text-danger hero-btn me-3 fw-bold">Become a Donor</a>
        </div>
    </div>
</section>

<!-- bottom -->
<section class="py-5">
    <div class="container p-4">
        <div class="row g-4 container-fluid">
            <div class="col-md-4">
                <div class="d-flex align-items-start">
                    <div class="p-2">
                        <img src="img/clock.png" alt="#" width="30">
                    </div>

                    <div class="text-start p-2">
                            <p class="fw-bold">Quick Process</p>
                            <p class="text-muted small">The entire donation process takes about one hour, and the actual donation takes only 8-10 minutes.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="d-flex align-items-start">
                    <div class="p-2"> 
                        <img src="img/safe.png" alt="#" width="30">
                    </div>

                    <div class="text-start p-2">
                            <p class="fw-bold">Safe & Sterile</p>
                            <p class="text-muted small">All equipment is sterile and used only once. 
                                <br>Blood donation is completely safe with trained professionals.</p>
                    </div>
                </div>
        </div>

            <div class="col-md-4">
                <div class="d-flex align-items-start">
                    <div class="p-2">
                        <img src="img/heart-1.png" alt="#" width="30">
                    </div>

                    <div class="text-start p-2">
                            <p class="fw-bold">Regular Donation</p>
                            <p class="text-muted small">You can donate whole blood every 56 days. Regular donors are the backbone of blood supply.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection