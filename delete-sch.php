<?php require_once 'Connect.php';
 if (isset($_GET['schedule_id'])) {  
    $id = $_GET['schedule_id'];  
    $query = "DELETE FROM schedule WHERE schedule_id = '$id'";  
    $run = mysqli_query($con,$query);  
    if ($run) {  
         header('location:secretary_schedule.php');  }}

?>