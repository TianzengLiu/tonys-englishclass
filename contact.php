<?php

    $error = "";

    $successMessage = "";

    if ($_POST)
    {
        
        if (!$_POST["email"]) {
            
            $error .= "An email address is required.<br>";
        }
        
        if (!$_POST["content"]) {
            
            $error .= "The content field is required.<br>";
        }
        
        if (!$_POST["subject"]) {
            
            $error .= "The subject is required.<br>";
        }
        
        if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            
            $error .= "The email address is invalid.<br>";  
        }
        
        if ($error != "") {
            
             $error = '<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' . $error . '</div>';
            
        } else {
            
            $emailTo = "me@tonys.com";
            
            $subject = $_POST["subject"];
            
            $content = $_POST["content"];
            
            $headers = "From: " .$_POST["email"];
            
            if (mail($emailTo, $subject, $content, $headers)) {
                
                $successMessage = '<div class="alert alert-success" role="alert"> Thank you for contacting us! Your message was sent. We will get back to you soon!</div>';
                
                
            } else {
                
                $error = '<div class="alert alert-success" role="alert"> Thank you for contacting us! Your message was sent. We will get back to you soon!</div>';
            }
                
            
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
   
  
    <title>Contact</title>
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
    
   
   
    
   

<!-- Another Version
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="description" content="This is a website that teaches Native English">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="keywords" content="teaching, native English">
        <meta name="author" content="Tony">
        <meta name="viewport" content="initial-scale=1.0">
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
       
        <link href="css/style.css" rel="stylesheet">
        <link href="css/slicknav.min.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
        <script src="js/caroufredsel.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
   <title>Contact Us</title>    
</head>

<body>
   
   
<div class="logo-top">
   

  <a href="" class="logo"><img src="image/logo-top.jpeg" alt="Sorry, the img is missing"></a>
    
    <!-- Sign In   
     
      
     <a href="signin.html" class="btn btn-primary signinbutton" role="button">Sign In</a>
      
       
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
 
 
 <!--

<section class="contactpic">
   
   
    
      <div class="contactheader text-center">
             
            <p>We'd love to hear from you.</p>
             
  
         </div>
    
    
    
</section>
-->

<br><br><br>
<div id="map"></div>  
<br>

<div class="container">
    <div class="row">
        <div class="col-md-6">
          <h1>We'd love to hear from you!</h1><br>
    
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
                   <label for="phone">Phone</label>
                   <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number">
                 </div>

                 <label for="country">Country</label><br>

                 <select id="country" name="country">
                 <option value="usa">United States</option>
                 <option value="uk">United Kingdom</option>
                 <option value="china">China</option>
                 <option value="canada">Canada</option>
                 <option value="australia">Australia</option>
                 </select><br><br>


                 <div class="form-group">
                  <label for="subject">Subject</label>
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="">
                 </div>


                 <div class="form-group">
                   <label for="content">How can we help you?</label>
                   <textarea class="form-control" id="content" name="content" rows="3" placeholder="Send message..."></textarea>
                 </div>

                 <button type="submit" id="submit" class="btn btn-primary">Submit</button>
             </form>
    
        </div>
    </div>
</div>
<br><br>




<script type="text/javascript">
    
     $("form").submit(function(e) {
         
              var error = "";
              
              if ($("#email").val() == "") {
                  
                  error += "The email field is required.<br>"
                  
              }
              
              if ($("#subject").val() == "") {
                  
                  error += "The subject field is required.<br>"
                  
              }
              
              if ($("#content").val() == "") {
                  
                  error += "The content field is required.<br>"
                  
              }
              
              if (error != "") {
                  
                 $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
                  
                 return false;  
                  
              } else {
                  
                 return true;
                  
              }
          });
          
    
    
    
</script>






<!--  Google Maps API  -->
  
<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
#map 
{
    height: 30%;
    width: 100%;
}
/* Optional: Makes the sample page fill the window. */
html, body 
{
    height: 100%;
    margin: 0;
    padding: 0;
}
    
</style>



<script>

      // This example displays a marker at the center of Australia.
      // When the user clicks the marker, an info window opens.

      function initMap() {
        var uluru = {lat: 39.9526, lng: -75.1652};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: uluru
        });

        var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h5 id="firstHeading" class="firstHeading">Tony\'s English Class</h5>'+
            '<div id="bodyContent">'+
            
            '<h6>Bring the opportunity to everyone!</h6>' +
  
            '</div>'+
            '</div>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          title: 'Uluru (Ayers Rock)'
        });
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
      }
    
</script>
  
      
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7T8B6aLV2H9vihRZm4Dy-bx61fxWyOWA&callback=initMap"> </script>
    
<!--

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
 
    <div id="map"></div>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: dfasdas.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7T8B6aLV2H9vihRZm4Dy-bx61fxWyOWA&callback=initMap">
    </script>
 


-->





<!-- Comment form 

<div class="container contactform">
 
  <form action="/action_page.php">
    <label for="fname">First Name</label><br>
    <input type="text" id="fname" name="firstname" placeholder=""><br>

    <label for="lname">Last Name</label><br>
    <input type="text" id="lname" name="lastname" placeholder=""><br>
    
    <label for="email">Email Address</label><br>
    <input type="text" id="email" name="email" placeholder="Enter email"><br>

    
    <label for="phone">Phone</label><br>
    <input type="text" id="phone" name="phone" placeholder="Enter your phone number"><br>


    <label for="country">Country</label><br>
    
    <select id="country" name="country">
     <option value="usa">USA</option>
     <option value="china">China</option>
     <option value="uk">UK</option>
     <option value="canada">Canada</option>
      <option value="australia">Australia</option>
 
    </select><br><br>

    <label for="comments">How can we help you?</label><br>
    <textarea id="comments" name="comments" placeholder="Send us message..." style="height:200px"></textarea><br>

    <input type="submit" value="Submit" class="commentsubmit btn btn-primary">
  </form>
</div>


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
    
    
    
    
    
    
    
    
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>  
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