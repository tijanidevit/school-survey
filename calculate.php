<?php

session_start();

include('dbconfiguration.php');

// if (isset($_POST['calculate'])) { // Check register button is clicked or not
// Define some variables
$result = $_GET['result'];
$user_id = $_SESSION['id'];



$insertSql = "INSERT INTO scoreRecord (user_id, result) VALUES ('$user_id', '$result')";
$insertResult = mysqli_query($conn, $insertSql);
if ($insertResult) {
    $_SESSION["result"] = $result;
    echo $result;
    // $msg = "<div class='alert alert-success'>Your registration is completed. Now you can login.</div>";
    header('location:result.php');
} else {
    echo "unknow error occur";
    // $msg = "<div class='alert alert-danger'>Your registration is not completed. Please try again.</div>";
}
// }