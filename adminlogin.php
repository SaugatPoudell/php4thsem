

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<?php include('header.php'); ?>
    <img src="https://www.nicepng.com/png/detail/263-2636180_admin-login-png-admin-login-image-png.png">
    <form action="" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>


<?php
include('connect.php');

$sql = "SELECT username, password FROM admin";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) >0)
{
    while($row =mysqli_fetch_assoc($result))
    {
     $username=$row["username"];
     $password=$row["password"];
    }
}
else
{
    echo"PR oblem";
}


if(isset($_POST["submit"])) {
    if($_POST["username"] == $username && $_POST["password"] == $password) {
        session_start();
        $_SESSION["loggedin"] = true;
        header("Location: adminpanel.php");
    } else {
        echo 'You have entered wrong credentials';
    }
}

?>

</body>
</html>