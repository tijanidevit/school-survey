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
                            <h4 class="page-title">Students</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Students</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="table-responsive">

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
                <!-- /.content -->
            </div>
        </div>
        <!-- /.content-wrapper -->

        <?php include('footer.php'); ?>


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