<?php include 'main.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="styleforlogin.css">

    <title>Login Page</title>
</head>
<body>
    
</body>
</html>

<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Login for Doctor</h3>
                    <form method="post" action="loginboth.php">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email *" name="mail" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" value="" name = "password" />
                        </div>
                        <?php
                        if(isset($_POST['logindoctorbutton'])){
                      include 'errors.php'; }?>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login"  name="logindoctorbutton"/>
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd">Forget Password?</a>
                        </div>
                    </form>





                   <!-- ********************************************************************* -->
            
                    
                </div><div class="col-md-6 login-form-2">
                    <h3>login for patient</h3>
                    <form method="post" action="loginboth.php">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email *" name="mail" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" value="" name = "password" />
                        </div>         <?php
                        if(isset($_POST['loginpatientbutton'])){
                      include 'errors.php'; }?>
                        <div class="form-group">
                            <input type="submit" name="loginpatientbutton" 
                            class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>