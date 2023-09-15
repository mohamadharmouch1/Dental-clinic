<?php
session_start();
if($_SESSION['isloggedin']!=1||$_SESSION['role_id']!=1)
{
    header('location:index.php');
}
?>
<!--html-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  href="css/Admin.css">
        <link rel="icon" href="image/log.png">
        <title>
            Admin
        </title>
    </head>
    <body>
        <div class="topnav">
                <img src="image/logo.png" class="src">
                <a href="logout.php" >Log out</a>
                <a href="all_user.php">Show All users</a>
                <a href="Doctor.php">Show All Dentist</a>
                <a href="admin-page.php" style="padding-bottom:130px;">Add A Dentist</a>
        </div>
        <center>
                <img src="image/admin.png" alt="" style="width:900px;">
                
        </center>
    </body>
</html> 