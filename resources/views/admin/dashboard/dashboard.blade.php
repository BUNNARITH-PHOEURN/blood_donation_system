@extends('admin.master')


@section('head')

            <h2 class="text-black fw-bold">Dashboard</h2>
            <p class="text-muted">Overview of blood donation management system</p>
        <!-- Cards -->
            <div class="row g-4">

                <div class="col-md-3">
                    <div class="card shadow-sm border-start">
                        <div class="card-body">
                            <small class="text-muted">Total Donors</small>
                            <h3>{{ $totalDonors }}</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm border-start">
                        <div class="card-body">
                            <small class="text-muted">Total Donations</small>
                            <h3>{{ $totalDonations }}</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm border-start">
                        <div class="card-body">
                            <small class="text-muted">Available Blood Units</small>
                            <h3>{{ $totalDonations }}</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm border-start">
                        <div class="card-body">
                            <small class="text-muted">Pending Request</small>
                            <h3>{{ $pendingRequests }}</h3>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@section('contents')
    <div class="card mt-4 shadow-sm">           
    <div class="card-body">

        <h6>Blood Stock by Type</h6>
        <br>
        
        <div class="row g-4 container-fluid">
        @foreach($bloodStock as $type => $count)
        <div class="col-md-3">
            <div class="card border-0 container-fluid" style="background:#f5f6fa;">
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
@endsection