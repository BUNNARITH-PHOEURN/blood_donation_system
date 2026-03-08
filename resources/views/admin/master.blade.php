<!DOCTYPE html>
<html>
<head>
    <title>Blood Bank Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .sidebar{
            width:250px;
            height:100vh;
            background:#ffffff;
            position:fixed;
        }

        .sidebar a{
            color:white;
            padding:12px 20px;
            display:block;
            text-decoration:none;
        }

        .sidebar a:hover{
            background:#ffffff;
        }

       .nav-link.active{
            color: #dc3545 !important;
            font-weight: bold;
        }

        .main-content{
            margin-left:250px;
        }

        .sidebar-footer{
        position: absolute;
        bottom: 10px;
        width:220px;
        }

        .logout{
        margin-top:15px;
        width:100%;
        padding:10px;
        border-radius:8px;
        border:1px solid #ddd;
        background:white;
        cursor:pointer;
        }

        .logout:hover{
        background:#f5f5f5;
        }

</style>
</head>
<body style="background:#f5f6fa;">

            @include('admin.nav')

        <div class="main-content">
            <div class="container-fluid p-4">
                <div class="row">

                <!-- Sidebar -->
                <!-- Main Content -->
                @yield('head')

                <!-- Blood Stock Table -->
                @yield('contents')
                </div>

            </div>
        </div>


</body>
</html>