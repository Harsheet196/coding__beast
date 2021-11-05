<?php include 'main.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="styleforDoctor.css">
    <title>Document</title>
    <style>
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }
        
        .card-registration .select-arrow {
            top: 13px;
        }
    </style>
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
                            <img src="doctor.jpg" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                        </div>
                        <div class="col-xl-6">

                            <div class="card-body p-md-5 text-black">
                                <h3 class="mb-5 text-uppercase">Doctor registration Form</h3>


                                <form action="signupforDoctor.php" id="signupform" method="post">
                                    <div class="row">
                                        <?php include 'errors.php'?>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example9" class="form-control form-control-sm" name="firstname" value="<?php echo $firstname;?>" />

                                            <label class="form-label" for="form3Example9">First name</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example90" class="form-control form-control-sm" name="lastname" value="<?php echo $lastname;?>" />

                                            <label class="form-label" for="form3Example90">Last name</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example9" class="form-control form-control-sm" name="degree" value="<?php echo $degree;?>" />

                                            <label class="form-label" for="form3Example9">Degree</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example90" class="form-control form-control-sm" name="license" value=" <?php echo $license;?>" />

                                            <label class="form-label" for="form3Example90">License Number</label>
                                        </div>

                                        <!-- <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1m" class="form-control form-control-sm" />
                        <label class="form-label" for="form3Example1m">First name</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1n" class="form-control form-control-sm" />
                        <label class="form-label" for="form3Example1n">Last name</label>
                      </div>
                    </div>
                  </div>
  
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1m1" class="form-control form-control-sm" />
                        <label class="form-label" for="form3Example1m1">Degree</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1n1" class="form-control form-control-sm" />
                        <label class="form-label" for="form3Example1n1">Licence number</label>
                      </div>
                    </div>
                  </div> -->

                                        <!-- <div class="form-outline mb-4">
                    <input type="text" id="form3Example8" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example8">Address</label>
                  </div> -->

                                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                            <h6 class="mb-0 me-4">Gender: </h6>
                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="female" />
                                                <label class="form-check-label" for="femaleGender">Female</label>
                                            </div>

                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="gender" id="maleGender" value="male" />
                                                <label class="form-check-label" for="maleGender">Male</label>
                                            </div>

                                            <div class="form-check form-check-inline mb-0">
                                                <input class="form-check-input" type="radio" name="gender" id="otherGender" value="other" />
                                                <label class="form-check-label" for="otherGender">Other</label>
                                            </div>



                                        </div>

                                        <!-- <div class="row">
                    <div class="col-md-6 mb-4">
  
                      <select class="select">
                        <option value="1">State</option>
                        <option value="2">Option 1</option>
                        <option value="3">Option 2</option>
                        <option value="4">Option 3</option>
                      </select>
  
                    </div>
                    <div class="col-md-6 mb-4">
  
                      <select class="select">
                        <option value="1">City</option>
                        <option value="2">Option 1</option>
                        <option value="3">Option 2</option>
                        <option value="4">Option 3</option>
                      </select>
  
                    </div>
                  </div> -->

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example9" class="form-control form-control-sm" name="mail" value="<?php echo $mail;?>" />

                                            <label class="form-label" for="form3Example9">Email ID</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example90" class="form-control form-control-sm" name="password" value="<?php echo $password;?>"/>

                                            <label class="form-label" for="form3Example90">Password</label>
                                        </div>

                                        <!-- <div class="form-outline mb-4">
                    <input type="text" id="form3Example99" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example99"></label>
                  </div>
  
                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example97" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example97">Email ID</label>
                  </div> -->

                                        <div class="d-flex justify-content-end pt-3">
                                            <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                                            <button type="submit" name="registerdoctorbutton" value="Register" class="btn btn-warning btn-lg ms-2">Submit Form</button>
                                        </div>
                                </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>