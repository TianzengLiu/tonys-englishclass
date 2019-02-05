<?php


    $error = "";

    $successMessage = "";

    if ($_POST)
    {
        
        if (!$_POST["email"]) {
            
            $error .= "An email address is required.<br>";
        }
        
        
        if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            
            $error .= "The email address is invalid.<br>";  
        }
        
        if ($error != "") {
            
             $error = '<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' . $error . '</div>';
            
        } else {
                
                $successMessage = '<div class="alert alert-success" role="alert"> Thanks for your registration!</div>';
                
            
        }
        
   
        
    }



?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../../../../favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
     <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.css-master/animate.min.css">
    
    <link href="css/style.css" rel="stylesheet">
    
    
    
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
   <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
   
   
   
   
      <!-- Latest compiled and minified CSS 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  

-->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
   
   
   
   
   
   
   
   
   
    <title>Register</title>
  </head>
  
  
  <style>
    
.carousel-caption {
  bottom: 20rem;
  z-index: 10;
}
    </style>
  
  

 
  
  
  
  
  
  
  
  
  
  
  <body>
  
 
    
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
      <div class="container-fluid">
      <a class="navbar-brand" style="color: #2b547e; font-size: 30px" href="index.html">Tony's English Class</a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" style="color: #2b547e" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Popular Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="story.html">Stories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          
          
          
          
          
        </ul>
        </div>
      </div>
    </nav>
    
   
   









<!--


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="description" content="This is a website that teaches Native English">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="teaching, native English">
        <meta name="author" content="Tony">

       
        <link href="css/style.css" rel="stylesheet">
        <link href="css/slicknav.min.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">


        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
        <script src="js/caroufredsel.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
   <title>Register</title>    
</head>

<body>
   
   
<div class="logo-top">
   

  <a href="" class="logo"><img src="image/logo-top.jpeg" alt="Sorry, the img is missing"></a>
    
    <!-- Sign In   
     
      
     <a href="signin.php" class="btn btn-primary signinbutton" role="button">Sign In</a>
      
       
    </div>
    
    
    <header>
        <div class="container"> 
            <div class="row">
                
                <nav>
                    <ul class="menu" id="menu">
                        
                        <li><a  class="scroll" href="index.html">Home</a></li>
                            <li><a  class="scroll" href="">About</a></li>
                            <li><a  class="scroll" href="">Our Location</a></li>
                            <li><a  class="scroll" href="">Popular Courses</a></li>
                            <li><a  class="scroll" href="">Team</a></li>
                            <li><a  class="scroll" href="story.html">Stories</a></li> 
                            <li><a  class="scroll" href="">Blog</a></li>
                            <li><a  class="scroll" href="contact.php">Contact</a></li>
                        
                        <li>
                          
                            <input type="text" name="search" class="searchbox" placeholder=" Search">
                            
            
                        </li>
                        
                        
                    </ul>
                    
             
                </nav>
      
            </div>
     
        </div>
     
    </header>
    
    -->
    
    <br><br><br><br>
    
     <section class="signin" >
       <div class="container">
           
           <div class="row">
               
          
    
    
    <div class="col-md-6 signinpart">
    <br><br>
    <h4>REGISTER</h4><br>
    
    <div id="error"> <? echo $error.$successMessage; ?></div>
    
    <form method="post">
  
<div class="form-group">
    <label for="fname">First name</label>
    <input type="text" class="form-control" id="fname" name="fname" placeholder="First name">
  </div>
   
   <div class="form-group">
    <label for="lname">Last name</label>
    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name">
  </div>
  
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted"><i>We'll never share your email with anyone else.</i></small>
  </div>
  
  
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password"><br>
  </div>
  
  
  <button type="submit" id="submit" class="btn btn-primary">Register</button><br><br>
</form>
    
    
    
    
    
    
    
