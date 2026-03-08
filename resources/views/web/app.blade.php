<!DOCTYPE html>
<html>
<head>
    <title>LifeBlood</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            font-family: Garamond, sans-serif;
        }

        .hero{
            background:#e30613;
            color:white;
            padding:120px 0;
        }

        .hero-small{
            background:#e30613;
            color:white;
            padding:60px 0;
        }

        .hero-btn{
            padding:12px 30px;
            border-radius:8px;
        }

        .navbar-brand{
            font-weight:bold;
        }

        .footer{
            background:#101828;
            padding:50px 0;
        }

        .nav-link.active{
            color: #dc3545 !important;
            font-weight: bold;
        }

    </style>

</head>
<body>

    @include('web.navbar')

<div>
    @yield('content')
</div>

<!-- Footer -->
<section class="footer">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-3">
                <h5><a class="fw-bold text-light navbar-brand" href="/">
                    <img src="img/logo.png" alt="#" width="20"> LifeBlood
                </a> </h5>
                <p class="small" style="color:#848b99;">Saving lives through blood donation. Join us in making a difference.</p>
            </div>

            <div class="col-md-3">
                <h5 class="text-white fw-bold">Quick Links</h5>
                <div class="small" style="color:#848b99;">
                    <a href="/" class="nav-link">Home</a>
                    <a href="/about" class="nav-link">About Us</a>
                    <a href="/donor" class="nav-link">Become a Donor</a>
                </div>
            </div>

            <div class="col-md-3">
                <h5 class="text-white fw-bold">Contact</h5>
                <div class="small" style="color:#848b99;">
                    Email: info@lifeblood.com<br>
                    Phone: +855-BLOOD-NOW<br>
                    Address: 180 St, Phnom Penh
                </div>
            </div>

            <div class="col-md-3">
                <h5 class="text-white fw-bold">Emergency</h5>
                <p class="small" style="color:#848b99;">Need urgent blood?</p>
                <a href="/request-blood" class="btn btn-danger text-light">
                    <div class="small">Blood Request</div>
                </a>
            </div>
        </div>
        <hr style="color:#848b99;">
        <div class="container col-md-6">
            <div class="text-center">
            <p class="small" style="color:#848b99;">© 2026 LifeBlood. All rights reserved. Saving lives, one donation at a time.</p>
        </div>
        </div>
        <!-- credit -->

    </div>

</section>

</body>
</html>