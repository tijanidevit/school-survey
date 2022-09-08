<?php 
session_start();
if (! isset($_SESSION['course_admin'])) {
  header('location: ./');
  exit();
}

if (!isset($_GET['id'])) {
    header('location: students');
    exit();
}

include('../dbconfiguration.php');
include('../functions.php');
$user_id = $_GET['id'];

$sql1 = "SELECT * FROM users WHERE id = $user_id";
$res = mysqli_query($conn, $sql1);
$student = mysqli_fetch_assoc($res);

if (empty($student)) {
    header('location: students');
    exit();
}

$sql = "SELECT * FROM scorerecord JOIN users on users.id = scorerecord.user_id WHERE user_id = $user_id ORDER BY scorerecord.id DESC";
$result = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>

<html lang="zxx">

<head>
    <?php include_once 'components/head.php'; ?>
</head>

<body>
	<div class="loader">
     <div class="spinner">
      <img src="assets/images/loader.gif" alt=""/>
  </div> 
</div>
<!-- Main Body -->
<div class="page-wrapper">
    <!-- Header Start -->
    <?php include_once 'components/header.php'; ?>
    <!-- Sidebar Start -->

    <?php include_once 'components/sidebar.php'; ?>

    <!-- Container Start -->
    <div class="page-wrapper">
        <div class="main-content">
            <!-- Page Title Start -->
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-title-wrapper">
                        <div class="page-title-box">
                            <h4 class="page-title bold">Dashboard</h4>
                        </div>
                        <div class="breadcrumb-list">
                            <ul>
                                <li class="breadcrumb-link">
                                    <a href="./"><i class="fas fa-home mr-2"></i>Dashboard</a>
                                </li>
                                <li class="breadcrumb-link active">Admin</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Products Orders Start -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card chart-card">
                        <div class="card-header">
                            <h4 class="has-btn"><?php echo $student['full_studentName'] ?> (<?php echo $student['matric_no'] ?>) Assessments</h4>
                        </div>


                        <div class="card-body pb-4">
                            <div class="chart-holder">
                                <div class="table-responsive">
                                    <table id="example" class="table table-styled mb-0">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Student</th>
                                                <th>Email</th>
                                                <th>Matric number</th>
                                                <th>Result</th>
                                                <th>Assessment Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $sn =0; while ($row = mysqli_fetch_array($result)): ?>
                                                <tr>
                                                    <td><?php echo $sn+ 1 ?></td>
                                                    <td>
                                                        <span class="img-thumb ">
                                                            <span class="ml-2 "><a href="student?id=<?php echo $row['user_id'] ?>"><?php echo $row['full_studentName'] ?></a></span>
                                                        </span>
                                                    </td>
                                                    <td><?php echo $row['email'] ?></td>
                                                    <td><?php echo $row['matric_no'] ?></td>
                                                    <td><?php getAdminMessage($row['result']) ?></td>
                                                    <td><?php format_date($row['created_at']) ?></td>
                                                </tr>
                                            <?php endwhile ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once 'components/footer.php'; ?>
        </div>
    </div>
</div>
<?php include_once 'components/scripts.php'; ?>
</body>
</html>