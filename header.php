 <header class="header">

     <!--begin navbar-fixed-top -->
     <nav class="navbar navbar-expand-lg navbar-default navbar-fixed-top">

         <!--begin container -->
         <div class="container">

             <!--begin logo -->
             <a class="navbar-brand" href="./">
                <img src="./images/header-logo.png" alt="header-logo.png" width="250">
             </a>
             <!--end logo -->

             <!--begin navbar-toggler -->
             <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                 aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
             </button>
             <!--end navbar-toggler -->

             <!--begin navbar-collapse -->
             <div class="navbar-collapse collapse" id="navbarCollaps" style="">

                 <!--begin navbar-nav -->
                 <ul class="navbar-nav ml-auto">
                    <li><a href="./">Home</a></li>
                    <?php if(isset($_SESSION['course_user'])) : ?>
                        <li><a href="./assessments">Previous assessments</a></li>
                        <li><a href="./new">New assessment</a></li>
                        <li><a href="./logout">Logout</a></li>
                    <?php else: ?>
                        <li><a href="./register">Register</a></li>
                        <li><a href="./login">Login</a></li>
                    <?php endif ?>
                     <!-- <li class="discover-link"><a href="register" class="discover-btn">Get Started</a></li> -->

                 </ul>
                 <!--end navbar-nav -->

             </div>
             <!--end navbar-collapse -->

         </div>
         <!--end container -->

     </nav>
     <!--end navbar-fixed-top -->

 </header>