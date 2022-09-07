<?php
session_start();
include "authentication.php";

$msg = "";

if (isset($_POST['loginAdmin'])) {
    $user_name = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM adminlogin WHERE username='$user_name' OR email='$user_name'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row['password'] == $password) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['full_name'] = $row['full_name'];
            header("Location:index.php");
        } else {
            $msg = "<div class='alert alert-danger'>Password is incorrect. Please try again.</div>";
        }
    } else {
        $msg = "<div class='alert alert-danger'>Username or Email is incorrect. Please try again.</div>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Log in </title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="src/css/vendors_css.css">

    <!-- Style-->
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/skin_color.css">

</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url(images/auth-bg/bg-1.jpg)">

    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">

            <div class="col-12">
                <div class="row justify-content-center g-0">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="bg-white rounded10 shadow-lg">
                            <div class="content-top-agile p-20 pb-0">
                                <h2 class="text-primary">Login Here</h2>
                                <p class="mb-0">Login here to continue to... </p>
                            </div>
                            <div class="p-40">
                                <form action="" method="post">
                                    <?php echo $msg; ?>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                            <input type="text" class="form-control ps-15 bg-transparent" name="username"
                                                placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text  bg-transparent"><i
                                                    class="ti-lock"></i></span>
                                            <input type="password" class="form-control ps-15 bg-transparent"
                                                name="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_1" required>
                                                <label for="basic_checkbox_1">Remember Me</label>
                                            </div>
                                        </div>
                                        <!-- /.col -->

                                        <!-- /.col -->
                                        <div class="col-12 text-center">
                                            <button type="submit" name="loginAdmin"
                                                class="btn btn-danger mt-10">LOGIN</button>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </form>
                                <div class="text-center">
                                    <p class="mt-15 mb-0">Don't have an account? <a href="auth_register.php"
                                            class="text-warning ms-5">Sign Up</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Vendor JS -->
    <script src="src/js/vendors.min.js"></script>
    <script src="src/js/pages/chat-popup.js"></script>
    <script src="assets/icons/feather-icons/feather.min.js"></script>

</body>



</html>