</div>

 </div>
    </div>
     </section>
    
    
    
    <br><br>
    
    
    
    
    
    
    
   <script type="text/javascript">
    
    
    
     $("form").submit(function(e) {
         
              
              var error = "";
              
              if ($("#email").val() == "") {
                  
                  error += "The email field is required.<br>"
                  
              }
              
              if ($("#password").val() == "") {
                  
                  error += "The password is required.<br>"
                  
              }
              
            
              if (error != "") {
                  
                 $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
                  
                 return false;  
                  
              } else {
                  
                 return true;
                  
              }
          });
          
    
    
    
    
    
    
    
    
    
    
    
    
    </script>

 
    
    
    
    
    
    
    <!--
    
    <section class="signin" >
       <div class="container">
           
           <div class="row">
               
                <div class="col-md-6 signinpart">
                
                <h4>SIGN IN</h4>
                <p>Please enter your email and password</p>
                <form class="form">
                    
                    <input type="text" name="email" placeholder=" Email"><br>
                    <input type="password" name="password" placeholder=" Password"><br>
                    <a href="#">Forgot your password?</a><br>
                    
                    
                    <div class="signin-submit">
                    <input type="submit" name="signin" value="Sign In">
                    
                    </div>
                </form>
                
               </div>
               
               
               <div class="col-md-6 registerpart vl">
                
                <h4>REGISTER</h4>
                <p>Please register to create an account</p>
                <form class="form">
                   
                    <input type="text" name="firstName" placeholder=" First Name">      
                    <input type="text" name="lastName" placeholder=" Last Name">
                    <input type="text" name="phone" placeholder=" Phone"> 
                    <input type="text" name="email" placeholder=" Email"> 
                    <input type="password" name="password" placeholder=" Password">
                    
                    
                    <div class="register-submit">
                    <input type="submit" name="register" value="Register">
                    </div>
                    
                </form>
                
               </div>
               
                <div class="col-md-6 registerpart2 ">
                <hr>
                <h4>REGISTER</h4>
                <p>Please register to create an account</p>
                <form class="form">
                   
                    <input type="text" name="firstName" placeholder=" First Name">      
                    <input type="text" name="lastName" placeholder=" Last Name">
                    <input type="text" name="phone" placeholder=" Phone"> 
                    <input type="text" name="email" placeholder=" Email"> 
                    <input type="password" name="password" placeholder=" Password">
                    
                    
                    <div class="register-submit">
                    <input type="submit" name="register" value="Register">
                    </div>
                    
                </form>
                
               </div>
           </div>
       </div>
        
        
        
        
    </section>
    
    
    
    
    
    -->
    
   <!--    footer   --> 
    
    
    <div id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4>Contact Us</h4>
                    <p><i class="fa fa-home"></i> 2202 22rd Avenue <br> Washington DC, 20036</p>
                    <p><i class="fa fa-envelope"></i> info@web.com</p>
                    <p><i class="fa fa-phone"></i> +1 235 457 2658</p>
                    <p><i class="fa fa-globe"></i> www.web.com</p>
                </div>
                
                
                <div class="col-md-3">
                    <h4>FAQs</h4>
                    <p>payment</p>
                    <p>textbook</p>
                    <p>tools</p>
               
                </div>
                
                
                <div class="col-md-3">
                    <h4>Legal</h4>
                    <p>Terms & Conditions</p>
                    <p>Privacy Policy</p>
                    <p>Accessibility</p>
               
                </div>
                
                
                   <div class="col-md-3">
                    <h4>FOLLOE US</h4>
                    <i class="social fa fa-facebook-square"></i>
                    <i class="social fa fa-twitter-square"></i>
                    <i class="social fa fa-youtube-square"></i>
                    <i class="social fa fa-linkedin-square"></i>
                    <i class="social fa fa-github-square"></i><br><br>
                       <h5>SIGN UP FOR UPDATES</h5>
                    <input type="email" placeholder="Email"><button class="btn btn-primary">Subscribe</button>
               
                               <a href=""><img src="image/download_app_store.svg"></a>
                               <a href=""><img src="image/android-download.png"></a>
                               
                        </div>
                        
                              
                        
                    </div>
                    <br><br><br><br><br>
                    <div id="copyright">
                 <hr style="border:0.3px solid white">
                  <small> United States &copy; Tony's English Class 2018. All rights reserved.</small>
                </div>
                    
                    
                     
                 </div>
                 
                
             </div>
    
    
    
    
    
    
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>  
    
    
    
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
 

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../../../assets/js/vendor/holder.min.js"></script> 
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    
    
    
    
      
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    
    
    
    
   
   <script src="js/jquery.counterup-master/jquery.counterup.min.js"></script>
   <script src="js/imakewebthings-waypoints-34d9f6d/lib/jquery.waypoints.min.js"> </script>
   
   
   
   
    
    
    
    
    
    
    
    
    
    
   
    </body>
</html>