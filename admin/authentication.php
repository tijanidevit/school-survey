<?php

// Define some variables
$hostname = "localhost";
$username = "root";
$password = "";
$database = "student_survey";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die('<script>alert("Connection Failed.")</script>');
}