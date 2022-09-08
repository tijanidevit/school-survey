<?php
session_start();

include('functions.php');
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
                        
                        $result = $_SESSION['result'];
                        $msg = getMessage($result);
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