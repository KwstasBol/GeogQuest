<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "geoquest";

// Create connection
$link= new mysqli($servername, $username, $password, $dbname);
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Check connection


$uname = mysqli_real_escape_string($link, $_REQUEST['username']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$pass = mysqli_real_escape_string($link, $_REQUEST['password']);

$sql = "INSERT INTO Users (username, email, password)
VALUES ('$uname', '$email', '$pass')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


mysqli_close($link);
?>