<?php

session_start();
unset($_SESSION['result']);
unset($_SESSION['id']);

header('location:auth_login.php');
exit();