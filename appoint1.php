<?php
require_once('connect.php');
include('header.php');

$phone_number = $_POST['number'];
$date1 = $_POST['date'];
$date2=date("Y-m-d");

if(!preg_match("/^[0-9]{10}$/",$phone_number)) {
    // Phone number is not 10 digits
    echo "Invalid phone number. Phone number should be 10 digits.";
    exit();
}

// Validate date
if($date1<$date2)
{
    // Date is after current date
    echo "Invalid date.You have entered wrong date we cannot travel back in Time We Are SORRY!";
    exit();
}


if(isset($_POST['name']))
{
    $username1=mysqli_real_escape_string($conn,$_POST['name']);
    $sector1=mysqli_real_escape_string($conn,$_POST['sector']);
    $number1=mysqli_real_escape_string($conn,$_POST['number']);
    $date1=mysqli_real_escape_string($conn,$_POST['date']);
    if(empty($username1)|| empty($sector1) || empty($number1) || empty("$date1")
    )
    {

        echo "Fill Document Carefully!";
       
    }    
    else
    {
    $sql1= "insert into appointment(name,sector,number,dateandtime) values ('$username1','$sector1','$number1','$date1')";
    $result1 =mysqli_query($conn,$sql1);
    if($result1)
    {
        echo"Dear $username1";
        echo"</br>";
        echo"You Have Successfully registetered Please Visit the office on $date1 for Checkup of $sector1";
        echo"</br>";
        echo"we will call you on your $number1 on $date1";
    }
else
{
    echo'Check your Valid Input';
}}
}
?>