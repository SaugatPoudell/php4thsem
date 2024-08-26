<?php
include('header.php');
include('connect.php');
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: adminlogin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="booked.css">
</head>
<body>
    <center>
    <table class="table">
        <thead>
        <tr><th>RegNo</th><th>Name</th><th>Sector</th><th>PhoneNo</th><th>Date</th>
</thead>

     <?php  
     $sql1 = "SELECT * FROM appointment";
     // id,name,sector,number,dateandtime
     $result1=mysqli_query($conn,$sql1);
   
     if (mysqli_num_rows($result1)>0) 
     {
        while($row=mysqli_fetch_assoc($result1))
        
        {
            $RegNo=$row["id"];
            $Name=$row["name"];
            $Sector=$row["sector"];
            $Phone=$row["number"];
            $Date=$row["dateandtime"];
        
 
            echo"<tr>";
    echo"<td>$RegNo</td>";
    echo"<td>$Name</td>";
    echo"<td>$Sector</td>";
    echo"<td>$Phone</td>";
    echo"<td>$Date</td>";
    echo"</tr>";
    }
}

    mysqli_close($conn);
   
?>
</table>
</center>
</body>
</html>
