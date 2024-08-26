<?php
session_start();
if(isset($_POST['submit']))
{
    session_destroy();
    unset($_SESSION['loggedin']);
    header("Location:adminlogin.php");
}
echo"YOu have Logged out";
echo"click here to login again";?>
<html>
<body>
<a href="adminlogin.php">Click Here</a>
</body>
</html>
