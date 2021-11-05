<?php include 'main.php';?>
 
<?php if(!isset($_SESSION['p_id'])) 
    {
     header('location: index.php');
    }
 
    $qValidate = "SELECT * from patient WHERE p_id=".$_SESSION['p_id']."";
    $result = mysqli_query($conn, $qValidate);
    while($row = $result->fetch_assoc()) {
        $firstname=$row['firstname'];
        $lastname=$row['lastname'];
        $uhid=$row['uhid'];
        $mail=$row['mail'];
        $phone=$row['phone'];
        $treat=$row['past_treatment'];
        $relativephone=$row['relative_contact'];
        $relativename=$row['relative_name']; 
        $patientrating=$row['p_scale']; 
        $doctorrating=$row['d_scale'];
        $medication=$row['medication'];
        $medicationtime=$row['medication_time']; 
        $password=$row['pwd']; 
        $suggestion=$row['suggestion'];
        $precaution=$row['precaution'];
        $medication=$row['medication'];  

    }
 
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    
    <!-- script -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
    <title>Hello, world!</title>
  </head>
  <style>
    /* *{
      border: 1px solid black;
    } */
    body{
      background: none;
    }
    a{
      text-decoration: none;
    }
    .hide{
      display: none;
      /* visibility: hidden; */
    }
    .btn-style{
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
    .btn-style:hover{
      background-color: rgba(161, 161, 161, 0.856);
      /* text-decoration: underline; */
      color: rgb(77, 75, 75);
      
    }

    /* b0x-4 */
    .button{
      width: 60%;
      background: none;
    }
    .button > button{
      width: 100%;
      border-radius: 30px;
      border: 2px solid rgb(122, 122, 122);
      background-color: rgb(139, 139, 139);
      color: white;
    }
    .button > button:hover{
      background-color: white;
      color: rgb(122, 122, 122);
      transition: all 0.2s ease-in;
    }


    .slidecontainer {
            width: 90%;
        }
    
        .slider {
            -webkit-appearance: none;
            width: 100%;
            height: 15px;
            border-radius: 5px;
            background: #d3d3d3;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
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
  <body>
    <!-- <h1>Hello, world!</h1> -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><h1>Virtual Health Assistant</h1></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

            <div class="col-md-2" style="margin: 0; padding: 0%;background-color: rgba(53, 53, 53, 0.856);">
              <div class="col" style="color: white;"><h3 class="p-3" style="text-align: center;">Welcome <?php echo $firstname ?></div>
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
                    <button id="Doctor" class="btn-style p-2">Ask the Doctor</button>

                  </li>
                  <li>
                    <!-- <a href="">Rating</a> -->
                    <button id="Rating" class="btn-style p-2">Rating</button>

                  </li>
                  <li>
                    <!-- <a href="">My profile</a> -->
                    <button id="Profile" class="btn-style p-2">Alerts</button>

                  </li>
                  <li>
                    <!-- <a href="">Alerts</a> -->
                    <button id="Alerts" class="btn-style p-2">Profile</button>

                  </li>
                </ul>
              </div>
            </div><!--col-1-->

            <div class="col" style="padding: 0%; margin: 0%;">

              <div class="container" style="padding: 0%; margin: 0%; background-color: white;">

                <!--box-1-->
                <div class="row" id="box-1"  style=" padding: 0%; margin: 0%;">
                  <div class="col" style="display: flex;justify-content: space-around; align-items: baseline; background-color: rgb(184, 245, 235);">
                    <h3 class="p-3">Welcome <?php echo $firstname?> </h3>
                    <button type="submit" class="btn btn-primary m-3 showprofile" style="background-color: red;">Profile</button>
                  </div>
                  <div class="w-100"></div>
                  <div class="col" style="background-color: rgb(14, 160, 111);color: white;">
                    <h4 class="p-2" style="text-align: center;">Dashboard</h4>
                  </div>
                  <div class="row p-3" style="display: flex;flex-direction: row;">
                    <div class="col p-2"  style="border-right: 2px solid crimson;">
                      <h5 style="text-align: center; background-color: crimson; color: white;" class="p-2">Current Appointment</h5>
                      <h6 class="p-2">meet link : </h6>
                      <h6 class="p-2" >Latest appointment link comes here</h6>
                      <h6 class="p-2">Doctor name:  </h6>
                      <h6 class="p-2" >Latest appointment doctor comes here</h6>
                      
                    </div>
                    <div class="col p-2" style="border-right: 2px solid crimson;">
                      <h5 style="text-align: center; background-color: crimson; color: white;" class="p-2">Ratings</h5>
                      <h6 class="p-2">Ratings by Doctor : <span id="Doctor-rating"><?php echo $doctorrating ?></span></h6>
                      <h6 class="p-2">Rating by Patient : <span id="Patient-ating"><?php echo $patientrating ?></span></h6>
                    </div>
                    <div class="col p-2">
                      <h5 style="text-align: center;  background-color: crimson; color: white;" class="p-2">Queries Answered</h5>
                      <?php 
                                                    $query4 = "SELECT answer from query WHERE pid=".$_SESSION['p_id']."";
                                                    $result1 = mysqli_query($conn, $query4);
                                                    if(mysqli_num_rows($result1)>0)
                                                    {                                                        
                                                            while($row1=$result1->fetch_assoc())
                                                            {  $query2=$row1['answer'];
                                                                
                                                                ?>
                                                                
                                                                <div class="row zero">
                                                                    <div class="col border border-light p-2">
                                                                        <?php echo $query2;?>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <?php
                                                            }
                                                    }
                                                    ?>
                      
                      
                      
                    </div>
                  </div>
                </div>
                </div>
                
                <!-- box-2 -->
                <div class="col hide" id="box-2">
                  <div class="col" style="display: flex;justify-content: space-around; align-items: baseline; background-color: rgb(184, 245, 235);">
                    <h3 class="p-3">Welcome <?php echo $firstname?> </h3>
                    <button type="submit" class="btn btn-primary m-3 showprofile" style="background-color: red;">Profile</button>
                  </div>
                  <div class="row m-2 d-flex flex-column" style="background-color: white; font-weight: 500;">
                  <form action="patientlanding.php" id="signupForm" method="post">
                  <?php include 'errors.php'?>  
                  <div class="col p-3" style="border-bottom: 2px solid rgb(78, 31, 31);"><label for="" style="width: 20%; text-align: left;">First Name : </label><input type="text" name="firstname" value="<?php echo $firstname;?>"
                        style="width: 60%;"></div>                     
                    <div class="col p-3" style="border-bottom: 2px solid rgb(78, 31, 31);"><label for="" style="width: 20%; text-align: left;">Last Name : </label><input type="text" name="lastname" value="<?php echo $lastname;?>"
                        style="width: 60%;"></div>
                    <div class="col p-3" style="border-bottom: 2px solid rgb(78, 31, 31);"><label for="" style="width: 20%; text-align: left;">Email : </label><input type="email" name="mail" value="<?php echo $mail;?>"
                        style="width: 60%;"></div>
                    <div class="col p-3" style="border-bottom: 2px solid rgb(78, 31, 31);"><label for="" style="width: 20%; text-align: left;">Phone : </label><input type="Number" name="phone" value="<?php echo $phone;?>"
                        style="width: 60%;"></div>
                    <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>"></div>
                    <div class="row">
                      <div class="col p-3" style="border-bottom: 2px solid rgb(78, 31, 31);">
                      <label for="" style="width: 20%; text-align: left;">Past Diseases : </label>  
                      <select class="select" name="diseases">
                        <option value="Diseases"> Past Diseases</option>
                        <option value="Heart disease">Heart disease</option>
                        <option value="Diabetes">Diabetes</option>
                        <option value="Influenza and pneumonia">Influenza and pneumonia</option>
                        <option value="Kidney disease">Kidney disease</option>
                        <option value="Fever">Fever</option>
                        <option value="Anixety">Anixety</option>
                        <option value="None">None</option>
                      </select> 
  
                      </div>                  
                    </div>
                    <div class="col p-3" style="border-bottom: 2px solid rgb(78, 31, 31);"><label for="" style="width: 20%; text-align: left;">UHID Number : </label><input type="number" name="uhid" value="<?php echo $uhid;?>"
                        style="width: 60%;"></div>
                    <div class="col p-3" style="border-bottom: 2px solid rgb(78, 31, 31);"><label for="" style="width: 20%; text-align: left;">password: </label><input type="text" name="password" value="<?php echo $password;?>"
                        style="width: 60%;"></div>
                    <div class="col p-3" style="border-bottom: 2px solid rgb(78, 31, 31);"><label for="" style="width: 20%; text-align: left;">Any Treatment : </label><input type="text" name="treat" value="<?php echo $treat;?>"
                        style="width: 60%;"></div>
                    <div class="col p-3" style="border-bottom: 2px solid rgb(78, 31, 31);"><label for="" style="width: 20%; text-align: left;">Relative name : </label><input type="text" name="relativename" value="<?php echo $relativename;?>"
                        style="width: 60%;"></div>
                    <div class="col p-3" style="border-bottom: 2px solid rgb(78, 31, 31);"><label for="" style="width: 20%; text-align: left;">Relatives Contact : </label><input 
                        type="text" name="relativephone" value="<?php echo $relativephone;?>" style="width: 60%;"></div>
                    
                  </div>
                  <button type="submit" name="updatepatient" class="btn btn-primary m-3" value="updatepatient"style="background-color: red;">Update</button>
                </div>

                <!--box-3-->
                <div class="col hide" id="box-3">
                  <div class="col" style="display: flex;justify-content: space-around; align-items: baseline; background-color: rgb(184, 245, 235);">
                    <h3 class="p-3">Welcome <?php echo $firstname?> </h3>
                    <button type="submit" class="btn btn-primary m-3 showprofile" style="background-color: red;">Profile</button>
                  </div>
                  <h4 style="text-align: center;">Alerts</h4>
                  <div class="row m-2 p-2" style="height: auto;background-color: white;">
                      <div class="col"><h5 style="text-align: center; background-color: crimson; color: white;" class="p-2">Medication Name</h5></div>
                      <div class="col"><h5 style="text-align: center; background-color: crimson; color: white;" class="p-2">Medication Time</h5></div>
                      <div class="w-100"></div>
                      <div class="col mb-1 border border-2 p-3 border-dark" style="overflow: hidden;"><?php echo $medication?></div>
                      <div class="col mb-1 border border-2 p-3 border-dark" style="overflow: hidden;"><?php echo $medicationtime?></div>
                      <div class="w-100"></div>

                                           
                      <div class="col p-4">
                        
                    </div>
                  </div>
                </div>

                <!-- box-4 -->
                <div class="col hide" id="box-4">

                  <div class="container-fluid" style="margin: 0%; padding: 0%;">

                      <div class="col" style="display: flex;justify-content: space-around; align-items: baseline; background-color: rgb(184, 245, 235);">
                        <h3 class="p-3">Welcome <?php echo $firstname?> </h3>
                        <button type="submit" class="btn btn-primary m-3 showprofile" style="background-color: red;">Profile</button>
                      </div>

                      <div class="w-100"></div>
  
                      <div class="col" style="background-color: rgb(14, 160, 111);color: white;">
                        <h4 class="p-3" style="text-align: center;">Appointments</h4>
                      </div>
  
                      <div class="table p-2">
                        <TABLE class="mt-3" WIDTH="100%" CELLPADDING="3" CELLSPACING="3" style="background-color: white;">
                          <TR>
                            <TH COLSPAN="2"><BR>
                              <H3 style="text-align: center; letter-spacing: 2px;"> Current Appoinment</H3>
                            </TH>
                          </TR>
                          <TR>
                            <TH class="p-2" style="text-align: center; background-color: rgb(139, 8, 34); color: white; border: 1px solid white;"><h5>Zoom Link</h5></TH>
                            <TH class="p-2" style=" background-color: rgb(139, 8, 34); color: white; text-align: center; border: 1px solid white;">
                              <Link ><h5>Doctor name</h5>
                            </TH>
                          </TR>
                          <?php
                                                                                        $link = "SELECT link,did FROM appoint WHERE pid=".$_SESSION['p_id']."" ;
                                                                                        $linklist = $conn->query($link);

                                                                                        if ($linklist->num_rows > 0) {
                                                                                            while ($row1 = $linklist->fetch_assoc())
                                                                                            
                                                                                            {
                                                                                               $name1=$row1['link'];
                                                                                               $doctorid=$row1['did'];
                                                                                               
                                                                                               
                                                                                               
                                                                                                ?>
                                                                                                                                                                                                         
                                                                                                          <TR ALIGN="CENTER">
                                                                                                            <TD class="p-2"
                                                                                                                style="background-color: forestgreen; color: white; border: 1px solid white;">
                                                                                                                <h6><?php echo $name1?></h6>
                                                                                                            </TD>
                                                                                                            <TD class="p-2"
                                                                                                                style="background-color: forestgreen; color: white; border: 1px solid white;">
                                                                                                                <h6>Doctor name comes here </h6>
                                                                                                            </TD>
                                                                                                            

                                                                                                            
                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                                                                   
                                                                                                        </TR>
                                                                                            
                                                                                            
                                                                                                     
                                                                                            
                                                                                                        <?php
                                                                                            }
                                                                                            
                                                                                        }
                                                                                        else {
                                                                                            echo "0 results";
                                                                                        }?>
                          
                                    

 </TD>
                          </TR>
                        </TABLE>
                      </div>
                      <div class="table p-2">
                        <TABLE WIDTH="100%" CELLPADDING="3" CELLSPACING="3" style="background-color: white;">
                          <TR>
                            <TH COLSPAN="2"><BR>
                              <H3 style="text-align: center; letter-spacing: 2px;"> Past appoinment</H3>
                            </TH>
                          </TR>
                          <TR>
                            <TH class="p-2" style="text-align: center; background-color: rgb(139, 8, 34); color: white; border: 1px solid white;"><h5>Doctor Name</h5></TH>
                            <TH class="p-2" style="text-align: center; background-color: rgb(139, 8, 34); color: white; border: 1px solid white;">
                              <Link><h5>Link</h5>
                            </TH>
                          </TR>
                          <TR ALIGN="CENTER">
                            <TD class="p-2" style="background-color: forestgreen; color: white; border: 1px solid white;"><h6>xyz</h6></TD>
                            <TD class="p-2" style="background-color: forestgreen; color: white; border: 1px solid white;"><h6>meet</h6></TD>
                          </TR>
                        </TABLE>
                      </div>

                    
                  </div>

                </div>



                
                                    <!-- box-5 -->
                                    <div class="col hide" id="box-5">

                                                <div class="col" style="display: flex;justify-content: space-around; align-items: baseline; background-color: rgb(184, 245, 235);">
                                                    <h3 class="p-3">Welcome <?php $firstname ?></h3>
                                                    <button type="submit" class="btn btn-primary m-3 showprofile" style="background-color: red;">Profile</button>
                                                </div>

                                                <!-- <div class="w-100"></div> -->

                                                <div class="col" style="background-color: rgb(14, 160, 111);color: white;">
                                                    <h4 class="p-3" style="text-align: center;">Ask the Doctor</h4>
                                                </div>
                                                <form action="patientlanding.php" id="askdoctor" method="POST"> <?php include 'errors.php'?>

                                                <div class="row sm-4">
                                                      <div class="row p-5">
                                                              
                                                                  <div class="p-3 m-2 col d-flex flex-column align-items-center" style="background-color: white; border-radius: 10px;">
                                                                  <div class="rounded-circle " >
                                                                  <img src="img/d1.png" class="w-100 rounded-circle "  >
                                                                  </div>
                                                                  <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>" ></div>
                                                                  <div class=""><input type="hidden" name="doctorid1" id="" value="1" ></div>
                                                                  <div class="button m-3">
                                                                    <textarea  name="question1" id="" class="w-100" cols="10" rows="5" placeholder="Write your Query here..."> </textarea>
                                                                    <button type="submit" class="p-2" name="askdoctor1"><h5>Ask Dr Anil Seth</h5>  </button>
                                                                  </div>
                                                                  </div>
                                                                   <div class="p-3 m-2 col d-flex flex-column align-items-center" style="background-color: white; border-radius: 10px;">
                                                                  <div class="rounded-circle " >
                                                                  <img src="img/d1.png" class="w-100 rounded-circle "  >
                                                                  </div>
                                                                  <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>" ></div>
                                                                  <div class=""><input type="hidden" name="doctorid2" value="2" ></div>
                                                                  <div class="button m-3">
                                                                  <textarea name="question2" id="" class="w-100" cols="30" rows="5" placeholder="Write your Query here..."></textarea>
                                                                    <button type="submit" name="askdoctor2"  class="p-2">
                                                                      <h5>Ask Dr Sunil tripathi</h5>
                                                                    </button>
                                                                  </div>
                                                                  </div> 
                                                                  <div class="p-3 m-2 col d-flex flex-column align-items-center" style="background-color: white; border-radius: 10px;">
                                                                  <div class="rounded-circle " >
                                                                  <img src="img/d1.png" class="w-100 rounded-circle"  >
                                                                  </div>
                                                                  <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>" ></div>
                                                                  <div class=""><input type="hidden" name="doctorid3" value="3" ></div>
                                                                  <div class="button m-3">
                                                                  <textarea name="question3" id="" class="w-100" cols="30" rows="5" placeholder="Write your Query here..."></textarea>
                                                                    <button type="submit" name="askdoctor3" class="p-2">
                                                                      <h5>Ask Dr Isha Roy</h5>
                                                                    </button>
                                                                  </div>
                                                                  </div>

                                                                  </div>
                                                                  <div class="row p-5">
                                                                  <div class="p-3 m-2 col d-flex flex-column align-items-center" style="background-color: white; border-radius: 10px;">
                                                                  <div class="rounded-circle " >
                                                                  <img src="img/d1.png" class="w-100 rounded-circle "  >
                                                                  </div>
                                                                  <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>" ></div>
                                                                  <div class=""><input type="hidden" name="doctorid4" value="4" ></div>
                                                                  <div class="button m-3">
                                                                  <textarea name="question4" id="" class="w-100" cols="30" rows="5" placeholder="Write your Query here..."></textarea>
                                                                    <button type="submit" name="askdoctor4" class="p-2">
                                                                      <h5>Ask Dr Kapil Bajaj</h5>
                                                                    </button>
                                                                  </div>
                                                                  </div> 
                                                                  <div class="p-3 m-2 col d-flex flex-column align-items-center" style="background-color: white; border-radius: 10px;">
                                                                  <div class="rounded-circle " >
                                                                  <img src="img/d1.png" class="w-100 rounded-circle "  >
                                                                  </div>
                                                                  <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>" ></div>
                                                                  <div class=""><input type="hidden" name="doctorid5" value="5" ></div>
                                                                  <div class="button m-3">
                                                                  <textarea name="question5" id="" class="w-100" cols="30" rows="5" placeholder="Write your Query here..."></textarea>
                                                                    <button type="submit" name="askdoctor5" class="p-2" style="width: 100%; border-radius: 20px;">
                                                                      <h5>Ask Dr Tarun Mishra</h5>
                                                                    </button>
                                                                  </div>
                                                                  </div>

                                                                  <div class="p-3 m-2 col d-flex flex-column align-items-center" style="background-color: white; border-radius: 10px;">
                                                                  <div class="rounded-circle " >
                                                                  <img src="img/d1.png" class="w-100 rounded-circle "  >
                                                                  </div>
                                                                  <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>" ></div>
                                                                  <div class=""><input type="hidden" name="doctorid6" value="6" ></div>
                                                                  <div class="button m-3">
                                                                  <textarea name="question6" id="" class="w-100" cols="30" rows="5" placeholder="Write your Query here..."></textarea>
                                                                    <button type="submit" name="askdoctor6" class="p-2"> 
                                                                      <h5>Ask Dr Himanshu M</h5>
                                                                     </button>                                               
                                                                    </div>
                                                                                                                  
                                                                  </div>                                              
                                                                </div> 

                                                

</div>
</div>


                 <!-- <--box-6 --> -->
                <div class="col hide" id="box-6">

                  <div class="container" style="margin: 0%; padding: 0%;">
                    <div class="row p-2" style="background-color: white; margin: 0%;">
                    <form action="patientlanding.php" id="ratingbypatient" method="post">
                    <?php include 'errors.php'?>
                      <h1 class="p-3">How rating features work ?</h1>
                      <p class="p-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, nobis harum magni nisi, tempore iure illo corrupti
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
                        <input type="range" min="1" max="10" value="10" class="slider p-2" name="ratingbypatient1" id="myRange" >
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
                      
                      <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>"
                        ></div>
                        
                      <button type="submit"  class="btn btn-primary m-3" name="ratingbypatient" style="background-color: red;">Submit</button>
            
                    </div>


                </div>

              </div><!--container-->
  

            </div><!--col-2-->


            
            

        </div><!--container-fluid-->
      </section>

      <section class="m-5" style="background-color: whitesmoke">
        <div class="container-fluid">
          
          <div class="row mt-3" style="background-color:rgb(124, 122, 120);">
            <div class="col p-5" style="font-weight: bolder;color: whitesmoke;"><h1 style="text-align: center;">Consult Doctors</h1></div>
            </div>
            <form action="patientlanding.php" id="ratingbypatient" method="post">
                    <?php include 'errors.php'?>
          </div>
          <div class="row m-5">
            <div class="col mb-3">
              <div class="card d-flex flex-column justify-content-center align-items-center">
                <img src="login.jpg" alt="" class="m-3 rounded-circle" style="width: 70%;height: 70%;">
                <h5 class="m-4 p-3" style="text-align: center;"> Dr.Anil Seth</h5>
                <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>"></div>
                <div class=""><input type="hidden" name="doctorid1" value="1"></div>
                <button type="submit" name="scheduleAnAppointment1" class="btn btn-primary m-3" style="width: 40%;">Book</button>
              </div>
            </div>
            <div class="col mb-3">
              <div class="card d-flex flex-column justify-content-center align-items-center">
                <img src="login.jpg" alt="" class="m-3 rounded-circle" style="width: 70%;height: 70%;">
                <h5 class="m-4 p-3" style="text-align: center;">Dr.Sunil Tripathi</h5>
                <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>"></div>
                <div class=""><input type="hidden" name="doctorid2" value="2"></div>
                <button type="submit" class="btn btn-primary m-3" name="scheduleAnAppointment2" style="width: 40%;">Book</button>
              </div>
            </div>
            <div class="col mb-3">
              <div class="card d-flex flex-column justify-content-center align-items-center">
                <img src="login.jpg" alt="" class="m-3 rounded-circle" style="width: 70%;height: 70%;">
                <h5 class="m-4 p-3" style="text-align: center;">Isha Roy</h5>
                <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>"></div>
                <div class=""><input type="hidden" name="doctorid3" value="3"></div>
                <button type="submit" class="btn btn-primary m-3" name="scheduleAnAppointment3" style="width: 40%;">Book</button>
              </div>
            </div>
            <div class="w-100"></div>
            <div class="col mb-4">
              <div class="card d-flex flex-column justify-content-center align-items-center">
                <img src="login.jpg" alt="" class="m-3 rounded-circle" style="width: 70%;height: 70%;">
                <h5 class="m-4 p-3" style="text-align: center;">Kapil Bajaj</h5>
                <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>"></div>
                <div class=""><input type="hidden" name="doctorid4" value="4"></div>
                <button type="submit" class="btn btn-primary m-3" name="scheduleAnAppointment4" style="width: 40%;">Book</button>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card d-flex flex-column justify-content-center align-items-center">
                <img src="login.jpg" alt="" class="m-3 rounded-circle" style="width: 70%;height: 70%;">
                <h5 class="m-4 p-3" style="text-align: center;">Tarun Mishra</h5>
                <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>"></div>
                <div class=""><input type="hidden" name="doctorid5" value="5"></div>
                <button type="submit" class="btn btn-primary m-3" name="scheduleAnAppointment5" style="width: 40%;">Book</button>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card d-flex flex-column justify-content-center align-items-center">
                <img src="login.jpg" alt="" class="m-3 rounded-circle" style="width: 70%;height: 70%;">
                <h5 class="m-4 p-3" style="text-align: center;">Himanshu M</h5>
                <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>"></div>
                <div class=""><input type="hidden" name="doctorid6" value="6"></div>
                <button type="submit" class="btn btn-primary m-3" name="scheduleAnAppointment6"  style="width: 40%;">Book</button>
              </div>
            </div>

          </div>

        </div>
      </section>

      <section style="background-color: brown;">
        <div class="container mt-5">
          <div class="row">
            <h1 style="text-align: center; color: white; letter-spacing: 2px;" class="p-5">Diagnosis</h1>
          </div>
          <div class="row d-flex flex-row" style="color: white;">
            <div class="col">
              <h5 class="p-3" style="text-align: center;text-decoration: underline;">Suggestions by Doctors</h5>
              <p class="p-3" style="font-weight: lighter; border-right: 1px solid yellow;"><?php echo $suggestion?></p>
            </div>
            <div class="col">
              <h5 class="p-3" style="text-align: center;text-decoration: underline;">Prescriptions By Doctors</h5>
              <p class="p-3" style="font-weight: lighter; border-right: 1px solid yellow;"><?php echo $medication?></p>
            </div>
            <div class="col">
              <h5 class="p-3" style="text-align: center;text-decoration: underline;">Precautions By doctors</h5>
              <p class="p-3" style="font-weight: lighter;"><?php echo $precaution?></p>
            </div>
          </div>
        </div>
      </section>


      <footer>
        <div class="container-fluid" style="color: white; background-color: black;">
          <div class="row">
            <div class="col p-5">
              <h1>Made by:Coding Beast</h1>
              <p style="font-weight: lighter;">
              Thank you very much for visiting and using our service. 
         Fill free to give us suggestion we will try our best to make web service efficent  

				                 CREATED BY
				               Coding Beasts

              </p>
              
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
                
              </div>
            </div>
          </div>
        </div>
        
      </footer>


      


  </body>


  <script>

    const dashboard = document.getElementById("Dashboard");

    const alerts = document.getElementById("Alerts");
    
    const profile = document.getElementById("Profile");

    const appoinments = document.getElementById("Appointments");

    const doctor = document.getElementById("Doctor");

    const rating = document.getElementById("Rating");
    const showprofile = document.querySelectorAll(".showprofile");



    const box1 = document.getElementById("box-1");

    const box2 = document.getElementById("box-2");

    const box3 = document.getElementById("box-3");

    const box4 = document.getElementById("box-4");

    const box5 = document.getElementById("box-5");
    
    const box6 = document.getElementById("box-6");
    

    dashboard.addEventListener("click",()=>{
      // box.style.display = "none";
      // box.style.backgroundColor = "red";
      // console.log(box.classList);
      // box.classList.toggle("hide");
      // console.log(box.classList);
      box6.classList.add("hide");
      box5.classList.add("hide");
      box4.classList.add("hide");
      box3.classList.add("hide");
      box2.classList.add("hide");
      box1.classList.remove("hide");
      
    })

    alerts.addEventListener("click",()=>{
      box6.classList.add("hide");
      box5.classList.add("hide");
      box4.classList.add("hide");
      box3.classList.add("hide");
      box2.classList.remove("hide");
      box1.classList.add("hide");
      // console.log(box2.classList);
    })

    profile.addEventListener("click",()=>{
      box6.classList.add("hide");
      box5.classList.add("hide");
      box4.classList.add("hide");
      box3.classList.remove("hide");
      box2.classList.add("hide");
      box1.classList.add("hide");
      
    })
    showprofile.forEach(function (element){
      element.addEventListener("click",(e)=>{
        // console.log(e.target.classList)
        // console.log("event fired");
        box6.classList.add("hide");
      box5.classList.add("hide");
      box4.classList.add("hide");
      box3.classList.add("hide");
      box2.classList.remove("hide");
      box1.classList.add("hide");
        

      })
    })

    appoinments.addEventListener("click",()=>{
      box6.classList.add("hide");
      box5.classList.add("hide");
      box4.classList.remove("hide");
      box3.classList.add("hide");
      box2.classList.add("hide");
      box1.classList.add("hide");
      
    })

    doctor.addEventListener("click",()=>{
      box6.classList.add("hide");
      box5.classList.remove("hide");
      box4.classList.add("hide");
      box3.classList.add("hide");
      box2.classList.add("hide");
      box1.classList.add("hide");
      
    })

    rating.addEventListener("click",()=>{
      box6.classList.remove("hide");
      box5.classList.add("hide");
      box4.classList.add("hide");
      box3.classList.add("hide");
      box2.classList.add("hide");
      box1.classList.add("hide");
      
    })

  

  </script>
</html>