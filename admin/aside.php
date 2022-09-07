<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
        <div class="d-flex align-items-center logo-box justify-content-start d-md-block d-none">

        </div>
        <div class="user-profile my-15 px-20 py-10 b-1 rounded10 mx-15">
            <div class="d-flex align-items-center justify-content-between">
                <div class="image d-flex align-items-center">
                    <img src="../../../images/avatar/avatar-13.png" class="rounded-0 me-10" alt="User Image">
                    <div>

                        <h4 class="mb-0 fw-600 text-uppercase"> <?php echo $_SESSION['full_name']; ?></h4>
                        <p class="mb-0">Lecturer Admin</p>
                    </div>
                </div>
                <div class="info">
                    <a class="dropdown-toggle p-15 d-grid" data-bs-toggle="dropdown" href="#"></a>
                    <div class="dropdown-menu dropdown-menu-end">


                        <a class="dropdown-item" href="auth_logout.php"><i class="ti-lock"></i> Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="multinav">
            <div class="multinav-scroll" style="height: 97%;">
                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">Main Menu</li>
                    <li>
                        <a href="index.php">
                            <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="icon-Address-card"></i>
                            <span>Lecturers</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="professors_list.php"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Lecturers List</a></li>

                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
                            <span>Students</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="students_list.php"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Students List</a></li>

                        </ul>
                    </li>

                </ul>


            </div>
        </div>
    </section>
</aside>