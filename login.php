

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login | Smarty</title>
  <meta name="description" content="Smarty-Smart Ideas for Smart City" />
  <meta name="keywords" content="iot, smart, city, pay, toll" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="">
<!-- Google Font and Font Awesome -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">

</head>
<body id="logon">
<div class="boxed-navb">
<nav class="navbar container navbar-expand-lg navbar-light bg-light">
<div class="container">
  <a class="navbar-brand" href="#">Smarty</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registration.php">Registration</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Login</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
</div>
<form id="form_id" name="register" enctype="multipart/form-data" action="" method="POST">
<div class="container formzed">

  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone number">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="text" class="form-control" name="password" id="password" placeholder="Password">
  </div>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Remember me
    </label>
  </div>
  <button type="submit" name="submit" class="btn btn-light btn-block">Submit</button>

</div></form>

<?php
require("dbconn.php"); 

if($_SERVER['REQUEST_METHOD']=='POST'){
  

        $number=$_REQUEST['phone'];
        
        $password=$_REQUEST['password'];

        if(($number=="9728565482") && ($password== "1234") ){
        
        header('location: http://localhost/toll/show.php');
                
                        
                }}
               
             
?>

<div class="container">
  <footer class="row">
      <div class="col col-full">
        <p>
          &copy 2017 Smarty. All copyrights reserved.
        </p>
      </div>
    </footer>

</div>

	<!-- </div> -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- WoW Js -->
    <script src="js/wow.min.js"></script>
      <script>
          new WOW().init();
      </script>
      <script type="text/javascript" src="js/waypoints.min.js"></script>
    <script type="text/javascript" src="js/style.js"></script>

</body>



    
    <!-- /main nav --> 


<?php
//session_start();
//$admin_id=$_SESSION['j_userid'];
//echo $admin_id;
//Logout
@$log=$_REQUEST['log'];

 //if($log=="logout" or $admin_id=="")
      //{    
      
      //session_unset();      
     //header("location: index.php");
     
   // }


?>

<!-- Essential jQuery Plugins
    ================================================== --> 
<!-- Main jQuery --> 
<script src="js/jquery-1.11.1.min.js"></script> 
<!-- Twitter Bootstrap --> 
<script src="js/bootstrap.min.js"></script> 
<!-- Single Page Nav --> 
<script src="js/jquery.singlePageNav.min.js"></script> 
<!-- jquery.fancybox.pack --> 
<script src="js/jquery.fancybox.pack.js"></script> 
<!-- Owl Carousel --> 
<script src="js/owl.carousel.min.js"></script> 
<!-- jquery easing --> 
<script src="js/jquery.easing.min.js"></script> 
<!-- Fullscreen slider --> 
<script src="js/jquery.slitslider.js"></script> 
<script src="js/jquery.ba-cond.min.js"></script> 
<!-- onscroll animation --> 
<script src="js/wow.min.js"></script> 
<!-- Custom Functions --> 
<script src="js/main.js"></script>
<script src="js/jquery.slideControl.js"></script> 
<script src="js/bootstrap-datepicker.js"></script> 
<script type="text/javascript">
$(document).ready(function() {
  
  $('.slideControl').slideControl({
  min: 14,
  max: 100});
  $(".date-picker").datepicker();
});
</script> 



