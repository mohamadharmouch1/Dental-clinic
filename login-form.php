<?php
require_once 'Connect.php';
if(isset($_POST['submit']))
   {
    $email = $_POST['email'];
    $pass = md5($_POST['password']);
    $select = "SELECT * FROM user WHERE  email='$email'&& password='$pass'";
    $result = mysqli_query($con,$select);
    if(mysqli_num_rows($result)>0)
    {
    $row = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['isloggedin']=1;
    $_SESSION['user-id']=$row['id'];
    $_SESSION['name']=$row['name'];
    $_SESSION['role_id']=$row['role_id'];
         if($_SESSION['role_id']==2)
           {
            header('location:user.php');
           }
           elseif($_SESSION['role_id']==3)
            {
                header('location:Secretary.php');
            }
            elseif($_SESSION   ['role_id']==1)
                {
                header('location:admin1-page.php');
                }
                else
                    {
                    echo "incorrect email or password";
                    }                         
    }
   };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/LogIn.css">
    <link rel="icon" href="image/log.png">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3 id="xy">Login now</h3>
           <input type="email"name="email" required placeholder="Enter your email">
            <input type="password" name="password" required placeholder="Enter your password">
            <input type="submit" name="submit" value="Login now" class="form-btn">
            <p>Don't have an account? <a id="bc" href="register-form.php">Register now</a></p>

        </form>
    </div> 
</body>
</html>