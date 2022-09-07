<?php
session_start();
if (isset($_SESSION['course_user'])) {
    header('location: new');
}
include('dbconfiguration.php');
$msg = "";

if (isset($_POST['submit'])) { // Check register button is clicked or not
    // Define some variables
    $email = $_POST['email'];
    $st_fullName = $_POST['st_fullName'];
    $matric_no = $_POST['matric_no'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) { // Check password is match or not
        $sql = "SELECT matric_no FROM users WHERE matric_no='$matric_no'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $msg = "<div class='alert alert-danger'>You have already registered with this Matric number.</div>";
        } else {
            $insertSql = "INSERT INTO users (full_studentName, matric_no, email, password) VALUES ('$st_fullName', '$matric_no', '$email', '$password')";
            $insertResult = mysqli_query($conn, $insertSql);
            if ($insertResult) {

                $sql = "SELECT * FROM users WHERE matric_no='$email' OR email='$email'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['course_user'] = $row;     
                }
                header('location: new');
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
<html lang="zxx">

<?php include('head.php'); ?>

<body>

    <!--begin header -->
    <!-- <?php include('header.php'); ?> -->
    <!--end header -->

    <!--begin section-grey -->
    <section class="section-grey my-5">

        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <form action="" method="POST">
                <div class="row align-items-center">

                    <!--begin col-md-6-->
                    <div class="col-md-6">

                        <div class="nav flex-column nav-pills margin-right-25 mx-4" id="v-pills-home" role="tablist"
                            aria-orientation="vertical">
                            <?php echo $msg; ?>
                            <h2>Register Here</h2>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="st_fullName"
                                    placeholder="Enter your full name" required>
                            </div>
                            <div class=" input-group mb-3">
                                <input type="text" class="form-control" name="matric_no" placeholder="Matric number"
                                    required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Email"
                                    required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" name="password" placeholder="Password"
                                    required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" name="cpassword"
                                    placeholder="Confirm Password" required>
                            </div>
                            <div class="input-group">
                                <button type="submit" name="submit" class="btn btn-danger">Register</button>
                            </div>
                            <p class="mt-3">Do you have already an account? <a href="loginUser.php">Login Here</a></p>


                        </div>

                    </div>
                    <!--end col-md-6-->

                    <!--begin col-md-6 -->
                    <div class="col-md-6">

                        <div class="tab-content margin-left-20" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <img src="images/about2.jpg" class="width-100 image-shadow top-margins-images"
                                    alt="pic">
                            </div>

                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <img src="images/about5.jpg" class="width-100 image-shadow top-margins-images"
                                    alt="pic">
                            </div>

                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <img src="images/about1.jpg" class="width-100 image-shadow top-margins-images"
                                    alt="pic">
                            </div>

                        </div>

                    </div>
                </div>

            </form>
            <!--end row-->

        </div>
        <!--end container-->

    </section>
    <!--end section-grey-->


    <!--begin section-bg-2 -->
    <section class="section-bg-2" id="contact">

        <div class="section-bg-overlay"></div>

        <!--begin container-->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12-->
                <div class="col-md-12 text-center padding-bottom-10">

                    <h2 class="section-title white-text">Contact Us</h2>

                    <p class="section-subtitle white">Have any queries? Get in touch today.</p>

                </div>
                <!--end col-md-12 -->

            </div>
            <!--end row -->

            <!--begin row-->
            <div class="row justify-content-md-center">

                <!--begin col-md-8-->
                <div class="col-md-8 text-center margin-top-10">

                    <!--begin contact-form-wrapper-->
                    <div class="contact-form-wrapper wow bounceIn" data-wow-delay="0.5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">

                        <!--begin form-->
                        <div>

                            <!--begin success message -->
                            <p class="contact_success_box" style="display:none;">We received your message and you will
                                hear from us soon. Thank You!</p>
                            <!--end success message -->

                            <!--begin contact form -->
                            <form id="contact-form" class="row contact-form contact" action="" method="post">

                                <!--begin col-md-6-->
                                <div class="col-md-6">

                                    <input class="contact-input" required="" name="contact_names"
                                        placeholder="Your Name*" type="text">

                                    <input class="contact-input" required="" name="contact_phone"
                                        placeholder="Phone Number*" type="text">

                                </div>
                                <!--end col-md-6-->

                                <!--begin col-md-6-->
                                <div class="col-md-6">

                                    <input class="contact-input" required="" name="contact_matric_no"
                                        placeholder="matric_no Adress*" type="matric_no">

                                    <select class="contact-input" required="" name="contact_ticket">

                                        <option value="">Choose Option</option>

                                        <option value="Individual">Individual</option>

                                        <option value="Corporate">Corporate</option>

                                    </select>

                                </div>
                                <!--end col-md-6-->

                                <!--begin col-md-12-->
                                <div class="col-md-12">

                                    <textarea class="contact-input" rows="2" cols="20" name="contact_message"
                                        placeholder="Your Message..."></textarea>

                                    <input value="Get In Touch" class="contact-submit" type="submit">

                                </div>
                                <!--end col-md-12-->

                            </form>
                            <!--end contact form -->

                        </div>
                        <!--end form-->

                    </div>
                    <!--end contact-form-wrapper-->

                </div>
                <!--end col-md-8-->

            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </section>
    <!--end section-bg-2 -->

    <!--begin footer -->
    <?php include('footer.php'); ?>
    <!--end footer -->


    <!-- Load JS here for greater good =============================-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollTo-min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/custom.js"></script>


</body>

</html>