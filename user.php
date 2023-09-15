<?php
session_start();
if($_SESSION['isloggedin']!=1||$_SESSION['role_id']!=2)
  {
      header('location:index.php');
  }
    else{
      require_once 'Connect.php';
    }
?>
<!DOCTYPE html>   <!-- turns out  it changes in the layout -->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/index.css">
        <link rel="icon" href="image/log.png">
        <title>DentalCare</title>
    </head>

    <body>
        <div class="topnav">
                <img src="image/logo.png" class="src">
                <a href="logout.php" >Log out</a>
                <a href="rate.php">Rate us</a>
                <a href="Appointment.php">Make An Appointment</a>
                <a href="Services.php" style="padding-bottom:130px;">Services</a>
        </div>
        <div class="introduction">
            <div class="stopfloating">
                <h1>
                    WE ARE READY TO HELP & TAKE CARE OF YOUR DENTAL HEALTH.
                </h1>
                <h2>
                    Get New Teeth That Last Forever
                </h2>
                <p>
                    This clinic was established in 2015 to brighten your smile , we offer advanced solutions for correcting teeth throught 
                    our strong experience and our modern facilities. Our center is headed by a carefully selected team of expert dentists who 
                    ensure that your experience in dental care is unparalleled.<br/>
                <h2>
                    Why is dentistry important? <br/>
                </h2>
                    Dentists are often the first health care professionals <br>
                    to recognize and identify a wide variety of diseases,<br>
                    ranging from hypertension to oral cancer.<br>
                    They diagnose and treat problems affecting <br>
                    the teeth, gingival tissue, tongue, lips and jaws.<br><br>
                </p>
            </div>
                <a href="team.php"><img src="image/intro.png" alt="intro"></a> 
        </div>
           
  </body>
</html>