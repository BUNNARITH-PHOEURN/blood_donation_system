<div class="sidebar p-2">
    <div class="d-flex align-items-start">
        <div class="p-3">
            <img src="{{ asset('img/dashboard/logo.png') }}" alt="#" width="30">
        </div>

        <div class="text-start p-2">
            <h5 class="fw-bold">Blood Donation</h5>
            <p class="text-muted small">System</p>
        </div>
    </div>
    <hr>

    <ul class="nav flex-column small">
        <li class="nav-item">
            <a class="nav-link text-secondary-emphasis {{ request()->routeIs('dashboard') ? 'active text-danger fw-bold' : '' }}" 
                href="{{ route('dashboard') }}"><div class="bi bi-columns-gap"> Dashboard</div>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-secondary-emphasis {{ request()->routeIs('admin.donor') ? 'active text-danger fw-bold' : '' }}" 
                href="{{ route('admin.donor') }}"><div class="bi bi-people"> Donor Management</div>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-secondary-emphasis {{ request()->routeIs('#') ? 'active text-danger fw-bold' : '' }}" 
                href="#"><div class="bi bi-clipboard2"> Pre-Donations Screening</div>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-secondary-emphasis {{ request()->routeIs('#') ? 'active text-danger fw-bold' : '' }}" 
                href="#"><div class="bi bi-droplet"> Donations</div>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-secondary-emphasis {{ request()->routeIs('#') ? 'active text-danger fw-bold' : '' }}" 
                href="#"><div class="bi bi-hospital"> Blood Bags & Tests</div>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-secondary-emphasis {{ request()->routeIs('#') ? 'active text-danger fw-bold' : '' }}" 
                href="#"><div class="bi bi-box-seam"> Blood Inventory</div>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-secondary-emphasis {{ request()->routeIs('#') ? 'active text-danger fw-bold' : '' }}" 
                href="#"><div class="bi bi-file-earmark-text"> Blood Request</div>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-secondary-emphasis {{ request()->routeIs('#') ? 'active text-danger fw-bold' : '' }}" 
                href="#"><div class="bi bi-person-gear"> User Management</div>
            </a>
        </li>
    </ul>
        
    <div class="sidebar-footer">
        <hr>
        <div class="admin">
            <span name="strong" class="text-black">Admin User</span><br>
            <span class="text-muted small"> # </span>
        </div>

        <button class="logout">
            <div class="bi bi-box-arrow-right"> Logout</div>
        </button><br>
    </div>
</div>
