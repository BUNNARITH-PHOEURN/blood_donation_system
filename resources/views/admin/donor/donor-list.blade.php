<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
@extends('admin.master')
<body>
@section('head')
<div class="row">
    <div class="col-md-6">
        <h2 class="text-black fw-bold">Donor Management</h2>
        <p class="text-muted">Management and track blood donors</p>
    </div>
    <div align="right" style="margin: 4px" class="col-md-5">
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
                $("#buttonEdit").hide();
                $("#buttonAdd").show();
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
                    window.location.href="/donor"; 
                });
            });

            // Find category for edit
            $("#tbldonor").on('click', '.edit', function(){
                let id = $(this).closest('tr').data('id');
                let row = $(this).closest('tr');
                let weight = row.find('td').eq(3).text();

                $("#txtid").val(id);
                $("#weight").val(weight);

                $("#modalTitle").html("Edit Donor");
                $('#buttonAdd').hide();
                $("#buttonEdit").show();
                $("#donorModal").modal('show');

            });

            //Edit Category info
            $("#btnchange").click(function(){
                let id = $('#txtid').val();
                let weight = $('#weight').val();

                $.post('/editDonor', {txtid: id, weight:weight}, function(data){
                    //alert(status);
                    alert(data);
                    window.location.href="/donor"; 
                });
            });

            //Delete by ID
            $("#tbldonor").on('click', '.delete', function(){
                let id = $(this).closest('tr').data('id');
                if(confirm("Are you sure you want to delete this donor?")){
                    $.post('/deleteDonor', {txtid:id}, function(data){
                        alert(data);
                        window.location.href="/donor"; 
                    });
                }
            });
        });
    </script>


    <table border="1" class="table table-bordered" id="tbldonor">
        <thead>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Weight</th>
                <th>Blood Type</th>  
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($donors as $donor)
                <tr data_id="{{ $donor->id }}">
                    <td>{{ $donor->name }}</td>
                    <td>{{ $donor->gender }}</td>
                    <td>{{ $donor->date_of_birth }}</td>
                    <td>{{ $donor->weight }}</td>
                    <td>{{ $donor->blood_type }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary edit">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-danger delete">
                            <i class="bi bi-trash"></i>
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
        
        <div>
            <label for="name">Donor Name:</label>
                <select id="user_id" class="form-control">
                    <option value="">Select User</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
    </div>
    <div>
            <label for="name">Gender:</label><br>
            <input type="radio" id="gender" name="gender" class="form-check-input" Value="Male" required>Male
            <input type="radio" id="gender" name="gender" class="form-check-input" Value="Female" required>Female
    </div>
    <div>
        <label for="name">Date of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" required>
    </div>
    <div>
        <label for="name">Weight:</label>
        <input type="number" id="weight" name="weight" class="form-control" required>
    </div>
    <div>
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
            <button type="button" class="btn btn-primary" id="btnsave">Save</button>
        </div>
        
        <div id="buttonEdit">
            <button type="button" class="btn btn-primary" id="btnchange">Save Change</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- End Add Category Modal -->
</div>
</div>

</body>
</html>
@endsection