<?php include 'config.php';?>
<?php 
    session_start();
   // $username = '';
    $mail = '';
    $firstname = '';
    $lastname = '';
    $uhid = '';
    $gender = '';
    $relativename = '';
    $relativephone='';
    $pastdisease='';
    $treat='';
    $phone = '';
    $date ='';
    $password='';
    $degree='';
    $license='';
    
    $errors = array();
    
    if(isset($_POST['registerPatientButton'])) {        
        $password = mysqli_real_escape_string($conn,$_POST["password"]);              
        $mail = mysqli_real_escape_string($conn,$_POST["mail"]);
        $firstname = mysqli_real_escape_string($conn,$_POST["firstname"]);
        $lastname = mysqli_real_escape_string($conn,$_POST["lastname"]);
        $phone = mysqli_real_escape_string($conn,$_POST["phone"]);
        $treat = mysqli_real_escape_string($conn,$_POST["treat"]);
        $uhid = mysqli_real_escape_string($conn,$_POST["uhid"]);
        $relativename = mysqli_real_escape_string($conn,$_POST["relativename"]);
        $relativephone = mysqli_real_escape_string($conn,$_POST["relativephone"]);
        $gender=$_POST["gender"];
        $diseases=$_POST["diseases"];
        
        
    
        
        if(empty($password)) {
            array_push($errors, "Password is required");
        }
        if(empty($mail)) {
            array_push($errors, "Email is required");
        }
        if(count($errors) == 0) {
            //$password = md5($password); for encryption
            $qRegisterUser = "INSERT INTO patient( pwd, mail, firstname, lastname, phone,relative_name,relative_contact,past_treatment,uhid,gender,past_diseases) 
                                VALUES ('$password', '$mail','$firstname','$lastname','$phone','$relativename','$relativephone','$treat','$uhid','$gender','$diseases')";
            mysqli_query($conn, $qRegisterUser);
        
    
        
    
            
            $_SESSION['mail'] = $mail;
            $_SESSION['sucess'] = "You are logged in";
            $_SESSION['type'] = "P";
            
            $qGetId = "SELECT p_id, mail FROM patient";
            $result =$conn->query($qGetId);
            while($row = $result->fetch_assoc()) {
                $_SESSION['p_id'] = $row['p_id'];
            }
            
            header('location: patientlanding.php');
             
            
        }
    }

     if(isset($_POST['loginpatientbutton'])) {
        $mail =mysqli_real_escape_string($conn,$_POST["mail"]);
        $password = mysqli_real_escape_string($conn,$_POST["password"]);
        
         if(empty($mail)) {
            array_push($errors, "Username is required");
        }
        if(empty($password)) {
            array_push($errors, "Password is required");
        }
        
        if(count($errors) == 0) {
            //$password = md5($password);
            $qValidate = "SELECT * from patient WHERE mail = '$mail' AND pwd = '$password'";
            $result = mysqli_query($conn, $qValidate);
            while($row = $result->fetch_assoc()) {
                $id = $row['p_id'];

            }
            
            if(mysqli_num_rows($result) > 0) {

                $_SESSION['mail'] = $mail;                
                $_SESSION['sucess'] = "You are logged in";
                $_SESSION['p_id'] = $id;
                $_SESSION['type'] = "P";
                header('location: patientlanding.php');
                echo isset($_SESSION['mail']);
                //$GLOBALS['idd']=$id;

                
            } else {
                array_push($errors, "The username/password is wrong!");
            }
        }
    }
            
    if(isset($_POST['registerdoctorbutton'])) { 
        
        $password = mysqli_real_escape_string($conn,$_POST["password"]);       
        $mail = mysqli_real_escape_string($conn,$_POST["mail"]);
        $firstname =mysqli_real_escape_string($conn,$_POST["firstname"]);
        $lastname = mysqli_real_escape_string($conn,$_POST["lastname"]);       
        $degree= mysqli_real_escape_string($conn,$_POST["degree"]);
        $license = mysqli_real_escape_string($conn,$_POST["license"]);        
        $gender=$_POST["gender"];           
        if(empty($firstname)) {
            array_push($errors, "firstname is required");
        }
        if(empty($password)) {
            array_push($errors, "Password is required");
        }
        if(empty($mail)) {
            array_push($errors, "Email is required");
        }     
        if(count($errors) == 0) {
            echo $firstname;
            echo $lastname;
            echo $mail;          
              $qRegisterDoctor = "INSERT INTO doctor (first_name, last_name, pwd, mail, gender,degree,license) VALUES ('$firstname','$lastname','$password', '$mail','$gender','$degree','$license')";
            
                   mysqli_query($conn, $qRegisterDoctor);
            
    
            $_SESSION['mail'] = $mail;
            
            $_SESSION['sucess'] = "You are logged in";
            $_SESSION['type'] = "P";        
            $qGetId = "SELECT d_id, mail FROM doctor";
            $result =$conn->query($qGetId);
            while($row = $result->fetch_assoc()) {
                $_SESSION['id'] = $row['d_id'];
            }
            header('location: doctorLandingPage.php');
        } 
        else 
        {   echo "Invalid username or password";

        }
    }
    
    if(isset($_POST['loginDoctorButton'])) {
        $mail=mysqli_real_escape_string($conn,$_POST["mail"]);
        $password = mysqli_real_escape_string($conn,$_POST["password"]);
        
        if(empty($mail)) {
            array_push($errors, "Email is required");
        }
        if(empty($password)) {
            array_push($errors, "Password is required");
        }
        
        if(count($errors) == 0) {
            // $password = md5($password);
            
            $qValidate = "SELECT d_id, mail ,pwd from doctor WHERE mail = '$mail' AND pwd = '$password'";
            $result = mysqli_query($conn, $qValidate);
            while($row = $result->fetch_assoc()) {
                $id = $row['d_id'];
            }
            
            if(mysqli_num_rows($result) > 0) {
                $_SESSION['mail'] = $mail;
                $_SESSION['sucess'] = "You are logged in";
                $_SESSION['type'] = "D";
                $_SESSION['d_id'] = $id;
                header('location: DoctorLandingPage.php');
                echo isset($_SESSION['mail']);
                
            } else {
                array_push($errors, "The username/password is wrong!");
            }
        }
    }
    if(isset($_POST['updatepatient'])) {   
        $id=mysqli_real_escape_string($conn,$_POST["patientid"]);
        $password = mysqli_real_escape_string($conn,$_POST["password"]);              
        $mail = mysqli_real_escape_string($conn,$_POST["mail"]);
        $firstname = mysqli_real_escape_string($conn,$_POST["firstname"]);
        $lastname = mysqli_real_escape_string($conn,$_POST["lastname"]);
        $phone = mysqli_real_escape_string($conn,$_POST["phone"]);
        $treat = mysqli_real_escape_string($conn,$_POST["treat"]);
        $uhid = mysqli_real_escape_string($conn,$_POST["uhid"]);
        $relativename = mysqli_real_escape_string($conn,$_POST["relativename"]);
        $relativephone = mysqli_real_escape_string($conn,$_POST["relativephone"]);        
        $diseases=$_POST["diseases"];
        
        $updatepatientrequest = "UPDATE patient SET pwd='$password', mail='$mail', firstname='$firstname', lastname='$lastname', phone='$phone',relative_name='$relativename',relative_contact='$relativephone',past_treatment='$treat',uhid='$uhid',past_diseases='$pastdisease'
                             WHERE p_id='$id' ";
            
                if (mysqli_query($conn, $updatepatientrequest)) {
                
                
                } else {
                echo "Error updating record: " . mysqli_error($conn);
                }

    }
    if(isset($_POST['updatedoctor'])) {   
        $id=mysqli_real_escape_string($conn,$_POST["doctorid"]);
        $password = mysqli_real_escape_string($conn,$_POST["password"]);              
        $mail = mysqli_real_escape_string($conn,$_POST["mail"]);
        $firstname = mysqli_real_escape_string($conn,$_POST["firstname"]);
        $lastname = mysqli_real_escape_string($conn,$_POST["lastname"]);
        $degree = mysqli_real_escape_string($conn,$_POST["degree"]);
        $license = mysqli_real_escape_string($conn,$_POST["license"]);
        
        
        $updatedoctorrequest = "UPDATE doctor SET pwd='$password', mail='$mail', first_name='$firstname', last_name='$lastname', degree='$degree',license='$license'
                             WHERE d_id='$id' ";
            
                if (mysqli_query($conn, $updatedoctorrequest)) {
                
                
                } else {
                echo "Error updating record: " . mysqli_error($conn);
                }

    }
    if(isset($_POST['ratingbypatient'])) 
    {    
        $rp=mysqli_real_escape_string($conn,$_POST["ratingbypatient1"]);
        $id=mysqli_real_escape_string($conn,$_POST["patientid"]);
        $updateratingbypatient="UPDATE patient SET p_scale='$rp' WHERE p_id='$id' ";
        if(mysqli_query($conn,$updateratingbypatient)){
            
        }
        else{
            echo "Error updating record: " . mysqli_error($conn);

        }
    }
    if(isset($_POST['askdoctor1'])){
        $pid=mysqli_real_escape_string($conn,$_POST["patientid"]);
        $did=mysqli_real_escape_string($conn,$_POST["doctorid1"]);
        $question=mysqli_real_escape_string($conn,$_POST["question1"]);
        $ask = "INSERT INTO query ( pid,did,question) 
                                VALUES ('$pid','$did','$question')";
            mysqli_query($conn, $ask);

            header('location: patientlanding.php');      

    }
    if(isset($_POST['askdoctor2'])){
        $pid=mysqli_real_escape_string($conn,$_POST["patientid"]);
        $did=mysqli_real_escape_string($conn,$_POST["doctorid2"]);
        $question=mysqli_real_escape_string($conn,$_POST["question2"]);
        $ask = "INSERT INTO query ( pid,did,question) 
                                VALUES ('$pid','$did','$question')";
            mysqli_query($conn, $ask);

            header('location: patientlanding.php');      

    }
    if(isset($_POST['askdoctor3'])){
        $pid=mysqli_real_escape_string($conn,$_POST["patientid"]);
        $did=mysqli_real_escape_string($conn,$_POST["doctorid3"]);
        $question=mysqli_real_escape_string($conn,$_POST["question3"]);
        $ask = "INSERT INTO query ( pid,did,question) 
                                VALUES ('$pid','$did','$question')";
            mysqli_query($conn, $ask);

            header('location: patientlanding.php');      

    }
    if(isset($_POST['askdoctor4'])){
        $pid=mysqli_real_escape_string($conn,$_POST["patientid"]);
        $did=mysqli_real_escape_string($conn,$_POST["doctorid4"]);
        $question=mysqli_real_escape_string($conn,$_POST["question4"]);
        $ask = "INSERT INTO query ( pid,did,question) 
                                VALUES ('$pid','$did','$question')";
            mysqli_query($conn, $ask);

            header('location: patientlanding.php');      

    }
    if(isset($_POST['askdoctor5'])){
        $pid=mysqli_real_escape_string($conn,$_POST["patientid"]);
        $did=mysqli_real_escape_string($conn,$_POST["doctorid5"]);
        $question=mysqli_real_escape_string($conn,$_POST["question5"]);
        $ask = "INSERT INTO query ( pid,did,question) 
                                VALUES ('$pid','$did','$question')";
            mysqli_query($conn, $ask);

            header('location: patientlanding.php');      

    }
    if(isset($_POST['askdoctor6'])){
        $pid=mysqli_real_escape_string($conn,$_POST["patientid"]);
        $did=mysqli_real_escape_string($conn,$_POST["doctorid6"]);
        $question=mysqli_real_escape_string($conn,$_POST["question6"]);
        $ask = "INSERT INTO query ( pid,did,question) 
                                VALUES ('$pid','$did','$question')";
            mysqli_query($conn, $ask);

            header('location: patientlanding.php');      

    }
    if(isset($_POST['scheduleAnAppointment1'])){
        $pid=mysqli_real_escape_string($conn,$_POST["patientid"]);
        $did=mysqli_real_escape_string($conn,$_POST["doctorid1"]);
         include 'indexzoom.php';
         $rp3=$rp1;
          
        
        $ask = "INSERT INTO appoint ( pid,did,link) 
                                VALUES ('$pid','$did','$rp3')";
            mysqli_query($conn, $ask);

            header('location: patientlanding.php');      

    }
    if(isset($_POST['scheduleAnAppointment2'])){
        $pid=mysqli_real_escape_string($conn,$_POST["patientid"]);
        $did=mysqli_real_escape_string($conn,$_POST["doctorid2"]);
        
        include 'indexzoom.php';
         $rp3=$rp1;
          
        
        $ask = "INSERT INTO appoint ( pid,did,link) 
                                VALUES ('$pid','$did','$rp3')";
            mysqli_query($conn, $ask);

            header('location: patientlanding.php');       

    }
    if(isset($_POST['scheduleAnAppointment3'])){
        $pid=mysqli_real_escape_string($conn,$_POST["patientid"]);
        $did=mysqli_real_escape_string($conn,$_POST["doctorid3"]);
        
        include 'indexzoom.php';
         $rp3=$rp1;
          
        
        $ask = "INSERT INTO appoint ( pid,did,link) 
                                VALUES ('$pid','$did','$rp3')";
            mysqli_query($conn, $ask);

            header('location: patientlanding.php');   

    }
    if(isset($_POST['scheduleAnAppointment4'])){
        $pid=mysqli_real_escape_string($conn,$_POST["patientid"]);
        $did=mysqli_real_escape_string($conn,$_POST["doctorid4"]);
        
        include 'indexzoom.php';
         $rp3=$rp1;
          
        
        $ask = "INSERT INTO appoint ( pid,did,link) 
                                VALUES ('$pid','$did','$rp3')";
            mysqli_query($conn, $ask);

            header('location: patientlanding.php');      

    }
    if(isset($_POST['scheduleAnAppointment5'])){
        $pid=mysqli_real_escape_string($conn,$_POST["patientid"]);
        $did=mysqli_real_escape_string($conn,$_POST["doctorid5"]);
        
        include 'indexzoom.php';
        $rp3=$rp1;
         
       
       $ask = "INSERT INTO appoint ( pid,did,link) 
                               VALUES ('$pid','$did','$rp3')";
           mysqli_query($conn, $ask);

           header('location: patientlanding.php');     

    }
    if(isset($_POST['scheduleAnAppointment6'])){
        $pid=mysqli_real_escape_string($conn,$_POST["patientid"]);
        $did=mysqli_real_escape_string($conn,$_POST["doctorid6"]);
        
        include 'indexzoom.php';
         $rp3=$rp1;
          
        
        $ask = "INSERT INTO appoint ( pid,did,link) 
                                VALUES ('$pid','$did','$rp3')";
            mysqli_query($conn, $ask);

            header('location: patientlanding.php');       

    }
    if(isset($_POST['answer'])) 
    {    

        $qid=mysqli_real_escape_string($conn,$_POST["questionid"]);
        // $did=mysqli_real_escape_string($conn,$_POST["doctorid"]);
        $answer=mysqli_real_escape_string($conn,$_POST["answer1"]);

        $ans="UPDATE query SET answer='$answer' WHERE id='$qid' ";

        // $ans = "UPDATE query SET p_scale='$rp' WHERE p_id='$id' ";
            mysqli_query($conn, $ans);

            header('location: DoctorLandingPage.php');
 
    }
    if(isset($_POST['updatepatientbydoctor'])) {   
        $ide=mysqli_real_escape_string($conn,$_POST["patientid3"]);
        $medication = mysqli_real_escape_string($conn,$_POST["medication"]);              
        $medicationtime = mysqli_real_escape_string($conn,$_POST["medicationtime"]);
        $drate = mysqli_real_escape_string($conn,$_POST["rating"]);
        $suggestion = mysqli_real_escape_string($conn,$_POST["suggestion"]);
        $precaution= mysqli_real_escape_string($conn,$_POST["precaution"]);
        
        
        $updatepatientrequest11 = "UPDATE patient SET medication='$medication', medication_time='$medicationtime', d_scale='$drate', suggestion='$suggestion',precaution='$precaution'
                             WHERE p_id='$ide' ";
            
                if (mysqli_query($conn, $updatepatientrequest11)) {
                
                
                } else {
                echo "Error updating record: " . mysqli_error($conn);
                }

    }

   
    
    
    

    
    
?>
