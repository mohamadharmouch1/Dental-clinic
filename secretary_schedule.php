<!-- secretary_schedule.php -->
<?php
session_start();
if($_SESSION['isloggedin']!=1||$_SESSION['role_id']!=3)
{
    header('location:login-form.php');
}
else
    {
        require_once 'Connect.php';
?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>
                Schedule
            </title>
            <link rel="stylesheet" href="css/Doctor.css">
            <link rel="icon" href="image/log.png">
        </head>
        <body>
            <h1>Appointment Request Viewing</h1>
        <?php
            // Retrieve schedule data from the database
            $sql = "SELECT * FROM schedule";
            $result =mysqli_query ($con,$sql);

            if(mysqli_num_rows($result)>0) {
                echo "<table Border=3>";
                echo "<tr>
                        <th>Scheudle_id</th>
                        <th>Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Dentist</th>
                        <th>Service</th>
                        <th>Delete</th>
                    </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['schedule_id'] . "</td>";
                    echo "<td>" . $row['DATE'] . "</td>";
                    echo "<td>" . $row['start_time'] . "</td>";
                    echo "<td>" . $row['end_time'] . "</td>";
                    echo "<td>" . $row['dentist'] . "</td>";
                    echo "<td>" . $row['service'] . "</td>";
                    echo"   <td>
                                <a href='delete-sch.php?schedule_id=".$row['schedule_id']."' >
                                    <img src='image/trash.png' style='width:30px;'>
                                </a>
                            </td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "No appointments scheduled.";
            }

        // Close the database connection
        $con->close();
    }
    ?>
</body>
</html>

