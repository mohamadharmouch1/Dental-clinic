<?php require_once 'Connect.php';
 if (isset($_GET['id'])) {  
    $id = $_GET['id'];  
    $query = "DELETE FROM user WHERE id = '$id'";  
    $run = mysqli_query($con,$query);  
    if ($run) {  
         header('location:all_user.php');  }}

?>