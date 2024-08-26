<?php
$host="localhost";
$user="root";
$password="";
$db="hms";
$conn=mysqli_connect($host,$user,$password,$db);
if($conn)
{

}
else
{
    die("Error". mysqli_connect_error());
}
?>