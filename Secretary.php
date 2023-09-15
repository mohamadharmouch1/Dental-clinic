<?php
session_start();
if($_SESSION['isloggedin']!=1||$_SESSION['role_id']!=3)
{
    header('location:index.php');
}
else
    {
        require_once 'Connect.php';
    }
?>
<!DOCTYPE html>   <!-- turns out  it changes in the layout -->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/admin.css">
        <link rel="icon" href="image/log.png">
        <title>
            DentalCare
        </title>
    </head>
    <body>
        <div class="topnav">
                <img src="image/logo.png" class="src">
                <a href="logout.php" >Log out</a>
                <a href="secretary_schedule.php">Schedule</a>
        </div>
       <center><img src="image/secretaire.png" style="width:900px;">
    </center>
       
    </body>
</html>