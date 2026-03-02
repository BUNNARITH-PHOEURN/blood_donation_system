<!DOCTYPE html>
<html>
<head>
    <title>Blood Bank Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body style="background:#f5f6fa;">
    

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-2 bg-white vh-100 p-3 shadow-sm">

            <table style="padding: 4px">
            <td>
                <img src="resources/views/image/blood.png" alt="" width="50" height="50">
            </td>
            <td> 
                <h5 class="text-black fw-bold">Blood Donation</h5>
                <p class="text-muted">System</p>
            </td>
            </table>
            <hr>
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link text-danger fw-bold" href="/dashboard"> 
                    <span class="bi bi-ui-checks-grid"></span>
                    Dashboard
                </a></li>
                <li class="nav-item"><a class="nav-link text-black" href="/donor">Donors</a></li>
                <li class="nav-item"><a class="nav-link text-black" href="#">Donations</a></li>
                <li class="nav-item"><a class="nav-link text-black" href="#">Blood Stock</a></li>
                <li class="nav-item"><a class="nav-link text-black" href="#">Requests</a></li>
            </ul>
        </div>

        <!-- Top Navbar -->
        <div class="col-10">
        
            <div class="container-fluid shadow-sm p-3 mb-4 bg-white">
                <div>
                    <span class="text-muted">Welcome back,</span><br>
                    <strong>{{ session('NAME') }}</strong>
                </div>
            </div>

        <!-- Main Content -->
            @yield('dashboard')
            @yield('head')


            <!-- Blood Stock Table -->
            <div class="card mt-4 shadow-sm">
                
                <div class="card-body">
                    @yield('contents')
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>