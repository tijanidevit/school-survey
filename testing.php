<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>LaunchPage - Creative Landing Page Template</title>

    <!-- Loading Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Template CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <link href="css/style-magnific-popup.css" rel="stylesheet">


    <!-- Awsome Fonts -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700&amp;display=swap" rel="stylesheet">

    <!-- Font Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">




</head>

<body>

    <!--begin header -->

    <!--end header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Survey</a>

        </div>
    </nav>

    <div class="container">
        <div class="">
            <h4 id="titleText" class="text-center mt-4">Leadership</h4>

        </div>
    </div>

    <form name="leadership" id="leadership">
        <div class="row">
            <div class="col-lg-12 mb-5">
                <div class="my-1">
                    <label for="exampleInputEmail1" class="form-label">
                        How do you monitor the performance of
                        the people that you have to lead?
                    </label>

                    <select class="form-control" name="select1" id="select1" aria-label="Default select example">
                        <option value="5">Always</option>
                        <option value="4">Often</option>
                        <option value="3">Seldom</option>
                        <option value="2">Sometimes</option>
                        <option value="1">Never</option>
                        <option value="0" selected>Select your option</option>

                    </select>
                </div>

                <div class="my-3">
                    <label for="exampleInputEmail1" class="form-label">
                        How do you delegate
                        responsibilities efficiently?
                    </label>
                    <select class="form-control" name="select2" id="select2" aria-label="Default select example">
                        <option value="5">Always</option>
                        <option value="4">Often</option>
                        <option value="3">Seldom</option>
                        <option value="2">Sometimes</option>
                        <option value="1">Never</option>
                        <option value="0" selected>Select your option</option>

                    </select>
                </div>
                <div class="my-3">
                    <label for="exampleInputEmail1" class="form-label">How do you able to collaborate
                        with
                        others and accept new ideas?</label>
                    <select class="form-control" name="select3" id="select3" aria-label="Default select example">
                        <option value="5">Always</option>
                        <option value="4">Often</option>
                        <option value="3">Seldom</option>
                        <option value="2">Sometimes</option>
                        <option value="1">Never</option>
                        <option value="0" selected>Select your option</option>

                    </select>
                </div>


                <div class="my-3">
                    <label for="exampleInputEmail1" class="form-label">Do you respond to
                        criticism?</label>
                    <select class="form-control" name="select5" id="select5" aria-label="Default select example">
                        <option value="5">Always</option>
                        <option value="4">Often</option>
                        <option value="3">Seldom</option>
                        <option value="2">Sometimes</option>
                        <option value="1">Never</option>
                        <option value="0" selected>Select your option</option>

                    </select>
                </div>
                <div class="my-3">
                    <label for="exampleInputEmail1" class="form-label">How many time have you solve
                        a
                        colleague
                        problem ?</label>
                    <select class="form-control" name="select6" id="select6" aria-label="Default select example">
                        <option value="5">Always</option>
                        <option value="4">Often</option>
                        <option value="3">Seldom</option>
                        <option value="2">Sometimes</option>
                        <option value="1">Never</option>
                        <option value="0" selected>Select your option</option>

                    </select>
                </div>

                <input type="button" value="I'm Done" name="" onclick="check()">
                <p id="result"></p>
    </form>



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
    <script type="text/javascript" src="testsurvey.js"></script>
    <script>
    $(document).ready(function() {
        $('#sectionLeadership').show();
        $('#behaviour').hide();
        $('#hardworking').hide();
        $('#hardworking2').hide();
        $('#wellbeing').hide();


        // $("#submit").click(function(e) {
        //     e.preventDefault();
        //     $("#div1").fadeIn();
        //     $("#div2").fadeIn("slow");
        //     $("#div3").fadeIn(3000);
        // });


    });

    $('#firstBtn').click(function(e) {
        e.preventDefault();
        $('#sectionLeadership').fadeOut(1500);
        $('#behaviour').fadeIn(1500);
        $('#titleText').text('Behaviour');
    })

    $('#secondBtn').click(function(e) {
        e.preventDefault();
        $('#behaviour').fadeOut(1500);
        $('#wellbeing').fadeIn(1500);
        $('#titleText').text('Wellbeing');
    })

    $('#thirdBtn').click(function(e) {
        e.preventDefault();
        $('#wellbeing').fadeOut(1500);
        $('#hardworking').fadeIn(1500);
        $('#titleText').text('Hardworking');
    })

    $('#prevFirst').click(function(e) {
        e.preventDefault();
        $('#sectionLeadership').fadeOut(1500);
        $('#behaviour').fadeIn(1500);
        $('#titleText').text('Behaviour');
    })
    </script>

</body>

</html>