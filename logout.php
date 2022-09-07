<?php

session_start();
unset($_SESSION['course_user']);
unset($_SESSION['result']);
unset($_SESSION['id']);

header('location:./');
exit();