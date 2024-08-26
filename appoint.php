<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link rel="stylesheet" href="appoi.css">
</head>
<body>
    <?php include('header.php');
    include('connect.php');
    ?>
    <center>
    <h2>Welcome to making Apointment</h2>
    <form method=post action="appoint1.php">
        <div class="mb-3">
    <label class="form-label"> Enter your name</label>
        <input class="form-control" type="text" name="name" placeholder="Full Name" class="input">
</div>
        <div class="mb-3">
        <label class="form-label"> Enter your sector</label>
        <select class="form-select" name="sector">
            <option value="ear">Ear</option>
            <option value="nose">Nose</option>
            <option value="throat">Throat</option>
        </select>
</div>

<div class="mb-3">
<label class="form-label"> Enter your phone number</label>
        <input class="form-control" type="text" name="number" placeholder="Enter Number" class="input">
</div>
        <div class="mb-3">
        <p>Enter the prefered date</p>
        <input class="form-control" type="date"name="date" class="input">
</div>


        <br>
        <br>
        <br>
        <input class="btn btn-primary" type="submit" name="submit"></center>
        <!-- need to validate form using javacript; -->
        <?php
$phone_number = $_POST['phone_number'];
$date1 = $_POST['date'];

if(!preg_match("/^[0-9]{10}$/",$phone_number)) {
    // Phone number is not 10 digits
    echo "Invalid phone number. Phone number should be 10 digits.";
}

// Validate date
if(strtotime($date1) > time()) {
    // Date is after current date
    echo "Invalid date. Date should be before current date.";
}
?>

     -->
</body>
</html>