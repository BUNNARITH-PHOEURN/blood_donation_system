@extends('admin.master')

</script>
@section('head')

            <h2 class="text-black fw-bold">Dashboard</h2>
            <p class="text-muted">Overview of blood donation management system</p>
        <!-- Cards -->
<section class="py-3">
            <div class="row g-4">

                <div class="col-md-3">
                    <div class="card shadow-sm border-start">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="text-start p-2">
                                    <p class="text-muted small">Total Donors</p>
                                    <h3>{{ $totalDonors }}</h3>
                                </div>

                                <div class="p-3 right">
                                    <img src="img/dashboard/donor.png" alt="#" width="50">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm border-start">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="text-start p-2">
                                    <p class="text-muted small">Total Donations</p>
                                    <h3>{{ $totalDonations }}</h3>
                                </div>

                                <div class="p-3 right">
                                    <img src="img/dashboard/blood.png" alt="#" width="50">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm border-start">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="text-start p-2">
                                    <p class="text-muted small">Available Blood Units</p>
                                    <h3>{{ $totalBloods }}</h3>
                               </div>

                                <div class="p-3 right">
                                    <img src="img/dashboard/stock.png" alt="#" width="50">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm border-start">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="text-start p-2">
                                    <p class="text-muted small">Pending Request</p>
                                    <h3>{{ $pendingRequests }}</h3>
                               </div>

                                <div class="p-3 right">
                                    <img src="img/dashboard/file.png" alt="#" width="50">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
</section>

<!-- blood stock -->
@section('contents')
<section class="py-3">
    <div class="card mt-4 shadow-sm">           
    <div class="card-body">
        <h6>Blood Stock by Type</h6>
        <br>
        <div class="row g-4 container-fluid">
        @foreach($bloodStock as $type => $count)
        <div class="col-md-3">
            <div class="card border-0 container-fluid" style="background:#f9fafb;">
                <div class="card-body">
                    <h4 class="text-danger text-center">{{ $count }}</h4>
                    <p class="text-muted text-center small">Type {{ $type }}</p>
                    @if($count < 5)
                        <p class="text-danger text-center small alert alert-warning mt-2 p-2">Low Stock</p>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
        </div>

    </div>
    </div>
</section>

 <!-- Monthly Donations -->
<section class="py-3">
    <div class="card mt-4 shadow-sm">           
        <div class="card-body">
            <h6 class="mb-4">Monthly Donations</h6>

            <div class="row mt-4">
                <canvas id="donationChart"></canvas>

            </div>
        </div>
    </div>
</section>

<!-- Blood Stock Trend -->
<section class="py-3">
    <div class="card mt-4 shadow-sm">
        <div class="card-body">
            <h6 class="mb-4">Blood Stock Trend</h6>

            <div class="row mt-4">
                <canvas id="bloodChart"></canvas>
            </div>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const donationCtx = document.getElementById('donationChart');

new Chart(donationCtx, {
    type: 'bar',
    data: {
        labels: @json($months),
        datasets: [{
            label: 'Donations',
            data: @json($donations),
            backgroundColor: '#e31c24',
            borderRadius: 8
        }]
    },
    options:{
        responsive:true,
        plugins:{
            legend:{display:false}
        },
        scales:{
            y:{
                beginAtZero:true
            }
        }
    }
});

document.addEventListener("DOMContentLoaded", function(){
const bloodCtx = document.getElementById('bloodChart');

new Chart(bloodCtx, {
    type: 'line',
    data: {
        labels: @json($months),
        datasets: [

        {
            label: 'A+',
            data: @json($a_pos),
            borderColor: '#ff4500',
            tension:0.4
        },

        {
            label: 'A-',
            data: @json($a_neg),
            borderColor: '#8a2be2',
            tension:0.4
        },

        {
            label: 'AB+',
            data: @json($ab_pos),
            borderColor: '#16a34a',
            tension:0.4
        },

        {
            label: 'AB-',
            data: @json($ab_neg),
            borderColor: '#0ea5e9',
            tension:0.4
        },

        {
            label: 'B+',
            data: @json($b_pos),
            borderColor: '#d97706',
            tension:0.4
        },

        {
            label: 'B-',
            data: @json($b_neg),
            borderColor: '#ec4899',
            tension:0.4
        },

        {
            label: 'O+',
            data: @json($o_pos),
            borderColor: '#ef4444',
            tension:0.4
        },

        {
            label: 'O-',
            data: @json($o_neg),
            borderColor: '#2563eb',
            tension:0.4
        }

        ]
    },
    options:{
        responsive:true,
        plugins:{
            legend:{
                position:'bottom'
            }
        }
        }
});
});
</script>
@endsection