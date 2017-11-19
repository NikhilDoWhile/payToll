<?php

include("dbconn.php");
$tablename = "details";



if($_SERVER['REQUEST_METHOD']=='POST'){

        $contactperson=$_REQUEST['contactperson'];
        
        $email=$_REQUEST['email'];
        
        $phone=$_REQUEST['phone'];
        $numplate=$_REQUEST['numplate'];
        $amount=1000;
        
        $submit=$_REQUEST['submit'];

    if($contactperson=="" or $phone=="" or $email==""){
                           echo "<script>alert('All Fields Requireds')</script>";
                        }

        $flag=1;

        $sql="SELECT phone,email FROM $tablename";
        $result=mysqli_query($conn,$sql);
        while ($row= mysqli_fetch_array($result)) {
          if ($phone==$row[0] && $email==$row[1]) {
            mysqli_query($conn,"UPDATE $tablename SET comment='$row[2],$comment' WHERE (email='$email' AND phone='$phone') ");
            echo "<script>alert('thanks for contacting again')</script>";
            $flag++;
          }
    }
  if($flag==1){
    $query_upload="INSERT into $tablename (name,phone,email,number_plate,amount) VALUES ('$contactperson','$phone','$email','$numplate','$amount')";
    echo "<script>alert('Thank you! Your query Registered Sucessfully');</script>";

      mysqli_query($conn,$query_upload) or die("error in $query_upload == ----> ".mysqli_error($conn));}

                       

}


?>


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
  <a class="navbar-brand" href="index.php">Smarty</a>
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
      <li class="nav-item active">
        <a class="nav-link" href="#">Registration</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>

    </ul>
  </div>
  </div>
</nav>
</div>

<div class="container formzed">
<form id="form_id" name="register" enctype="multipart/form-data" action="" method="POST">
  <div class="form-group">
    <label for="contactperson">Name</label>
    <input type="text" class="form-control" name="contactperson" id="contactperson" placeholder="Enter Name">
    
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="phone" class="form-control" name="phone" id="phone" placeholder="Enter Phone number">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
     
  </div>
  
<div class="form-group">
                  <label for="inputEmail">Number Plate<span class="red">*</span></label>
                  <input type="text" name="numplate" class="form-control" id="numplate" placeholder="Enter your number plate" onkeypress="javascript: clearField("numplateerrorbox")">
                  
                </div>

  <button type="submit" name="submit" class="btn btn-light btn-block">Submit</button>
</form>
</div>

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
</html>

