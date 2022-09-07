<?php
//mysql://b0a969d21c295a:94cc4f3c@eu-cdbr-west-03.cleardb.net/heroku_2ec20082ec190ef?reconnect=true
// Define some variables
$hostname = "localhost";
$username = "root";
$password = "";
$database = "student_course";



// $hostname = "eu-cdbr-west-03.cleardb.net";
// $username = "b0a969d21c295a";
// $password = "94cc4f3c";
// $database = "heroku_2ec20082ec190ef";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die('<script>alert("Connection Failed.")</script>');
}