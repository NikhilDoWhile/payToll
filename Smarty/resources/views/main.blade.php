<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Smarty- The Smart City</title>
    <meta name="description" content="IOT and CN Projects" />
    <meta name="keywords" content="iot, cn, projects, resources, learn, fun" />
    <meta name="author" content="MZed" />
    <link rel="shortcut icon" href="images/labtime.png">
<!-- Google Font and Font Awesome -->
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Lato|Raleway|Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="{{("/css/main.css")}}">



    </head>
    <body>
            <div id="display">
      <div class="row">
        <div class="col-md-6 disp">
        <div class="candi">
          <img src="/images/smart-mesh-city.jpg" class="img-responsive" alt="Candidate">
        </div>
        <div class="info">
            <!-- <p id="intro">I'm a candidate</p> -->
            <h3>User Dashboard</h3>
            <!-- <p></p> -->
            <p><a href="{{ url('#')}}" class="btn btn-lg btn-outline">Get Inside</a></p>
          </div>
        </div>
        <div class="col-md-6 disp">
        <div class="emp">
          <img src="/images/SmartCity.jpg" class="img-responsive" alt="Employer">
        </div>
          <div class="info">
            <!-- <p id="intro">I'm an employer</p> -->
            <h3>Admin Dashborad</h3>
            <!-- <p></p> -->
            <p><a href="{{url('#')}}" class="btn btn-lg btn-outline">Get Inside</a></p>
          </div>
        </div>
      </div>
    </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    </body>
</html>
