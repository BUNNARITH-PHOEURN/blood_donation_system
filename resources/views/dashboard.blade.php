@extends('master')


@section('dashboard')

            <h2>Dashboard</h2>
            <p class="text-muted">Blood donation system overview</p>
        <!-- Cards -->
            <div class="row g-4">

                <div class="col-md-3">
                    <div class="card shadow-sm border-start border-primary border-4">
                        <div class="card-body">
                            <h6>Total Donors</h6>
                            <h3>#</h3>
                            <small class="text-success"># eligible for donation</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm border-start border-danger border-4">
                        <div class="card-body">
                            <h6>Total Donations</h6>
                            <h3>#</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm border-start border-purple border-4">
                        <div class="card-body">
                            <h6>Blood Stock</h6>
                            <h3># Units</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm border-start border-warning border-4">
                        <div class="card-body">
                            <h6>Pending Requests</h6>
                            <h3>#</h3>
                            <small class="text-danger"># critical</small>
                        </div>
                    </div>
                </div>

            </div>
            @endsection