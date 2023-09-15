<!--php-->
<?php
require_once 'Connect.php' ;
if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=md5($_POST['password']);
        $cpass=md5($_POST['cpassword']);
        $select="SELECT * FROM user WHERE email='$email' && password='$pass'";
        $result= mysqli_query($con,$select);
        if(mysqli_num_rows($result)>0)
            {
                echo "user already exist!";
            }
            else{
                
                if($pass!=$cpass) 
                    {
                        echo "password not matched";
                    }
                    else
                        {
                            $insert="INSERT INTO user(name,email,password,role_id)  VALUES ('$name','$email','$pass','2')";
                            mysqli_query($con,$insert);
                            header('location:login-form.php');
                        }
                }

    };
?>
<!--html-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Register Form</title>
<!--custom css-->
    <link rel="stylesheet" href="css/LogIn.css">
    <link rel="icon" href="image/log.png">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3 id="xy">Register now</h3>
            <input type="text" name="name" required placeholder="Enter your name">
            <input type="email"name="email" required placeholder="Enter your email">
            <input type="password" name="password" required placeholder="Enter your password" id="pass">
            <input type="password" name="cpassword" required placeholder="Confirm your password" id="pass">
            <input type="submit" name="submit" value="Register now" class="form-btn">
            <p>Already have an account? <a id="bc" href="login-form.php">login now</a></p>
         </form>
  </div>
</body>
</html>