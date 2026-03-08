@extends('admin.master')

@section('head')
    <div class="text-start p-2">
        <h2 class="text-black fw-bold">Donor Profile</h2>
        <p class="text-muted">Complete donor information and history</p>
    </div>

<!-- Personal Info -->
<section class="py-3">
    <div class="row g-4">

        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="p-2">
                        <h6>Personal Information</h6><br>
                        <div class="row g-4">
                            <div class="col-md-5 p-2">
                                <div class="p-2">
                                    <p>
                                        <div class="text-muted small fw-bold">Full Name:</div>
                                        <div>{{ $donor->name }}</div>
                                    </p>

                                    <p>
                                        <div class="text-muted small fw-bold">Date of Birth:</div>
                                        <div>{{ $donor->date_of_birth }} ({{ $age }} years)</div>
                                    </p>

                                    <p>
                                        <div class="text-muted small fw-bold">Weight:</div>
                                        <div>{{ $donor->weight }} kg</div>
                                    </p>
                                </div>
                            </div>    

                            <div class="col-md-5 p-2">
                                <div class="p-2">
                                    <p>
                                        <div class="text-muted small fw-bold">Blood Type:</div>
                                        <div><span class="badge bg-danger">{{ $donor->blood_type }}</span></div>
                                    </p>

                                    <p>
                                        <div class="text-muted small fw-bold">Gender:</div>
                                        <div>{{ $donor->gender }}</div>
                                    </p>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="p-1">
                            <div class="bi bi-envelope"> {{ $donor->email }}</div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>


        <!-- Statistics -->

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="p-2">
                        <h6>Personal Information</h6><br>

                        <div class="card text-center border-0 p-2">
                            <div class="card-body" style="background-color:#FCE2E2;">
                                <div class="text-danger"><i class="bi bi-activity" style="font-size: 24px;"></i></div>
                                <h3 class="text-danger">{{ $totalDonations }}</h3>
                                <p class="small text-muted">Total Donations</p>
                            </div>
                        </div>

                        <div class="card text-center border-0 p-2">
                            <div class="card-body" style="background-color:#e6edff;">
                                <div class="text-primary"><i class="bi bi-calendar" style="font-size: 24px;"></i></div>
                                <p class="text-muted small">Last Donation<br>
                                {{ $lastDonation ? \Carbon\Carbon::parse($lastDonation->created_at)->format('m/d/Y') : 'No donation yet' }}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection

@section('contents')
<!-- Donation History -->
<section class="py-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="p-2">
                <h6>Donation History</h6><br>

                <table class="table">
                    <thead class="small">
                        <tr>
                            <th>Date</th>
                            <th>Hospital</th>
                            <th>Blood Type</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody class="small">
                    @foreach($donations as $donation)
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($donation->created_at)->format('m/d/Y') }}</td>

                            <td>{{ $donation->hospital_name }}</td>

                            <td>
                                <span class="badge bg-danger">
                                {{ $donor->blood_type }}
                                </span>
                            </td>

                            <td>
                                <span class="badge bg-warning">
                                {{ $donation->status }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection