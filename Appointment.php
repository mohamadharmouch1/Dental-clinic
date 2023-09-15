<?php
session_start();
if($_SESSION['isloggedin']!=1||$_SESSION['role_id']!=2)
{
    header('location:login-form.php');
}
else
    {
        require_once 'Connect.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <link rel="icon" href="image/log.png">
    <title>
        Make An Appointment
    </title>
</head>
<body>
    <div class="container">
        <h1>Request Booking Appointment</h1>

        <form method="post" action="process_appointment.php">
            <!-- Email ID -->
            <label for="email">Email:</label>
            <input type="email" name="email" required id="email"><br><br>

            <!-- Date -->
            <label for="date">Date:</label>
            <input type="date" name="date" required id="date"><br><br>

            <!-- Start Time -->
            <label for="start_time">Start Time:</label>
            <input type="time" name="start_time" required id="start_time"><br><br>

            <!-- End Time -->
            <label for="end_time">End Time:</label>
            <input type="time" name="end_time" required id="end_time"><br><br>

            <!-- Dentist -->
            <label for="dentist">Dentist:</label>
                <select name="dentist" id="dentist" required="">
                    <option value="Dennis Walter">
                        Dennis Walter
                    </option>
                    <option value="Jerry Forb">
                        Jerry Forb 
                    </option>
                    <option value="Olivia Rodriguez">
                        Olivia Rodriguez
                    </option>
                    <option value="Emma Willson">
                        Emma Willson
                    </option><br>
                </select>

            <!-- Service -->
            <label for="service">Service:</label>
                <select name="service" id="service">
                    <option>Dental Braces</option>
                    <option>Dental Implant Surgery</option>
                    <option>Cosmetic Dentistry</option>
                    <option>Root Canal</option>
                </select>
            <input type="submit" name="submit" value="Book Appointment">
        </form>
    </div>
</body>
</html>