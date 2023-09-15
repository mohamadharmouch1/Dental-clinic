<?php
  require_once 'Connect.php';

  if
(
  $_POST['name']!=NULL&&
  $_POST['age']!=NULL&&
  $_POST['department']!=NULL&&
  $_POST['phone']!=NULL&&
  $_POST['email']!=NULL
)
{
  
    $name=$_POST['name'];
    $age=$_POST['age'];
    $service=$_POST['department'];
    $tel= $_POST['phone'];
    $email=$_POST['email'];
    $select= "SELECT * FROM doctor WHERE name='$name'&& department='$service' ";
    $result= mysqli_query($con,$select);
    if(mysqli_num_rows($result)>0)
      {
          
          header("location:admin1-page.php");
          
      }
      else
      {
        $insert="INSERT INTO doctor(name,age,department,phone,email) 
                VALUES ('$name','$age','$service','$tel','$email')";
        $result1= mysqli_query($con,$insert);
                echo"<script>alert('Doctor has been saved')</script>";
        if ($result1)
          {
          header("location: Doctor.php"); 
          }
          else 
            {
              echo "Error: " . mysqli_error($con);
            }
      }
}    
?>