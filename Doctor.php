<?php
session_start();
if($_SESSION['isloggedin']!=1||$_SESSION['role_id']!=1)
   {
    header('location:index.php');
   }
else{
    require_once 'Connect.php';
    $query="SELECT * FROM doctor";
    $res=mysqli_query($con,$query);
    $nbr=mysqli_num_rows($res);
    }
?>
<center>
<table border="5">
    <tr>
    <th> Id </th>
    <th> Name </th>
    <th> Age </th>
    <th> Department </th>
    <th> Phone </th>
    <th> Email </th>
    <th> Delete </th>
    </tr>
<?php
    for($i=0;$i<$nbr;$i++)
    {
        $row= mysqli_fetch_assoc($res);
        echo"<tr>";
        echo" <td> $row[id]</td>";
        echo" <td> $row[name]</td>";
        echo" <td> $row[age]</td>";
        echo" <td> $row[department]</td>";
        echo" <td> $row[phone]</td>";
        echo" <td> $row[email]</td>";
        echo"<td><a href='delete.php?id=".$row['id']."' id='btn'><img src='image/trash.png' style='width:30px;'></a>";
    }   
        echo"</tr>";
        echo"</table>";
        echo"</center>"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentists</title>
    <link rel="stylesheet" href="css/Doctor.css">
    <link rel="icon" href="image/log.png">
</head>
<body>
      
</body>
</html>