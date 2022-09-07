<?php
session_start();

?>

<!DOCTYPE html>
<html>

<?php include('head.php'); ?>


<body>
    <?php include('header.php'); ?>
    <!--begin header -->

    <div class="pt-5"></div>
    <!-- <div class="pt-5"></div> -->
    <!-- <div class="pt-5"></div> -->

    <br><br>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-5 col-12 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <?php
                        $msg = "";
                        $result = $_SESSION['result'];
                        if ($result >= 100  && $result <= 140) {
                            $msg = "<div class='alert alert-success text-center mt-4'>You're flying high. You are made for the stars, expect great results</div>";
                        } elseif ($result >= 70  && $result <= 99) {
                            $msg = "<div class='alert alert-success'>You're trying, a little bit of efforts and you'd be flying high</div>";
                        } elseif ($result >= 50  && $result <= 69) {
                            $msg = "<div class='alert alert-info'>You're on a average performance, please buckle up and join the students at the top
                            </div>";
                        } elseif ($result >= 30  && $result <= 49) {
                            $msg = "<div class='alert alert-warning'>Oh! A little bit poor. You can perform better. Please, put in more efforts</div>";
                        } elseif ($result >= 0  && $result <= 29) {
                            $msg = "<div class='alert alert-danger'>We are sorry to say this, your performance level is very low. You need to work very hard to avoid failure</div>";
                        } else {
                            $msg = "<div class='alert alert-danger'>An unexpected error. Please try again!</div>";
                        }
                        ?>

                        <h5 class="card-title"></h5>
                        <!-- <strong> Your Score is <?php #echo 'your score is' . $result; ?> </strong> -->
                        <strong> <?php echo $msg; ?></strong>
                        <div class="pt-4"></div>

                        <a href="logout.php" class="btn btn-primary">Logout...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
                        <br> <br>
    <!-- <div class="pb-5"></div> -->
    <!-- <div class="pb-5"></div> -->
    <div class="pb-5"></div>
    <div class="pb-5"></div>

    <div class="clearfix"></div>
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