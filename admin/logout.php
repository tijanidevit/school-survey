<?php 
session_start();
unset($_SESSION['course_admin']);
header('location: ./');
exit();
?>