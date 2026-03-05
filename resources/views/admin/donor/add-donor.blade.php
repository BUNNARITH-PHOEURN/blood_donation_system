<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
            <label for="name">Donor Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
    </div>
    <div>
            <label for="name">Gender:</label>
            <input type="radio" id="Male" name="gender" class="form-control" Value="M" required>
            <label for="Male">Male</label>
            <input type="radio" id="Female" name="gender" class="form-control" Value="F" required>
            <label for="Female">Female</label>
    </div>
    <div>
        <label for="name">Date of Birth:</label>
        <input type="date" id="DOB" name="DOB" class="form-control" required>
    </div>
    <div>
        <label for="name">Weight:</label>
        <input type="number" id="weight" name="weight" class="form-control" required>
    </div>
    <div>
        <label for ="name">Blood Type:</label>
        <input type="radio" id="a+" name="blood_type" class="form-control" Value="A+" required>
        <label for="A+">A+</label>
        <input type="radio" id="a-" name="blood_type" class="form-control" Value="A-" required>
        <label for="A-">A-</label>
        <input type="radio" id="b+" name="blood_type" class="form-control" Value="B+" required>
        <label for="B+">B+</label>
        <input type="radio" id="b-" name="blood_type" class="form-control" Value="B-" required>
        <label for="B-">B-</label>
        <input type="radio" id="ab+" name="blood_type" class="form-control" Value="AB+" required>
        <label for="AB+">AB+</label>
        <input type="radio" id="ab-" name="blood_type" class="form-control" Value="AB-" required>
        <label for="AB-">AB-</label>
        <input type="radio" id="o+" name="blood_type" class="form-control" Value="O+" required>
        <label for="O+">O+</label>
        <input type="radio" id="o-" name="blood_type" class="form-control" Value="O-" required>
        <label for="O-">O-</label>
    </div>
    <div>
        <label for="name">Phone Number:</label>
        <input type="text" id="phone" name="phone" class="form-control" required>
    </div>
    <div>
        <label for="name">Last Donation Date:</label>
        <input type="date" id="LDD" name="LDD" class="form-control">
    </div>
    <button type="submit">Create</button>
</body>
</html>