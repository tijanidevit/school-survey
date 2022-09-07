<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="../src/css/vendors_css.css">

    <!-- Style-->
    <link rel="stylesheet" href="../src/css/style.css">
    <link rel="stylesheet" href="../src/css/skin_color.css">

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <div id="loader"></div>

        <!-- header section -->
        <?php include('header.php'); ?>
        <!-- aside section -->
        <?php require_once "aside.php"; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <h4 class="page-title">Lecturer</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Lecturers</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main content -->
                <?php
                include('authentication.php');
                $query = "SELECT * FROM adminlogin";
                $query_run = mysqli_query($conn, $query);
                ?>
                <section class="content">

                    <div class="row">
                        <?php
                        if (mysqli_num_rows($query_run) > 0) {

                            while ($row = mysqli_fetch_assoc($query_run)) {
                                $id = $row['id'];
                                $full_name = $row['full_name'];
                                $phone = $row['phone'];
                                $email = $row['email'];

                        ?>
                        <div class="col-md-4">

                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 text-center">
                                            <a href="#"><img src="../../../images/avatar/1.jpg" alt="user"
                                                    class="img-circle img-responsive"></a>
                                        </div>
                                        <div class="col-md-8">
                                            <h3 class="card-title mb-0"><?php echo $row['full_name']; ?></h3>
                                            <small><?php echo 'LECTURER'; ?></small>
                                            <p class="mt-15">
                                                <span class="d-block mb-10"><?php echo $row['email'] ?></span>
                                                <abbr title="Phone"><i class="fa fa-phone"></i></abbr>
                                                <?php echo $row['phone']; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php
                            }
                        } else {
                            echo 'no record found';
                        }
                        ?>
                    </div>
                </section>
                <!-- /.content -->
            </div>
        </div>
        <!-- /.content-wrapper -->


        <?PHP include('footer.php'); ?>
        <!-- Side panel -->
        <!-- quick_actions_toggle -->

    </div>

    <!-- Page Content overlay -->


    <!-- Vendor JS -->
    <script src="../src/js/vendors.min.js"></script>
    <script src="../src/js/pages/chat-popup.js"></script>
    <script src="../../../assets/icons/feather-icons/feather.min.js"></script>

    <!-- CRMi App -->
    <script src="../src/js/template.js"></script>



</body>



</html>