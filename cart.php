<?php


session_start();

$connect = mysqli_connect("localhost", "tonysliu_cart", "13804406377Liu", "tonysliu_cart");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="cart.php"</script>';
			}
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
   
   
   
   
   
   
   
   
   
   
    <title>Cart</title>
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
            <a class="nav-link" style="color: #2b547e" href="index.html">Home <span class="sr-only">(current)</span></a>
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
       
   <title>Shopping Cart</title>    
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
    
    
    
    <div class="container">
			<br />
			<br />
			<br />
			<h3 align="center">Shopping Cart</h3><br />
			<br /><br />
			<?php
				$query = "SELECT * FROM products ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
            
            
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="product-items">
				<form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
					<div class="item" style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
		</div>
	
	<br />
	


<?php
//If you have use Older PHP Version, Please Uncomment this function for removing error 

/*function array_column($array, $column_name)
{
	$output = array();
	foreach($array as $keys => $values)
	{
		$output[] = $values[$column_name];
	}
	return $output;
}*/
?>
    
    
    
    
    
    
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
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