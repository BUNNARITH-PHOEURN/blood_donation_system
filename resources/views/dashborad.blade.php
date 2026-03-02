<!DOCTYPE html>
<html>
<head>
    <title>Blood Bank Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f5f6fa;">

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-2 bg-white vh-100 p-3 shadow-sm">
            <h4 class="text-danger">🩸 Blood Bank</h4>
            <hr>
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link text-danger fw-bold" href="#">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Donors</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Donations</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Blood Stock</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Requests</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="col-10 p-4">

            <h2>Dashboard</h2>
            <p class="text-muted">Blood donation system overview</p>

            <!-- Cards -->
            <div class="row g-4">

                <div class="col-md-3">
                    <div class="card shadow-sm border-start border-primary border-4">
                        <div class="card-body">
                            <h6>Total Donors</h6>
                            <h3><?= $totalDonors ?></h3>
                            <small class="text-success"><?= $eligibleDonors ?> eligible for donation</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm border-start border-danger border-4">
                        <div class="card-body">
                            <h6>Total Donations</h6>
                            <h3><?= $totalDonations ?></h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm border-start border-purple border-4">
                        <div class="card-body">
                            <h6>Blood Stock</h6>
                            <h3><?= $totalUnits ?> Units</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm border-start border-warning border-4">
                        <div class="card-body">
                            <h6>Pending Requests</h6>
                            <h3><?= $pendingRequests ?></h3>
                            <small class="text-danger"><?= $criticalRequests ?> critical</small>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Low Stock Warning -->
            <?php if(mysqli_num_rows($lowStockQuery) > 0): ?>
            <div class="alert alert-warning mt-4">
                <h5>⚠ Low Stock Warning</h5>
                <?php while($row = mysqli_fetch_assoc($lowStockQuery)): ?>
                    <span class="badge bg-danger me-2">
                        <?= $row['blood_type'] ?> : <?= $row['units'] ?> units
                    </span>
                <?php endwhile; ?>
                <p class="mt-2">Stock levels are below optimal threshold.</p>
            </div>
            <?php endif; ?>

            <!-- Blood Stock Table -->
            <div class="card mt-4 shadow-sm">
                <div class="card-header">
                    Blood Stock Distribution
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Blood Type</th>
                                <th>Units</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $stock = mysqli_query($conn, "SELECT * FROM blood_stock");
                        while($row = mysqli_fetch_assoc($stock)):
                        ?>
                            <tr>
                                <td><?= $row['blood_type'] ?></td>
                                <td><?= $row['units'] ?></td>
                            </tr>
                        <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>