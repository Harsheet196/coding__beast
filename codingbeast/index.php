<?php include 'main.php'; ?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <!-- script -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styleHomePage.css">
    <link rel="stylesheet" href="styleforlogin.css">

    <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./favicon_io/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
    <title>Document</title>
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#"><h1>Virtual Health Assistant</h1></a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <h4>Home</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">
                            <h4 class="ms-2">About Us</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#our-services">
                            <h4 class="ms-2">Our Services</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">
                            <h4 class="ms-2">Contact</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#login">
                            <h4 class="ms-2">Login</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#login">
                            <h4 class="ms-2">Sign up</h4>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="tf-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <h1>Welcome to our Webapp <strong><span class="color">Virtual Health Assistant</span></strong></h1>
                <p class="lead">Your only Destination for <strong>Every</strong> Health <strong>Problems</strong></p>
                <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
            </div>
        </div>
    </div>


    <header>

        <figure class="figure">
            <img src="pexels-chokniti-khongchum-2280568.jpg" alt="" class="figure-img img-fluid">
        </figure>
    </header>


    <section class="container p-5" id="login">
        <div class="row m-3">


            <!-- *****Login FOr Doctor -->
            <div class="col m-4 bg-dark rounded-3 d-flex flex-column">

                <h2 class="p-3 mt-3 text-center text-warning">Login for Doctor</h2>
                <form method="POST" action="index.php#login">
                    <div class="form-group">
                        <input type="text" class="form-control mb-3" placeholder="Your Email *" name="mail" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control mb-3" placeholder="Your Password *" value="" name="password" />
                    </div>
                    <?php
                        if(isset($_POST['logindoctorbutton']))
                        {
                            include 'errors.php';
                        }?>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit mb-3" value="Login" name="loginDoctorButton" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div>
                </form>


                <!-- <h2 class="p-3 mt-3 text-center text-warning">Login for Patient</h2>
                <p class="text-white p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis qui dolor iure dicta nemo voluptatem quo quos recusandae a facere?</p>
                <button class="btn btn-dark p-3 m-4 border-warning btn-hover">Login</button> -->

            </div>


            <!-- *****Login FOr Patient -->
            <div class="col-md-4 bg-dark rounded-3 d-flex flex-column login-form-2">
                <h2 class="pb-3  text-center text-warning">Login for Patient</h2>
                <form method="POST" action="index.php#login">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" placeholder="Your Email *" name="mail" />
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" class="form-control" placeholder="Your Password *" name="password" />
                    </div>
                    <?php
                    if(isset($_POST['loginpatientbutton'])){
                                include 'errors.php'; }?>
                        <div class="form-group mb-3">
                            <input type="submit" name="loginpatientbutton" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div>
                </form>

            </div>
            <div class="col m-4 bg-dark rounded-3 d-flex flex-column justify-content-around align-items-center">
                <form action="signupforDoctor.php" method="POST">


                    <button class="btn btn-dark p-3 border-warning btn-hover" type="submit">Sign up for Doctors</button>
                </form>

                <form action="signuppatient.php" method="POST">
                    <button class="btn btn-dark p-3 border-warning btn-hover" type="submit">Sign up for Patients</button>
                </form>
            </div>
        </div>
    </section>


    <section id="our-services" style="margin: 0%; padding: 0%;">

        <div class="container-fluid p-5" style="margin: 0%; padding: 0%">

            <div class="row m-5 border-2 d-flex flex-row justify-content-center align-items-center" style="margin: 0%; padding: 0%;">
                <h1 class="text-center p-4 text-info fw-bold">Our Services
                Thank you very much for visiting and using our service. 
         Fill free to give us suggestion we will try our best to make web service efficient  

				                 CREATED BY
				               Coding Beasts
                </h1>
            </div>

            <div class="row m-5 border-2 d-flex flex-row justify-content-center align-items-center" style="margin: 0%; padding: 0%;">

                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <img class="w-50 m-4 rounded-circle" src="login.jpg" alt="">
                    <h3 class="p-3">Heading</h3>
                    <p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, et!</p>
                </div>

                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <img class="w-50 m-4 rounded-circle" src="login.jpg" alt="">
                    <h3 class="p-3">Heading</h3>
                    <p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, et!</p>
                </div>

                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <img class="w-50 m-4 rounded-circle" src="login.jpg" alt="">
                    <h3 class="p-3">Heading</h3>
                    <p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, et!</p>
                </div>

            </div>

        </div>
        </div>

    </section>


    <section id="about-us" class="row mt-5 mb-5">

        <div class="conteiner-fluid">

            <div class="row m-5">
                <h1 class="text-center p-5">About Us</h1>
            </div>

            <div class="row m-5 p-5">
                <div class="col">
                    <h1 class="text-center text-info">Thank you very much for visiting and using our service. 
         Fill free to give us suggestion we will try our best to make web service efficient  

				                 CREATED BY
				               Coding Beasts</p</h1>
                    <p class="lh-lg">
                </div>
                <div class="col">
                    <img src="login.jpg" alt="">
                </div>
            </div>

            

                    

        </div>

    </section>

    <section id="contact" class="row mt-5 mb-5">
        <div class="row">
            <h1 style="text-align: center; text-decoration: underline;" class="p-3">Contact Us</h1>
            <form action="">
                <div class="container m-2">
                    <div class="form-floating m-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating m-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating m-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comments</label>
                    </div>
                    <button type="submit" class="btn btn-primary m-3">Submit</button>
                </div>
            </form>
        </div>
    </section>
    <footer>
        <div class="container-fluid" style="color: white; background-color: black;">
            <div class="row">
                <div class="col p-5">
                    <h1>Coding_beast</h1>
                    <p style="font-weight: lighter;">
                    Thank you very much for visiting and using our service. 
         Fill free to give us suggestion we will try our best to make web service efficent  

				                 CREATED BY
				               Coding Beasts
                    </p>
                    
                </div>
                
                <div class="col p-5">
                    
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
    </script>

</body>

</html>