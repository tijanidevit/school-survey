<?php
session_start();
include('dbconfiguration.php');

$user = $_SESSION['course_user'];
$user_id = $user['id'];

$sql = "SELECT * FROM scorerecord WHERE user_id=$user_id ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
} else {
    $msg = "<div class='alert alert-danger'>You have not taken any previous assessments before. Please <a href='new'> click me </a> to take a new assessment</div>";
}

function format_date($date){
    echo date('F d, Y h:mA', strtotime($date));
}
function getMessage($result)
{
    $msg = "";
    if ($result >= 100  && $result <= 140) {
        $msg = "<span class='text-success text-center mt-4'>You're flying high. You are made for the stars, expect great results</span>";
    } elseif ($result >= 70  && $result <= 99) {
        $msg = "<span class='text-success'>You're trying, a little bit of efforts and you'd be flying high</span>";
    } elseif ($result >= 50  && $result <= 69) {
        $msg = "<span class='text-info'>You're on a average performance, please buckle up and join the students at the top
        </span>";
    } elseif ($result >= 30  && $result <= 49) {
        $msg = "<span class='text-warning'>Oh! A little bit poor. You can perform better. Please, put in more efforts</span>";
    } elseif ($result >= 0  && $result <= 29) {
        $msg = "<span class='text-danger'>We are sorry to say this, your performance level is very low. You need to work very hard to avoid failure</span>";
    }

    echo $msg;
}
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
            <div class="col-lg-12 col-12 mx-auto">
                <div class="card">
                    <div class="card-body">
                        

                        <h5 class="card-title">Previous Assessments</h5>
                        
                        <table class="table table-striped table-hover" id="myTable">
                            <thead>
                                <tr>
                                    <th>Date of Assessment</th>
                                    <th>Result</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php while ($row = mysqli_fetch_array($result)): ?>
                                    <tr>
                                        <td><?php format_date($row['created_at']) ?></td>
                                        <td><?php  getMessage($row['result']) ?></td>
                                    </tr>
                                <?php endwhile ?>
                            </tbody>
                        </table>
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
                                    
    <script type="text/javascript" src="dt.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>


</body>

</html>