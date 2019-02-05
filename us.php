<?php

print_r($_POST);


?>













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="description" content="This is a website that teaches Native English">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
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
       
   <title>Contact Us</title>    
</head>

<body>
   
   
<div class="logo-top">
   

  <a href="" class="logo"><img src="image/logo-top.jpeg" alt="Sorry, the img is missing"></a>
    
    <!-- Sign In  -->   
     
      
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
    
   
  
 
 
 

<section class="contactpic">
   
   
    
      <div class="contactheader text-center">
             
            <p>We'd love to hear from you.</p>
             
  
         </div>
    
    
    
</section>




<div class="container">
    
    <h1>Stay in touch!</h1><br><br>
    
    <div id="error"></div>
    
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
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
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




<script type="text/javascript">
    
     $("form").submit(function(e) {
         
            e.preventDefault();
              
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
                  
                  
              } else {
                  
                 $("form").unbind("submit").submit();
                  
              }
          });
          
    
    
    
    
    
    
    
    
    
    
    
    
    </script>








































<!-- Comment form  -->

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
