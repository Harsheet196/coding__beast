<?php include 'main.php';?>
 
<?php if(!isset($_SESSION['d_id'])) 
    {
     header('location: index.php');
    }
 
    $qValidate = "SELECT * from doctor WHERE d_id=".$_SESSION['d_id']."";
    $result = mysqli_query($conn, $qValidate);
    while($row = $result->fetch_assoc()) {
        $firstname=$row['first_name'];
        $lastname=$row['last_name'];
        $password=$row['pwd'];
        $mail=$row['mail'];
        $current=$row['p_current'];
        $degree=$row['degree'];
        $license=$row['license'];
           

    }
    
    
 
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    <!-- script -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

    <title>DoctorLandingPage</title>



    <style>
        * {
            border: none;
        }

        body {
            background: none;
        }

        a {
            text-decoration: none;
        }

        .zero {
            margin: 0%;
            padding: 0%;
        }

        .hide {
            display: none;
            /* visibility: hidden; */
        }

        .bg-color {
            background-color: rgba(161, 161, 161, 0.856);
        }

        .btn-style {
            border: none;
            height: 100%;
            width: 100%;
            text-align: center;
            background: none;
            font-weight: bolder;
            letter-spacing: 2px;
            color: white;
            /* border-top: 2px solid white; */
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            /* border-bottom: 2px solid white; */
        }

        .btn-style:hover {
            background-color: rgba(161, 161, 161, 0.856);
            /* text-decoration: underline; */
            color: rgb(77, 75, 75);

        }

        .slidecontainer {
            width: 90%;
        }

        .slider {
            width: 100%;
            height: 15px;
            border-radius: 5px;
            background: #d3d3d3;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
            -webkit-appearance: none;
        }

        .slider:hover {
            opacity: 1;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background: #04AA6D;
            cursor: pointer;
        }

        .slider::-moz-range-thumb {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background: #04AA6D;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h1>Virtual Health Assistant</h1>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                           <a href="index.php"> <button type="submit" class="btn btn-primary m-3"  name= "homepage"  style="background-color: rgb(82, 182, 82);">homepage</button>  </a>
                </li>
                <li class="nav-item">
                    <a href="logout.php"> <button type="submit" class="btn btn-primary m-3"  name= "logout"  style="background-color: rgb(82, 182, 82);">Logout</button> </a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <section style="background-color: rgba(202, 202, 202, 0.911);">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-2 zero" style="background-color: rgba(53, 53, 53, 0.856);">

                    <div class="col" style="color: white;">
                        <h3 class="p-3 text-center">Welcome <?php echo $firstname ?></h3>
                    </div>
                    <hr style="border: 1px solid white; margin: 0;padding: 0;">
                    <div class="col">
                        <ul style="list-style: none; padding: 0%; margin: 0%;">
                            <li>
                                <!-- <a href="" id="Dashboard">Dashboard</a> -->
                                <button id="Dashboard" class="btn-style p-2">Dashboard</button>
                            </li>
                            <li>
                                <!-- <a href="">Appointments</a> -->
                                <button id="Appointments" class="btn-style p-2">Appointments</button>

                            </li>
                            <li>
                                <!-- <a href="">Ask-the-doctor</a> -->
                                <button id="PatientInfo" class="btn-style p-2">Patients Info</button>

                            </li>
                            <li>
                                <!-- <a href="">Rating</a> -->
                                <button id="QAsked" class="btn-style p-2">Queries Asked</button>

                            </li>
                            <!-- <li>
                                <a href="">Alerts</a>
                                <button id="Alerts" class="btn-style p-2">Alerts</button>
    
                            </li> -->
                            <li>
                                <!-- <a href="">My Profile</a> -->
                                <button id="Profile" class="btn-style p-2">Profile</button>

                            </li>
                            <!-- <li>
                                 <a href="">My Profile</a> 
                                <button id="Rating" class="btn-style p-2">Rating</button>

                            </li> -->
                        </ul>
                    </div>

                </div>
                <!--col-1-->




                <div class="col zero">

                    <div class="container-fluid zero" style="background-color: white;">

                        <div class="row zero bg-light">
                            <div class="col"
                                style="display: flex;justify-content: space-between; align-items: center; background-color: rgb(184, 245, 235);">
                                <h3 class="p-3">Welcome <?php $firstname?> </h3>
                                <button type="submit" id="showprofile" class="btn btn-primary m-3"
                                    style="background-color: red; ">Profile</button>
                            </div>
                        </div>

                        <div class="row zero">

                            <!--block-1-->
                            <div class="col zero" id="block-1">

                                <div class="container-fluid zero">

                                    <div class="row zero">
                                        <div class="col zero" style="background-color: rgb(14, 160, 111);color: white;">
                                            <h3 class="p-2" style="text-align: center;">Dashboard</h3>
                                        </div>
                                    </div>
                                    <div class="row zero m-2">
                                        <div class="col zero bg-danger border border-4">
                                            <div class="col p-3 bg-warning">
                                                <h4 class="text-center">Appointments received</h4>
                                            </div>
                                            <div
                                                class="col p-3 text-white bg-success d-flex flex-column justify-content-center align-items-center">
                                                <p>Time</p>
                                                <p>Time</p>
                                                <p>Time</p>
                                                
                                            </div>
                                        </div>
                                        <div class="col zero bg-danger border border-4">
                                            <div class="col p-3 bg-warning">
                                                <h4 class="text-center">Patients on Treatment</h4>
                                            </div>
                                            <div
                                                class="col p-3 text-white bg-success d-flex flex-column justify-content-center align-items-center">
                                                
                                                <?php
                                                                                        $querydashboard = 'select distinct patient.firstname from patient inner join appoint  on '.$_SESSION['d_id'].' = appoint.did and patient.p_id = appoint.pid' ;
                                                                                        $list = $conn->query($querydashboard);

                                                                                        if ($list->num_rows > 0) {
                                                                                            while ($row1 = $list->fetch_assoc())
                                                                                            
                                                                                            {
                                                                                               $name2=$row1['firstname'];
                                                                                               
                                                                                               
                                                                                                ?>
                                                                                                 <p> <?php echo $name2?> </p>
                                                                                                        
                                                                                                 
                                                                                            
                                                                                                     
                                                                                            
                                                                                                        <?php
                                                                                            }
                                                                                            
                                                                                        }
                                                                                        else {
                                                                                            echo "0 results";
                                                                                        }?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--container-fluid-->

                            </div>
                            <!--block-1-->

                            <div class="w-100"></div>

                            <!--block-2-->
                            <div class="col zero hide" id="block-2">

                                <div class="container-fluid zero">

                                    <div class="row zero">
                                        <div class="col zero" style="background-color: rgb(14, 160, 111);color: white;">
                                            <h3 class="p-2 text-center">Queries Asked</h3>
                                        </div>
                                    </div>
                                
                                    <div class="row zero m-2 bg-secondary text-white">
                                        <div class="container zero ">
                                            <div class="row zero">
                                                <div class="col border border-light p-2">
                                                    <h5 class="text-center">Queries Asked</h5>
                                                </div>
                                                <div class="col border border-light p-2">
                                                    <h5 class="text-center">Answer</h5>
                                                </div>
                                                <div class="col border border-light p-2">
                                                    <h5 class="text-center">Update</h5>
                                                </div>
                                            </div>
                                            
                                            <?php 
                                                    $query4 = "SELECT * from query WHERE did=".$_SESSION['d_id']."";
                                                    $result1 = mysqli_query($conn, $query4);
                                                    if(mysqli_num_rows($result1)>0)
                                                    {                                                        
                                                            while($row1=$result1->fetch_assoc())
                                                            {  $query2=$row1['question'];
                                                                $qid=$row1['id'];
                                                                ?>
                                                                
                                                                <div class="row zero">
                                                                    <div class="col border border-light p-2">
                                                                        <?php echo $query2;?>
                                                                        <!-- <input class="w-100" type="text"> -->
                                                                    </div>
                                                                    <div class="col border border-light p-2">
                                                                    <form action="DoctorLandingPage.php" id="signupForm" method="POST"><?php include 'errors.php'?>
                                                                    <input class="w-100" name="answer1" type="text">
                                                                    <!-- <div class=""><input type="hidden" name="doctorid" value=""></div> -->
                                                                    <div class=""><input type="hidden" name="questionid" value="<?php echo $qid;?>"></div>
                                                                    </div>
                                                                    <div
                                                                        class="col border border-light p-2 d-flex justify-content-center align-items-center">
                                                                        <button class="btn btn-primary" name="answer" type="submit">Submit</button>
                                                                    </div>
                                                                </div>
                                                                <?php
                                                            }
                                                    }
                                                    ?>

                                            
                                            
                                            <!-- <div class="row zero">
                                                <div class="col border border-light p-2">
                                                    <input class="w-100" type="text"> 
                                                </div>
                                                <div class="col border border-light p-2">
                                                    <input class="w-100" type="text">
                                                </div>
                                                <div
                                                    class="col border border-light p-2 d-flex justify-content-center align-items-center">
                                                    <button class="btn btn-primary" type="submit">Submit</button>
                                                </div>
                                            </div>
                                            <div class="row zero">
                                                <div class="col border border-light p-2">
                                                     <input class="w-100" type="text"> 
                                                </div>
                                                <div class="col border border-light p-2">
                                                    <input class="w-100" type="text">
                                                </div>
                                                <div
                                                    class="col border border-light p-2 d-flex justify-content-center align-items-center">
                                                    <button class="btn btn-primary" type="submit">Submit</button>
                                                </div>
                                            </div> -->
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!--block-2-->

                            <div class="w-100"></div>

                            <!--block-3-->
                            <div class="col zero hide" id="block-3">

                                <div class="container-fluid zero text-light">
                                <form action="DoctorLandingPage.php" id="signupForm" method="post">
                                           <?php include 'errors.php'?> 

                                    <div class="row zero">
                                        <div class="col zero" style="background-color: rgb(14, 160, 111);color: white;">
                                            <h3 class="p-2 text-center">Profile</h3>
                                        </div>
                                    </div>

                                    <div class="row zero bg-secondary m-2">
                                        <div class="col text-center border border-light p-2">
                                            <h5>First Name : </h5>
                                        </div>
                                        <div class="col text-center border border-light p-2">
                                            <input class="w-100 zero" type="text" name="firstname" value="<?php echo $firstname;?>">
                                        </div>
                                        <div class="w-100"></div>
                                        <div class="col text-center border border-light p-2">
                                            <h5>Last Name : </h5>
                                        </div>
                                        <div class="col text-center border border-light p-2">
                                            <input class="w-100 zero" type="text" name="lastname" value="<?php echo $lastname?>">
                                        </div>
                                        <div class="w-100"></div>
                                        <div class="col text-center border border-light p-2">
                                            <h5>Email : </h5>
                                        </div>
                                        <div class="col text-center border border-light p-2">
                                            <input class="w-100 zero" type="text" name="mail" value="<?php echo $mail;?>">
                                        </div>
                                        <div class="w-100"></div>
                                        <div class="col text-center border border-light p-2">
                                            <h5>Degree : </h5>
                                        </div>
                                        <div class="col text-center border border-light p-2">
                                            <input class="w-100 zero" type="text" name="degree" value="<?php echo $degree;?>">
                                        </div>
                                        <div class="w-100"></div>
                                        <div class="col text-center border border-light p-2">
                                            <h5>License : </h5>
                                        </div>
                                        <div class="col text-center border border-light p-2">
                                            <input class="w-100 zero" type="text" name="license" value="<?php echo $license;?>">
                                        </div>
                                        <div class="w-100"></div>
                                        <div class="col text-center border border-light p-2">
                                            <h5>Password : </h5>
                                        </div>
                                        <div class="col text-center border border-light p-2">
                                            <input class="w-100 zero" type="text" name="password" value="<?php echo $password;?>">
                                        </div>
                                        <div class=""><input type="hidden" name="doctorid" value="<?php echo $_SESSION['d_id'];?>"
                                        ></div>

                                    </div>
                                    <div class="row zero d-flex justify-content-center">
                                    <button class="btn btn-primary zero m-2 p-2 w-50 " name="updatedoctor" value="update doctor"> 
                                        Update
                                    </button>
                                    </div>

                                </div>

                            </div>
                            <!--block-3-->

                            <div class="w-100"></div>

                            <!--block-4-->
                            <div class="col zero hide " id="block-4">

                                <div class="container-fluid zero">

                                    <div class="row zero">
                                        <div class="col zero" style="background-color: rgb(14, 160, 111);color: white;">
                                            <h3 class="p-2 text-center">Patient Info</h3>
                                        </div>
                                    </div>
                                    <form action="DoctorLandingPage.php" id="signupForm" method="POST"><?php include 'errors.php'?>

                                    <div class="row zero">
                                        <div class="table p-4 zero">
                                            <TABLE WIDTH="100%" CELLPADDING="3" CELLSPACING="3"
                                                style="background-color: white;">
                                                <!-- <TR>
                                                        <TH COLSPAN="4"><BR>
                                                            <H3 style="text-align: center; letter-spacing: 2px;">Appoinment</H3>
                                                        </TH>
                                                    </TR> -->
                                                <TR>
                                                    <TH class="p-2"
                                                        style="text-align: center; background-color: rgb(139, 8, 34); color: white; border: 1px solid white;">
                                                        <h5>Patient Name</h5>
                                                    </TH>
                                                    <TH class="p-2"
                                                        style=" background-color: rgb(139, 8, 34); color: white; text-align: center; border: 1px solid white;">
                                                        <Link>
                                                        <h5>
                                                            Needed Precaution</h5>
                                                    <TH class="p-2"
                                                        style="text-align: center; background-color: rgb(139, 8, 34); color: white; border: 1px solid white;">
                                                        <h5> Suggestions </h5>
                                                    </TH>
                                                    <TH class="p-2"
                                                        style=" background-color: rgb(139, 8, 34); color: white; text-align: center; border: 1px solid white;">
                                                        <Link>
                                                        <h5> Rating(1-10) </h5>
                                                    <TH class="p-2"
                                                        style="text-align: center; background-color: rgb(139, 8, 34); color: white; border: 1px solid white;">
                                                        <h5> Prescription </h5>
                                                    </TH>
                                                    <TH class="p-2"
                                                        style="text-align: center; background-color: rgb(139, 8, 34); color: white; border: 1px solid white;">
                                                        <h5> Medication Time </h5>
                                                    </TH>
                                                    <TH class="p-2"
                                                        style=" background-color: rgb(139, 8, 34); color: white; text-align: center; border: 1px solid white;">
                                                        <Link>
                                                        <h5> Update
                                                 </h5>
                                                    </TH>
                                                </TR>
                                                                                    <?php
                                                                                        $queryAppointmentList = 'select distinct patient.firstname, patient.lastname,patient.p_id from patient inner join appoint  on '.$_SESSION['d_id'].' = appoint.did and patient.p_id = appoint.pid' ;
                                                                                        $getAppointmentList = $conn->query($queryAppointmentList);

                                                                                        if ($getAppointmentList->num_rows > 0) {
                                                                                            while ($row1 = $getAppointmentList->fetch_assoc())
                                                                                            
                                                                                            {
                                                                                               $name1=$row1['firstname'];
                                                                                               $pidi=$row1['p_id'];
                                                                                               
                                                                                                ?>
                                                                                                 
                                                                                                        
                                                                                                 <form action="DoctorLandingPage.php" id="signupForm" method="POST"><?php include 'errors.php'?>
                                                                                                        <TR ALIGN="CENTER">
                                                                                                            <TD class="p-2"
                                                                                                                style="background-color: forestgreen; color: white; border: 1px solid white;">
                                                                                                                <h6><?php echo $name1?></h6>
                                                                                                            </TD>
                                                                                                            <TD class="p-2"
                                                                                                                style="text-align: center; background-color: forestgreen; color: white; border: 1px solid white;">
                                                                                                                <h6><input type="text" name="precaution" class="w-100"></h6>
                                                                                                            </TD>
                                                                                                            <TD class="p-2"
                                                                                                                style="background-color: forestgreen; color: white; border: 1px solid white;">
                                                                                                                <h6><input type="text" name="suggestion" class="w-100"></h6>
                                                                                                            </TD>
                                                                                                            <TD class="p-2"
                                                                                                                style="text-align: center; background-color: forestgreen; color: white; border: 1px solid white;">
                                                                                                                <h6><input type="text"name="rating"class="w-100"></h6>
                                                                                                            </TD>
                                                                                                            <TD class="p-2"
                                                                                                                style="background-color: forestgreen; color: white; border: 1px solid white;">
                                                                                                                <h6><input type="text" name="medication"class="w-100"></h6>
                                                                                                            </TD>
                                                                                                            <TD class="p-2"
                                                                                                                style="background-color: forestgreen; color: white; border: 1px solid white;">
                                                                                                                <h6><input type="text" name="medicationtime"class="w-100"></h6>
                                                                                                            </TD>
                                                                                                            <TD class="p-2"
                                                                                                                style="text-align: center; background-color: forestgreen; color: white; border: 1px solid white;">
                                                                                                                <div class=""><input type="hidden" name="patientid3" value="<?php echo $pidi?>">
                                                                                                                <button type="submit" name="updatepatientbydoctor"class="btn btn-primary "> update </button>
                                                                                                            </TD>
                                                                                                        </TR>
                                                                                            </form>
                                                                                            
                                                                                                     
                                                                                            
                                                                                                        <?php
                                                                                            }
                                                                                            
                                                                                        }
                                                                                        else {
                                                                                            echo "0 results";
                                                                                        }?>
                                                    
                                                
                                                    
                                                 
                                                
                                            </TABLE>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!--block-4-->

                            <div class="w-100"></div>

                            <!--block-5-->
                            <div class="col zero hide" id="block-5">

                                <div class="container-fluid zero">

                                    <div class="row zero">
                                        <div class="col zero" style="background-color: rgb(14, 160, 111);color: white;">
                                            <h3 class="p-2 text-center">Appointments</h3>
                                        </div>
                                    </div>

                                    <div class="row zero">
                                        <div class="table p-2">
                                            <TABLE class="mt-3" WIDTH="100%" CELLPADDING="3" CELLSPACING="3"
                                                style="background-color: white;">
                                                <!-- <TR>
                                                    <TH COLSPAN="2"><BR>
                                                      <H3 style="text-align: center; letter-spacing: 2px;">  Appoinment</H3>
                                                    </TH>
                                                  </TR> -->
                                                <TR>
                                                    <TH class="p-2"
                                                        style="text-align: center; background-color: rgb(139, 8, 34); color: white; border: 1px solid white;">
                                                        <h5>Meet Link</h5>
                                                    </TH>
                                                    <TH class="p-2"
                                                        style=" background-color: rgb(139, 8, 34); color: white; text-align: center; border: 1px solid white;">
                                                        <Link>
                                                        <h5>Patient Name</h5>
                                                    </TH>
                                                </TR>

                                                <?php
                                                                                        $link = "SELECT link,pid FROM appoint WHERE did=".$_SESSION['d_id']."" ;
                                                                                        $linklist = $conn->query($link);

                                                                                        if ($linklist->num_rows > 0) {
                                                                                            while ($row1 = $linklist->fetch_assoc())
                                                                                            
                                                                                            {
                                                                                               $name1=$row1['link'];
                                                                                               $patient=$row1['pid'];
                                                                                               
                                                                                            //    $search="SELECT firstname FROM patient WHERE p_id='.$patient.'";
                                                                                            //    $querysearch=$conn->query($search);
                                                                                               
                                                                                                ?>
                                                                                                                                                                                                         
                                                                                                          <TR ALIGN="CENTER">
                                                                                                            <TD class="p-2"
                                                                                                                style="background-color: forestgreen; color: white; border: 1px solid white;">
                                                                                                                <h6><?php echo $name1?></h6>
                                                                                                            </TD>
                                                                                                            <TD class="p-2"
                                                                                                                style="background-color: forestgreen; color: white; border: 1px solid white;">
                                                                                                                <h6>Patient Name comes here</h6>
                                                                                                            </TD>
                                                                                                            
                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                                                                   
                                                                                                        </TR>
                                                                                            
                                                                                            
                                                                                                     
                                                                                            
                                                                                                        <?php
                                                                                            }
                                                                                            
                                                                                        }
                                                                                        else {
                                                                                            echo "0 results";
                                                                                        }?>
                                                
                                            </TABLE>
                                        </div>
                                    </div>



                                </div>

                            </div>
                            <!--block-5-->

                            <div class="w-100"></div>

                            <!--block-6-->
                            <!-- <div class="col zero hide" id="block-6">
                            
                                <div class="container zero">
                                    <div class="row p-2" style="background-color: white; margin: 0%;">
                                        <h1 class="p-3">How rating features work ?</h1>
                                        <p class="p-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, nobis harum magni nisi,
                                            tempore iure illo corrupti
                                            modi, molestiae rem quia ipsa quo expedita provident qui cupiditate atque blanditiis laboriosam!</p>
                                    </div>
                                    <div class="row p-2" style="background-color: white; margin: 0%;">
                                        <h1 class="p-3">Round Range Slider</h1>
                                        <script>
                                            var slider = document.getElementById("myRange");
                                            var output = document.getElementById("demo");
                                            output.innerHTML = slider.value;

                                            slider.oninput = function () {
                                                output.innerHTML = this.value;
                                            }
                                        </script>
                            
                                        <div class="slidecontainer p-3">
                                            <input type="range" min="1" max="10" value="10" class="slider p-2" id="myRange">
                                            <h5 class="p-2">Value: <span id="demo"></span></h5>
                                        </div>
                                        <script>
                                            var slider = document.getElementById("myRange");
                                            var output = document.getElementById("demo");
                                            output.innerHTML = slider.value;

                                            slider.oninput = function () {
                                                output.innerHTML = this.value;
                                            }
                                        </script>
                            
                                    </div>
                            
                            
                                </div> -->
                        </div>

                        <div class="w-100"></div>


                    </div>
                    <!--row-->

                </div>
                <!--container-->



            </div>
            <!--col-2-->


        </div>
        <!--row-->

        </div>
        <!--container-fluid-->


    </section>


    <footer>
        <div class="container-fluid" style="color: white; background-color: black;">
            <div class="row">
                <div class="col p-5">
                    <h1>Team Coding_Beast</h1>
                    <p style="font-weight: lighter;">
                        
                    </p>
                    
                </div>
                
                <div class="col p-5">
                    <div class="col">
                        <h3>Header</h3>
                        <p style="font-weight: lighter;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum
                            corporis sunt et voluptas sint voluptates hic aut dolores? Tempora esse sequi officia
                            aspernatur
                            tenetur explicabo ipsa exercitationem qui eum doloribus?</p>
                    </div>
                    <div class="col d-flex flex-row">
                        <div class="col">
                            <img src="login.jpg" alt="" style="width: 80%; height: 80%;">
                        </div>
                        <div class="col">
                            <img src="login.jpg" alt="" style="width: 80%; height: 80%;">
                        </div>
                        <div class="col">
                            <img src="login.jpg" alt="" style="width: 80%; height: 80%;">
                        </div>
                        <div class="col">
                            <img src="login.jpg" alt="" style="width: 80%; height: 80%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>


    <script>

        const dashboard = document.getElementById("Dashboard");

        const appoinments = document.getElementById("Appointments");

        const patient_info = document.getElementById("PatientInfo");

        const queries_asked = document.getElementById("QAsked");

        const profile = document.getElementById("Profile");

        const rating = document.getElementById("Rating");
        const showprofile=document.getElementById("showprofile");


        const block1 = document.getElementById("block-1");

        const block2 = document.getElementById("block-2");

        const block3 = document.getElementById("block-3");

        const block4 = document.getElementById("block-4");

        const block5 = document.getElementById("block-5");

        const block6 = document.getElementById("block-6");


        dashboard.addEventListener("click", () => {
            // block6.classList.add("hide");
            block5.classList.add("hide");
            block4.classList.add("hide");
            block3.classList.add("hide");
            block2.classList.add("hide");
            block1.classList.remove("hide");
        })

        queries_asked.addEventListener("click", () => {
            //block6.classList.add("hide");
            block5.classList.add("hide");
            block4.classList.add("hide");
            block3.classList.add("hide");
            block2.classList.remove("hide");
            block1.classList.add("hide");
        })

        profile.addEventListener("click", () => {
            //block6.classList.add("hide");
            block5.classList.add("hide");
            block4.classList.add("hide");
            block3.classList.remove("hide");
            block2.classList.add("hide");
            block1.classList.add("hide");
        })
        showprofile.addEventListener("click", () => {
            //block6.classList.add("hide");
            block5.classList.add("hide");
            block4.classList.add("hide");
            block3.classList.remove("hide");
            block2.classList.add("hide");
            block1.classList.add("hide");
        })

        patient_info.addEventListener("click", () => {
            //block6.classList.add("hide");
            block5.classList.add("hide");
            block4.classList.remove("hide");
            block3.classList.add("hide");
            block2.classList.add("hide");
            block1.classList.add("hide");
        })

        appoinments.addEventListener("click", () => {
            //  block6.classList.add("hide");
            block5.classList.remove("hide");
            block4.classList.add("hide");
            block3.classList.add("hide");
            block2.classList.add("hide");
            block1.classList.add("hide");
        })

        // rating.addEventListener("click", () => {
        //     block6.classList.remove("hide");
        //     block5.classList.add("hide");
        //     block4.classList.add("hide");
        //     block3.classList.add("hide");
        //     block2.classList.add("hide");
        //     block1.classList.add("hide");
        // })




    </script>




</body>

</html>