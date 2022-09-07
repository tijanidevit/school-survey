<?php 
    session_start();
    
    if (!isset($_SESSION['course_user'])) {
        header('location: login');
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Student academic course program</title>

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
    <?php include_once 'header.php' ?>
    <!--end header -->
    

    <div class="container">
        <div class="">
            <h4 id="titleText" class="text-center my-5">Leadership</h4>

        </div>
    </div>
    <section id="loading" class="loading pb-5 pt-3">
        
    </section>
    <section id="sectionLeadership" class="leadership pb-5 pt-3">
        <div class="col-lg-8 mx-auto">
            <div class="card py-5 px-5">
                <div class="container ">
                    <h5 class="card-title"></h5>
                    <form name="leadership" id="leadership">
                        <div class="row">
                            <div class="col-lg-12 mb-5">
                                <div class="my-1">
                                    <label for="exampleInputEmail1" class="form-label">
                                        How often do you monitor the performance of
                                        the people that you have to lead?
                                    </label>

                                    <select required class="form-control" name="select1" id="select1"
                                        aria-label="Default select example">
                                        <option value="5">Always</option>
                                        <option value="4">Often</option>
                                        <option value="3">Seldom</option>
                                        <option value="4">Sometimes</option>
                                        <option value="1">Never</option>
                                        <option value="0" selected disabled>Select your option</option>

                                    </select>
                                </div>

                                <div class="my-3">
                                    <label for="exampleInputEmail1" class="form-label">
                                        How do you delegate
                                        responsibilities efficiently?
                                    </label>
                                    <select required class="form-control" name="select2" id="select2"
                                        aria-label="Default select example">
                                        <option value="5">Choose the right person for the job</option>
                                        <option value="4">Choose anybody in the team</option>
                                        <option value="3">I take responsibilities myself</option>
                                        <option value="4">I watch and hope for better</option>
                                        <option value="1">Never delegate responsibilities before</option>
                                        <option value="0" selected disabled>Select your option</option>

                                    </select>
                                </div>
                                <div class="my-3">
                                    <label for="exampleInputEmail1" class="form-label">How often do you collaborate
                                        with
                                        others and accept new ideas?</label>
                                    <select required class="form-control" name="select3" id="select3"
                                        aria-label="Default select example">
                                        <option value="5">Always</option>
                                        <option value="4">Often</option>
                                        <option value="3">Seldom</option>
                                        <option value="4">Sometimes</option>
                                        <option value="1">Never</option>
                                        <option value="0" selected disabled>Select your option</option>

                                    </select>
                                </div>


                                <div class="my-3">
                                    <label for="exampleInputEmail1" class="form-label">Do you respond to
                                        criticism?</label>
                                    <select required class="form-control" name="select5" id="select5"
                                        aria-label="Default select example">
                                        <option value="5">Always</option>
                                        <option value="4">Often</option>
                                        <option value="3">Seldom</option>
                                        <option value="4">Sometimes</option>
                                        <option value="1">Never</option>
                                        <option value="0" selected disabled>Select your option</option>

                                    </select>
                                </div>
                                <div class="my-3">
                                    <label for="exampleInputEmail1" class="form-label">How often do you solve
                                        a
                                        colleague
                                        problem ?</label>
                                    <select required class="form-control" name="select6" id="select6"
                                        aria-label="Default select example">
                                        <option value="5">Always</option>
                                        <option value="4">Often</option>
                                        <option value="3">Seldom</option>
                                        <option value="4">Sometimes</option>
                                        <option value="1">Never</option>
                                        <option value="0" selected disabled>Select your option</option>

                                    </select>
                                </div>


                                <button id="firstBtn" type="submit" class="btn btn-primary me-auto">Next</button>



                    </form>

                </div>
                <!-- <p id="result">Is your Score</p> -->
            </div>
        </div>


    </section>

    <!-- behavior aspect -->
    <section id="behaviour" class="behaviour py-3">
        <div class="col-lg-8 col-12 mx-auto">

            <div class="card">
                <div class="py-5 px-5">
                    <form name="behaviour" id="behaviour">
                        <div class="row m-5">
                            <table class="table table-striped">
                                <thead>

                                    <tr>
                                        <th scope="col">
                                            <strong>1.Disruptively Behaviour</strong>
                                        </th>
                                        <th scope="col">Yes</th>
                                        <th scope="col">No</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">Do you enjoy bullying other students</td>
                                        <td><input value="1" required type="radio" name="QoneA"></td>
                                        <td><input value="4" type="radio" name="QoneA"></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Do you talk during lectures</td>
                                        <td><input value="1" required type="radio" name="QoneB"></td>
                                        <td><input value="4" type="radio" name="QoneB"></td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Do you interupt lecturers while lecturing</td>
                                        <td><input value="1" required type="radio" name="QoneC"></td>
                                        <td><input value="4" type="radio" name="QoneC"></td>
                                    </tr>
                                </tbody>

                                <thead>

                                    <tr>
                                        <th scope=" col">
                                            <strong>2. Impulse Control</strong>
                                        </th>
                                        <th scope="col">Yes</th>
                                        <th scope="col">No</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">Do you get angry quickly?</td>
                                        <td><input value="1" required type="radio" name="QtwoA"></td>
                                        <td><input value="4" type="radio" name="QtwoA"></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Are there some classmates that you do not like?</td>
                                        <td><input value="1" required type="radio" name="QtwoB"></td>
                                        <td><input value="4" type="radio" name="QtwoB"></td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Are there some lecturers that you do not like?</td>
                                        <td><input value="1" required type="radio" name="QtwoC"></td>
                                        <td><input value="4" type="radio" name="QtwoC"></td>
                                    </tr>
                                </tbody>

                                <thead>

                                    <tr>
                                        <th scope="col">
                                            <strong>3. Why do you think some students behave badly in
                                                school?</strong>
                                        </th>
                                        <th scope="col">Yes</th>
                                        <th scope="col">No</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">They do not like the teachers</td>
                                        <td><input value="1" required type="radio" name="QthreeA"></td>
                                        <td><input value="4" type="radio" name="QthreeA"></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">They get a bad comment on their report</td>
                                        <td><input value="1" required type="radio" name="QthreeB"></td>
                                        <td><input value="4" type="radio" name="QthreeB"></td>

                                    </tr>
                                    <tr>
                                        <td scope="row">They get low scores in assessments

                                        </td>
                                        <td><input value="1" required type="radio" name="QthreeC"></td>
                                        <td><input value="4" type="radio" name="QthreeC"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <form action="">
                                <button id="secondBtn" type="" class="btn btn-primary me-auto">Next</button>

                                <!-- <button id="prevFirst" type="submit" class="btn btn-primary me-auto">Previous</button> -->
                            </form>


                        </div>

                        <!-- <input type="button" value="I'm Done Joor" name="" onclick="check()"> -->

                    </form>
                    <!-- <p id="result">Is your Score</p> -->
                </div>

            </div>
        </div>

        </div>
    </section>

    <!-- wellbeing -->
    <section id="wellbeing" class="wellbeing py-3">
        <div class="col-lg-8 col-12 mx-auto">

            <div class="card">
                <div class="py-5 px-5">
                    <form id="wellbeing" name="wellbeing">
                        <div class="row m-5">
                            <table class="table table-striped">
                                <thead>

                                    <tr>
                                        <th scope="col">
                                            <strong>1.Before school, how you would describe your wellbeing at
                                                home?</strong>
                                        </th>
                                        <th scope="col">Yes</th>
                                        <th scope="col">No</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">Do you feel unhappy or dissatisfied with your life?</td>
                                        <td><input value="1" required type="radio" name="QoneA"></td>
                                        <td><input value="4" type="radio" name="QoneA"></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Do you often feel anxious?</td>
                                        <td><input value="1" required type="radio" name="QoneB"></td>
                                        <td><input value="4" type="radio" name="QoneB"></td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Do you often feel lonely and isolated</td>
                                        <td><input value="1" required type="radio" name="QoneC"></td>
                                        <td><input value="4" type="radio" name="QoneC"></td>
                                    </tr>
                                </tbody>

                                <thead>

                                    <tr>
                                        <th scope="col">
                                            <strong>Since joining school, please rate your current state of
                                                wellbeing</strong>
                                        </th>
                                        <th scope="col">Yes</th>
                                        <th scope="col">No</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">Do you often feel down, depressed or hopeless</td>
                                        <td><input value="1" required type="radio" name="QtwoA"></td>
                                        <td><input value="4" type="radio" name="QtwoA"></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Feeling bad about yourself, or that you are a failure or have
                                            let
                                            yourself or your family down.</td>
                                        <td><input value="1" required type="radio" name="QtwoB"></td>
                                        <td><input value="4" type="radio" name="QtwoB"></td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Feel tired or have little energy, or have little interest or
                                            pleasure in
                                            doing things.</td>
                                        <td><input value="1" required type="radio" name="QtwoC"></td>
                                        <td><input value="4" type="radio" name="QtwoC"></td>
                                    </tr>
                                </tbody>

                                <thead>

                                    <tr>
                                        <th scope="col">
                                            <strong>3. Below is a list of potential hassles in your life. Rate the
                                                current
                                                level
                                                of severity.</strong>
                                        </th>
                                        <th scope="col">Yes</th>
                                        <th scope="col">No</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">Difficulty making new friends</td>
                                        <td><input value="1" required type="radio" name="QthreeA"></td>
                                        <td><input value="4" type="radio" name="QthreeA"></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Not getting enough sleep (eg too noisy, going to bed too late)
                                        </td>
                                        <td><input value="1" required type="radio" name="QthreeB"></td>
                                        <td><input value="4" type="radio" name="QthreeB"></td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Living with strangers
                                        </td>
                                        <td><input value="1" required type="radio" name="QthreeC"></td>
                                        <td><input value="4" type="radio" name="QthreeC"></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Financial worries
                                        </td>
                                        <td><input value="1" required type="radio" name="QthreeD"></td>
                                        <td><input value="4" type="radio" name="QthreeD"></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Drug or alcohol excess
                                        </td>
                                        <td><input value="1" required type="radio" name="QthreeE"></td>
                                        <td><input value="4" type="radio" name="QthreeE"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <button id="thirdBtn" type="" class="btn btn-primary me-auto">Next</button>

                            <!-- <input type="button" value="I'm Done Joor" name="" onclick="check()"> -->

                    </form>
                    <!-- <p id="result">Is your Score</p> -->

                </div>



            </div>
        </div>
        </div>
    </section>

    <!-- hardworking -->
    <section id="hardworking" class="hardworking py-3">
        <div class="col-lg-8 col-12 mx-auto">

            <div class="card">
                <div class="py-5 px-5">
                    <form id="hardworking" name="hardworking">
                        <div class="row">
                            <div class="col-lg-12 mb-5">
                                <div class="my-1">

                                    <label for="exampleInputEmail1" class="form-label">Are you defining productivity the
                                        right
                                        way?</label>
                                    <select required class="form-control" name="select1" id="select1"
                                        aria-label="Default select example">
                                        <option value="5">Always</option>
                                        <option value="4">Often</option>
                                        <option value="3">Seldom</option>
                                        <option value="4">Sometimes</option>
                                        <option value="1">Never</option>
                                        <option value="0" selected disabled>Select your option</option>

                                    </select>
                                </div>

                                <div id="div2" class="my-3">
                                    <label for="exampleInputEmail1" class="form-label">Are you working hard or working
                                        smart?</label>
                                    <select required class="form-control" name="select2" id="select2"
                                        aria-label="Default select example">
                                        <option value="5">Always</option>
                                        <option value="4">Often</option>
                                        <option value="3">Seldom</option>
                                        <option value="4">Sometimes</option>
                                        <option value="1">Never</option>
                                        <option value="0" selected disabled>Select your option</option>

                                    </select>
                                </div>
                                <div class="my-3">
                                    <label for="exampleInputEmail1" class="form-label">Are You Spending Your Time the
                                        Way
                                        You
                                        Want?</label>
                                    <select required class="form-control" name="select3" id="select3"
                                        aria-label="Default select example">
                                        <option value="5">Always</option>
                                        <option value="4">Often</option>
                                        <option value="3">Seldom</option>
                                        <option value="4">Sometimes</option>
                                        <option value="1">Never</option>
                                        <option value="0" selected disabled>Select your option</option>

                                    </select>
                                </div>


                                <div class="my-3">
                                    <label for="exampleInputEmail1" class="form-label">Are You “Addicted” to Your Idea
                                        of
                                        Productivity?</label>
                                    <select required class="form-control" name="select4" id="select4"
                                        aria-label="Default select example">
                                        <option value="5">Always</option>
                                        <option value="4">Often</option>
                                        <option value="3">Seldom</option>
                                        <option value="4">Sometimes</option>
                                        <option value="1">Never</option>
                                        <option value="0" selected disabled>Select your option</option>

                                    </select>
                                </div>
                                <div class="my-3">
                                    <label for="exampleInputEmail1" class="form-label">How do you respond to
                                        criticism?</label>
                                    <select required class="form-control" name="select5" id="select5"
                                        aria-label="Default select example">
                                        <option value="5">Always</option>
                                        <option value="4">Often</option>
                                        <option value="3">Seldom</option>
                                        <option value="4">Sometimes</option>
                                        <option value="1">Never</option>
                                        <option value="0" selected disabled>Select your option</option>

                                    </select>
                                </div>
                                <div class="my-3">
                                    <label for="exampleInputEmail1" class="form-label">Are You Working Too Much?</label>
                                    <select required class="form-control" name="select6" id="select6"
                                        aria-label="Default select example">
                                        <option value="5">Always</option>
                                        <option value="4">Often</option>
                                        <option value="3">Seldom</option>
                                        <option value="4">Sometimes</option>
                                        <option value="1">Never</option>
                                        <option value="0" selected disabled>Select your option</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <form action="calculate.php" method="POST">
                            <input type="hidden" id="result" name="result">


                            <input id="submit-btn" type="submit" class="btn btn-danger" name="calculate">

                        </form>



                </div>
            </div>
        </div>
    </section>

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

    $(function() {
        // alert("Yea");
        $("#submit-btn").click(function(e) {
            e.preventDefault();
            $('#hardworking').fadeOut(1500);
            $('#hardworking2').fadeOut(1500);
            $('#loading').html(`
                <center>
                    <img src="./images/progress.gif" alt="">
                </center>
            `);
            setTimeout(() => {
                grade();
            }, 4500);
            
        });


        function grade() {
            let select1 = $('#select1').val();
            let select2 = $('#select2').val();
            let select3 = $('#select3').val();
            let select4 = $('#select4').val();
            let select5 = $('#select5').val();
            let select6 = $('#select6').val();

            let behaviourQ1a = $('#QoneA').val();
            let behaviourQ1b = $('#QoneB').val();
            let behaviourQ1c = $('#QoneC').val();

            let behaviourQ2a = $('#QtwoA').val();
            let behaviourQ2b = $('#QtwoB').val();
            let behaviourQ2c = $('#QtwoC').val();

            let behaviourQ3a = $('#QthreeA').val();
            let behaviourQ3b = $('#QthreeB').val();
            let behaviourQ3c = $('#QthreeC').val();

            let wellbeing1a = $('#QoneA').val();
            let wellbeing1b = $('#QoneB').val();
            let wellbeing1c = $('#QoneC').val();

            let wellbeing2a = $('#QtwoA').val();
            let wellbeing2b = $('#QtwoB').val();
            let wellbeing2c = $('#QtwoC').val();

            let wellbeing3a = $('#QthreeA').val();
            let wellbeing3b = $('#QthreeB').val();
            let wellbeing3c = $('#QthreeC').val();
            let wellbeing3d = $('#QthreeD').val();
            let wellbeing3e = $('#QthreeE').val();

            const hardworking1 = $('#select1').val();
            const hardworking2 = $('#select2').val();
            const hardworking3 = $('#select3').val();
            const hardworking4 = $('#select4').val();
            const hardworking5 = $('#select5').val();
            const hardworking6 = $('#select6').val();

            var result = $("result");
            let c = 0;

            if (select1 == "5") {
                c += 5;
            } else if (select1 == "4") {
                c += 4;
            } else if (select1 == "3") {
                c += 3;
            } else if (select1 == "2") {
                c += 2;
            } else if (select1 == "1") {
                c += 1;
            } else {
                c += 0;
            }

            if (select2 == "5") {
                c += 5;
            } else if (select2 == "4") {
                c += 4;
            } else if (select2 == "3") {
                c += 3;
            } else if (select2 == "2") {
                c += 2;
            } else if (select2 == "1") {
                c += 1;
            } else {
                c += 0;
            }

            if (select3 == "5") {
                c += 5;
            } else if (select3 == "4") {
                c += 4;
            } else if (select3 == "3") {
                c += 3;
            } else if (select3 == "2") {
                c += 2;
            } else if (select3 == "1") {
                c += 1;
            } else {
                c += 0;
            }

            if (select4 == "5") {
                c += 5;
            } else if (select4 == "4") {
                c += 4;
            } else if (select4 == "3") {
                c += 3;
            } else if (select4 == "2") {
                c += 2;
            } else if (select4 == "1") {
                c += 1;
            } else {
                c += 0;
            }

            if (select5 == "5") {
                c += 5;
            } else if (select5 == "4") {
                c += 4;
            } else if (select5 == "3") {
                c += 3;
            } else if (select5 == "2") {
                c += 2;
            } else if (select5 == "1") {
                c += 1;
            } else {
                c += 0;
            }

            if (select6 == "5") {
                c += 5;
            } else if (select6 == "4") {
                c += 4;
            } else if (select6 == "3") {
                c += 3;
            } else if (select6 == "2") {
                c += 2;
            } else if (select6 == "1") {
                c += 1;
            } else {
                c += 0;
            }

            if (behaviourQ1a == "2") {
                c += 2;
            } else {
                c += 4;
            }

            if (behaviourQ1b == "2") {
                c += 2;
            } else {
                c += 4;
            }

            if (behaviourQ1c == "2") {
                c += 2;
            } else {
                c += 4;
            }

            if (behaviourQ2a == "2") {
                c += 2;
            } else {
                c += 4;
            }

            if (behaviourQ2b == "2") {
                c += 2;
            } else {
                c += 4;
            }
            if (behaviourQ2c == "2") {
                c += 2;
            } else {
                c += 4;
            }

            if (behaviourQ3a == "2") {
                c += 2;
            } else {
                c += 4;
            }
            if (behaviourQ3b == "2") {
                c += 2;
            } else {
                c += 4;
            }
            if (behaviourQ3c == "2") {
                c += 2;
            } else {
                c += 4;
            }

            if (wellbeing1a == "2") {
                c += 2;
            } else {
                c += 4;
            }
            if (wellbeing1b == "2") {
                c += 2;
            } else {
                c += 4;
            }
            if (wellbeing1c == "2") {
                c += 2;
            } else {
                c += 4;
            }

            if (wellbeing2a == "2") {
                c += 2;
            } else {
                c += 4;
            }
            if (wellbeing2b == "2") {
                c += 2;
            } else {
                c += 4;
            }
            if (wellbeing2c == "2") {
                c += 2;
            } else {
                c += 4;
            }

            if (wellbeing3a == "2") {
                c += 2;
            } else {
                c += 4;
            }
            if (wellbeing3b == "2") {
                c += 2;
            } else {
                c += 4;
            }
            if (wellbeing3c == "2") {
                c += 2;
            } else {
                c += 4;
            }
            if (wellbeing3d == "2") {
                c += 2;
            } else {
                c += 4;
            }
            if (wellbeing3e == "2") {
                c += 2;
            } else {
                c += 4;
            }

            if (hardworking1 == "5") {
                c += 5;
            } else if (hardworking1 == "4") {
                c += 4;
            } else if (hardworking1 == "3") {
                c += 3;
            } else if (hardworking1 == "2") {
                c += 2;
            } else if (hardworking1 == "1") {
                c += 1;
            } else {
                c += 0;
            }

            if (hardworking2 == "5") {
                c += 5;
            } else if (hardworking2 == "4") {
                c += 4;
            } else if (hardworking2 == "3") {
                c += 3;
            } else if (hardworking2 == "2") {
                c += 2;
            } else if (hardworking2 == "1") {
                c += 1;
            } else {
                c += 0;
            }

            if (hardworking3 == "5") {
                c += 5;
            } else if (hardworking3 == "4") {
                c += 4;
            } else if (hardworking3 == "3") {
                c += 3;
            } else if (hardworking3 == "2") {
                c += 2;
            } else if (hardworking3 == "1") {
                c += 1;
            } else {
                c += 0;
            }

            if (hardworking4 == "5") {
                c += 5;
            } else if (hardworking4 == "4") {
                c += 4;
            } else if (hardworking4 == "3") {
                c += 3;
            } else if (hardworking4 == "2") {
                c += 2;
            } else if (hardworking4 == "1") {
                c += 1;
            } else {
                c += 0;
            }

            if (hardworking5 == "5") {
                c += 5;
            } else if (hardworking5 == "4") {
                c += 4;
            } else if (hardworking5 == "3") {
                c += 3;
            } else if (hardworking5 == "2") {
                c += 2;
            } else if (hardworking5 == "1") {
                c += 1;
            } else {
                c += 0;
            }

            if (hardworking6 == "5") {
                c += 5;
            } else if (hardworking6 == "4") {
                c += 4;
            } else if (hardworking6 == "3") {
                c += 3;
            } else if (hardworking6 == "2") {
                c += 2;
            } else if (hardworking6 == "1") {
                c += 1;
            } else {
                c += 0;
            }

            $('#result').val(c)
            console.log('c :>> ', c);
            location.href = "calculate.php?result=" + c;

            // console.log(437743);
            // $('#submit-btn2').click();
        }
    });
    </script>


</body>

</html>