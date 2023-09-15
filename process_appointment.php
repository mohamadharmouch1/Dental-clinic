<?php
  require_once 'Connect.php';

  if
(
  $_POST['date']!=NULL&&
  $_POST['email']!=NULL&&
  $_POST['start_time']!=NULL&&
  $_POST['end_time']!=NULL&&
  $_POST['dentist']!=NULL&&
  $_POST['service']!=NULL
)
{
  
    $date=$_POST['date'];
    $email=$_POST['email'];
    $start_time=$_POST['start_time'];
    $end_time=$_POST['end_time'];
    $dentist= $_POST['dentist'];
    $service= $_POST['service'];
        
        $insert = "INSERT INTO schedule ( DATE, start_time, end_time, dentist, service, email) 
                VALUES ('$date', '$start_time', '$end_time', '$dentist', '$service','$email')";
        $result= mysqli_query($con,$insert);
                echo"<script>alert('Request Sent')</script>";
        if ($result)
          {
          header("location: user.php"); 
          }
          else 
            {
              echo "Error: " . mysqli_error($con);
            }
}  
?>
