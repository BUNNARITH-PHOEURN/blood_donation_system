@extends('admin.master')

@section('head')

<div class="d-flex align-items-start justify-content-between">
    <div class="text-start p-2">
        <h2 class="text-black fw-bold">Donor Management</h2>
        <p class="text-muted">Management and track blood donors</p>
    </div>
    <div style="margin: 4px" class="p-2 right">
        <br>
        <a href="#" id="adddonor" class="btn btn-danger">Add New Donor</a>
    </div>
</div>

@endsection

@section('contents')

    <div class="card mt-4 shadow-sm">
        <div class="card-body">
 
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }); 

        $(function(){
            $("#adddonor").click(function(){
                $("#modalTitle").html("Add Donor");
                $("#donorModal").modal('show');
            });

            $("#btnsave").click(function(){

                let user_id = $("#user_id").val();
                let gender = $("input[name='gender']:checked").val();
                let date_of_birth = $("#date_of_birth").val();
                let weight = $("#weight").val();
                let blood_type = $("input[name='blood_type']:checked").val();

                $.post('/adddonor', {user_id:user_id, gender:gender, date_of_birth:date_of_birth, weight:weight, blood_type:blood_type}, function(data){
                    alert(data);
                    window.location.href="/admin/donor"; 
                });
            });
        })
    </script>


    <table border="1" class="table table-bordered" id="tbldonor">
        <thead>
            <tr>
                <th>Name</th>
                <th>Blood Type</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Weight</th>  
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($donors as $donor)
                <tr data_id="{{ $donor->id }}">
                    <td>{{ $donor->name }}</td>
                    <td>{{ $donor->blood_type }}</td>
                    <td>{{ $donor->gender }}</td>
                    <td>{{ $donor->date_of_birth }}</td>
                    <td>{{ $donor->weight }}</td>
                    <td>
                        <a href= "/profile/{{ $donor->id }}" class="btn btn-sm btn-outline-secondary text-dark">
                            View Detail
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $donors->links() }}
    </div>

    <!-- Modal -->
<div class="modal fade" id="donorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalTitle">Add Donor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="/adddonor" method="POST">
        @csrf
        <input type="hidden" id="txtid">
        
        <div class="p-2">
            <label for="name">Donor Name:</label>
                <select id="user_id" class="form-control">
                    <option value="">Select User</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
    </div>
    <div class="p-2">
            <label for="name">Gender:</label><br>
            <input type="radio" id="gender" name="gender" class="form-check-input" Value="Male" required>Male
            <input type="radio" id="gender" name="gender" class="form-check-input" Value="Female" required>Female
    </div>
    <div class="p-2">
        <label for="name">Date of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" required>
    </div>
    <div class="p-2">
        <label for="name">Weight:</label>
        <input type="number" id="weight" name="weight" class="form-control" required>
    </div>
    <div class="p-2">
        <label for ="name">Blood Type:</label><br>
        <input type="radio" id="blood_type" name="blood_type" class="form-check-input" Value="A+" required>A+
        <input type="radio" id="blood_type" name="blood_type" class="form-check-input" Value="A-" required>A-
        <input type="radio" id="blood_type" name="blood_type" class="form-check-input" Value="B+" required>B+
        <input type="radio" id="blood_type" name="blood_type" class="form-check-input" Value="B-" required>B-
        <input type="radio" id="blood_type" name="blood_type" class="form-check-input" Value="AB+" required>AB+
        <input type="radio" id="blood_type" name="blood_type" class="form-check-input" Value="AB-" required>AB-
        <input type="radio" id="blood_type" name="blood_type" class="form-check-input" Value="O+" required>O+
        <input type="radio" id="blood_type" name="blood_type" class="form-check-input" Value="O-" required>O-
    </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
        <div id="buttonAdd">
            <button type="button" class="btn btn-danger" id="btnsave">Save</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- End Add Category Modal -->
</div>
</div>

@endsection