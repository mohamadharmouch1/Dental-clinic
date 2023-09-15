<?php require_once 'Connect.php';
 if (isset($_GET['id'])) {  
    $id = $_GET['id'];  
    $query = "DELETE FROM doctor WHERE id = '$id'";  
    $run = mysqli_query($con,$query);  
    if ($run) {  
         header('location:Doctor.php');  }}

?>