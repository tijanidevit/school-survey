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
    <link rel="stylesheet" href="src/css/vendors_css.css">

    <!-- Style-->
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/skin_color.css">

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">
        <div id="loader"></div>

        <!-- header section -->
        <?php include('header.php'); ?>
        <!-- aside section -->
        <?php require_once "aside.php"; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h4 class="text-fade">Total Students</h4>
                                            <h4 class="fw-600">1,542</h4>
                                            <!-- <p class="mb-0"><span class="text-success">12%</span> Increase</p> -->
                                        </div>
                                        <div>
                                            <img src="" class="w-100" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h4 class="text-fade">Total Student at Risk</h4>
                                            <h4 class="fw-600">742</h4>
                                            <!-- <p class="mb-0"><span class="text-success">09%</span> Increase</p> -->
                                        </div>
                                        <div>
                                            <img src="" class="w-100" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h4 class="text-fade">Number of student free</h4>
                                            <h4 class="fw-600">542</h4>
                                            <!-- <p class="mb-0"><span class="text-success">49%</span> Total</p> -->
                                        </div>
                                        <div>
                                            <img src="" class="w-100" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section class="content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="table-responsive">
                                                <h3>Student Activities</h3>
                                                <?php
                                                include('authentication.php');
                                                $query = "SELECT * FROM users LEFT JOIN scorerecord ON users.id = scorerecord.user_id";
                                                $query_run = mysqli_query($conn, $query);
                                                ?>
                                                <table class="table table-hover mb-0">
                                                    <thead>
                                                        <tr>

                                                            <th>ID</th>
                                                            <th>Full Name</th>
                                                            <th>Email</th>
                                                            <th>Department</th>
                                                            <th>Level</th>
                                                            <th>Phone</th>
                                                            <th>Score</th>
                                                            <th>Condition</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        if (mysqli_num_rows($query_run) > 0) {
                                                            $auto_num = 0;
                                                            while ($row = mysqli_fetch_assoc($query_run)) {

                                                                $auto_num++;
                                                        ?>
                                                        <tr>
                                                            <td> <?php echo $auto_num; ?></td>
                                                            <td> <?php echo $row['full_studentName']; ?></td>
                                                            <td> <?php echo $row['email']; ?></td>
                                                            <td> <?php echo $row['department']; ?></td>
                                                            <td> <?php echo $row['level']; ?></td>
                                                            <td> <?php echo $row['mobile']; ?></td>
                                                            <td> <?php echo $row['result'] ? $row['result'] : 'Has not taken survey'; ?>
                                                            </td>
                                                            <td> <?php
                                                                            $result = $row['result'];
                                                                            if ($result >= 50  && $result <= 100) {
                                                                                $msg = "<div class='badge badge-success text-center mt-4'>You are free from Attrition</div>";
                                                                            } elseif ($result >= 30  && $result <= 49) {
                                                                                $msg = "<div class='badge badge-warning'>Not at Risk</div>";
                                                                            } elseif ($result >= 1  && $result <= 29) {
                                                                                $msg = "<div class='badge badge-danger'>At risk of Attrition</div>";
                                                                            } else {
                                                                                $msg = "<div class=''>Please select your choice</div>";
                                                                            }
                                                                            echo $msg;

                                                                            ?> </td>

                                                        </tr>
                                                        <?php
                                                            }
                                                        } else {
                                                            echo 'no record found';
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                    </div>
                </section>
                <!-- /.content -->
            </div>
        </div>
        <!-- /.content-wrapper -->

        <?php include('footer.php'); ?>
        <!-- Side panel -->
        <!-- quick_actions_toggle -->


    </div>
    <!-- ./wrapper -->

    <!-- Page Content overlay -->


    <!-- Vendor JS -->
    <script src="src/js/vendors.min.js"></script>
    <script src="src/js/pages/chat-popup.js"></script>
    <script src="assets/icons/feather-icons/feather.min.js"></script>

    <script src="assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>

    <!-- CRMi App -->
    <script src="src/js/template.js"></script>
    <script src="src/js/pages/dashboard.js"></script>

</body>


</html>