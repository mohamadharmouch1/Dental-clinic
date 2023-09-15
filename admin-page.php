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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Introducing New Dentist
        </title>
        <link rel="stylesheet" href="css/form.css">
        <link rel="icon" href="image/log.png">
    </head>
    <body>
        <div class="container">
            <form  method="post"  action="admin.php">
                <label for="name">
                    Name
                </label>
                <input type="text" name="name" placeholder="Dentist name.." id="Name" required>

                <label>
                    email
                </label>
                    <br/><br/>
                <input type="email" name="email" id="email" required>
                    <br/><br/>

                <label for="Age">
                    Age
                </label>
                    <br/><br/> 
                <input type="number" name="age" id="Age" min="24" max="100" value="24"required>
                    <br/><br/>
                <label>
                    Phone
                </label>
                    <br/><br/>
                <input type="tel" name="phone" id="phone" required>
                    <br/><br/>
                <label for="department">
                    Department
                </label>
                    <select name="department" id="department" required>
                        <option value="Orthodontist">
                            Orthodontist
                        </option>
                        <option value="Implantologist">
                            Implantologist
                        </option>
                        <option value="Cosmetic Dentist">
                            Cosmetic Dentist
                        </option>
                        <option value="Endodontists">
                            Endodontists
                        </option>
                </select> 
                    <br/><br/>
                <input type="submit" value="Submit" name="submit">
            </form>
        </div>
    </body>
</html>