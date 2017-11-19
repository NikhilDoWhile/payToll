<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration | Smarty</title>
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


<body id="regin">
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
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">Contact</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Registration</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="login.php">Logout</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
</div>
<!-- main nav -->
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
    
    <!-- /main nav --> 
<?php
require("dbconn.php"); 



$sql="SELECT name,number_plate,phone,email,amount FROM details";


                         $result=mysqli_query($conn,$sql);
                       while($row = mysqli_fetch_array($result)) {
                        
                
               
             
?>
      <div class="row">
        <div class="col-md-12">
          <div class="ShowData">
            <div class="travelShow">
              
              
                
                <div class="TravelDetails">
                <h4><?php echo "<br>"; ?></h4>
                
                <span class="Desc">Name:</span><span><?php echo $row['name']; ?></span><br>
                <span class="Desc">Phone:</span><span><?php echo $row['phone']; ?></span><br>
                <span class="Desc">Amount:</span><span><?php echo $row['amount']; ?></span><br>
                <span class="Desc">Phone:</span><span><?php echo $row['email']; ?></span><br>
                
                
                </div><br>

                
                
                
                </div>
              </div>
            
          </div>
        </div>
      </div>
      
      
      <?php
}
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
