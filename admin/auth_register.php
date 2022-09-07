<?php
// session_start();
include "authentication.php";
$msg = "";

if (isset($_POST['registerAdmin'])) {
    $full_name = $_POST['fullName'];
    $user_name = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) { // Check password is match or not
        $sql = "SELECT username, email FROM adminlogin WHERE username='$user_name' AND email='$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $msg = "<div class='alert alert-danger'> Email is already exists.</div>";
        } else {
            $insertSql = "INSERT INTO adminlogin (full_name, username, phone, email, password) VALUES ('$full_name', '$user_name', '$phone', '$email', '$password')";
            $insertResult = mysqli_query($conn, $insertSql);
            if ($insertResult) {
                $msg = "<div class='alert alert-success'>Your registration is completed. Now you can login.</div>";
                $_POST['username'] = "";
                $_POST['email'] = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                $msg = "<div class='alert alert-danger'>Your registration is not completed. Please try again.</div>";
            }
        }
    } else {
        $msg = "<div class='alert alert-danger'>Password not matched. Please try again.</div>";
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

    <title>Registration </title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="../src/css/vendors_css.css">

    <!-- Style-->
    <link rel="stylesheet" href="../src/css/style.css">
    <link rel="stylesheet" href="../src/css/skin_color.css">

</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url(../../../images/auth-bg/bg-2.jpg)">

    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">

            <div class="col-12">
                <div class="row justify-content-center g-0">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="bg-white rounded10 shadow-lg">
                            <div class="content-top-agile p-20 pb-0">
                                <h2 class="text-primary">Admin Registration</h2>
                                <p class="mb-0">Register a new membership</p>
                            </div>

                            <div class="p-40">
                                <form action="" method="post">
                                    <?php echo $msg; ?>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                            <input type="text" class="form-control ps-15 bg-transparent" name="fullName"
                                                placeholder="Full name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                            <input type="text" class="form-control ps-15 bg-transparent" name="username"
                                                placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-transparent"><i
                                                    class="ti-email"></i></span>
                                            <input type="email" class="form-control ps-15 bg-transparent" name="email"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-transparent"><i
                                                    class="ti-email"></i></span>
                                            <input type="text" class="form-control ps-15 bg-transparent" name="phone"
                                                placeholder="Phone number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
                                            <input type="password" class="form-control ps-15 bg-transparent"
                                                name="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
                                            <input type="password" class="form-control ps-15 bg-transparent"
                                                name="cpassword" placeholder="Retype Password">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_1" required>
                                                <label for="basic_checkbox_1">I agree to the <a href="#"
                                                        class="text-warning"><b>Terms</b></a></label>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-12 text-center">
                                            <button type="submit" name="registerAdmin"
                                                class="btn btn-info margin-top-10">Register</button>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </form>
                                <div class="text-center">
                                    <p class="mt-15 mb-0">Already have an account?<a href="auth_login.php"
                                            class="text-danger ms-5"> Login here...</a></p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Vendor JS -->
    <script src="../src/js/vendors.min.js"></script>
    <script src="../src/js/pages/chat-popup.js"></script>
    <script src="../../../assets/icons/feather-icons/feather.min.js"></script>


</body>

</html>