<?php

$username = "admin";
$password = "admin";

if(isset($_POST["submit"])) {
    if($_POST["username"] == $username && $_POST["password"] == $password) {
        session_start();
        $_SESSION["loggedin"] = true;
        header("Location: success.php");
    } else {
        echo "Wrong username or password.";
    }
}

?>

<html>
<head>
<title>Login Page</title>
</head>
<body>

<form action="" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
