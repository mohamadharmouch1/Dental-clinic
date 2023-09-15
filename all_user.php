<?php
session_start();
if($_SESSION['isloggedin']!=1||$_SESSION['role_id']!=1)
    {
        header('location:index.php');
    }
    else
    {  
        require_once 'Connect.php';
        $query="SELECT * FROM user";
        $res=mysqli_query($con,$query);
        $nbr=mysqli_num_rows($res);
    }
?>
<Center>
    <table border="5">
        <tr>
            <th> id </th>
            <th> name </th>
            <th> email </th>
            <th> password</th>
            <th> role_id </th>
        </tr>
<?php
    for($i=0;$i<$nbr;$i++)
    {
        $row= mysqli_fetch_assoc($res);
        echo"<tr>";
        echo"   <td>
                    $row[id]
                </td>";
        echo"   <td>
                    $row[name]
                </td>";
        echo"   <td>
                    $row[email]
                </td>";
        echo"   <td>
                    $row[password]
                </td>";
        echo"   <td>
                    $row[role_id]
                </td>";
        echo"   <td>
                    <a href='deleteuser.php?id=".$row['id']."' >
                        <img src='image/trash.png' style='width:30px;'>
                    </a>
                </td>";
    }
        echo"</tr>";
        echo"</table>";
        echo"</center>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Document
    </title>
    <link rel="stylesheet" href="css/doctor.css">
    <link rel="icon" href="image/log.png">
</head>
<body>
   
</body>
</html>