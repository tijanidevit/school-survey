<?php 
	session_start();
	include_once '../../dbconfiguration.php';

	$username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM admin WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row['password'] == $password) {
            $_SESSION['course_admin'] = $row;
			echo 1;
        } else {
            echo "<div class='alert alert-danger'>Password is incorrect. Please try again.</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Invalid username.</div>";
    }
	
?>