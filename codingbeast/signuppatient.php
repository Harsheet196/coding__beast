<?php include 'main.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleforpatient">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<section class="h-100 bg-dark">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card card-registration my-4">
            <div class="row g-0">
              <div class="col-xl-6 d-none d-xl-block">
                <img
                  src="patient.jpg"
                  alt="Sample photo"
                  class="img-fluid"
                  style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"
                />
              </div>
              <div class="col-xl-6">
                <div class="card-body p-md-5 text-black">
                  <h3 class="mb-5 text-uppercase">patient registration form</h3>
                  <form action="signuppatient.php" id="signupForm" method="post">
                  <?php include 'errors.php'?>
  
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1m" class="form-control form-control-sm" name="firstname" value="<?php echo $firstname;?>" />
                        <label class="form-label" for="form3Example1m">First name</label>
                        
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1n" class="form-control form-control-sm"name="lastname" value="<?php echo $lastname;?>" />
                        <label class="form-label" for="form3Example1m">Lastname</label>
                        
                      </div>
                    </div>
                  </div>
  
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1m1" class="form-control form-control-sm"name="phone" maxlength="10" value="<?php echo $phone;?>" />
                        <label class="form-label" for="form3Example1m1">Phone</label>
                        
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1n1" class="form-control form-control-sm" name="uhid" value="<?php echo $uhid;?>" />
                        <label class="form-label" for="form3Example1n1">UHID number</label>
                        
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1m1" class="form-control form-control-sm" name="relativename" value="<?php echo $relativename;?>" />
                        <label class="form-label" for="form3Example1m1">Relative name</label>
                        
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1n1" class="form-control form-control-sm" name="relativephone" value="<?php echo $relativephone;?>" />
                        <label class="form-label" for="form3Example1n1">relative contact</label>
                        

                      </div>
                    </div>
                  </div>
  
                  <!-- <div class="form-outline mb-4">
                    <input type="text" id="form3Example8" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example8">Address</label>
                  </div> -->
  
                  <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
  
                    <h6 class="mb-0 me-4">Gender: </h6>
  
                    <div class="form-check form-check-inline mb-0 me-4">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="gender"
                        id="femaleGender"
                        
                        value="female"
                      />
                      <label class="form-check-label" for="femaleGender">Female</label>
                    </div>
  
                    <div class="form-check form-check-inline mb-0 me-4">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="gender"
                        id="maleGender"
                        
                        value="male"
                      />
                      <label class="form-check-label" for="maleGender">Male</label>
                    </div>
  
                    <div class="form-check form-check-inline mb-0">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="gender"
                        id="otherGender"
                        
                        value="other3"
                      />
                      <label class="form-check-label" for="otherGender">Other</label>
                    </div>
                    
  
                  </div>
  
                  <div class="row">
                    <div class="col-md-6 mb-4">
  
                      <select class="select" name="diseases">
                        <option value="Diseases">Diseases</option>
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
  
                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example9" class="form-control form-control-sm" name="treat" value="<?php echo $treat;?>" />
                    <label class="form-label" for="form3Example9">Any treatment going on</label>
                    
                  </div>
  
                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example90" class="form-control form-control-sm" name="mail" value="<?php echo $mail;?>" />
                    <label class="form-label" for="form3Example90">Email</label>
                    
                                <span class="help-block small">Your address email to contact</span>
                  </div>
   
                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example99" class="form-control form-control-sm" name="password" value="<?php echo $password;?>"/>
                    <label class="form-label" for="form3Example99">password</label>
                    
                  </div>
  
                  <!-- <div class="form-outline mb-4">
                    <input type="text" id="form3Example97" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example97"></label>
                  </div> -->
  
                  <div class="d-flex justify-content-end pt-3">
                    <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                    <button type="submit" name="registerPatientButton" value="registerPatientButton" class="btn btn-warning btn-lg ms-2">Submit form</button>
                  </div>
                
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>