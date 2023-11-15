<?php
   
   include("../connection.php");
   $query = "SELECT * FROM feedbacks";
   $result = $database->query($query);
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedbacks</title>
    <link rel="stylesheet" href="../css/animations.css">  
    <link rel="stylesheet" href="../css/main.css">  
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
<div class="container">
  <div class="menu" style="background-color: beige;">
            <table class="menu-container" border="0">
                <tr>
                    <td style="padding:10px" colspan="2">
                        <table border="0" class="profile-container">
                            <tr>
                                <td width="30%" style="padding-left:20px" >
                                    <img src="../img/user.png" alt="" width="100%" style="border-radius:50%">
                                </td>
                                <td style="padding:0px;margin:0px;">
                                    <p class="profile-title">Administrator</p>
                                    <p class="profile-subtitle">admin@edoc.com</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                <a href="../logout.php" ><input type="button" value="Log out" class="logout-btn btn-primary-soft btn"></a>
                                </td>
                            </tr>
                    </table>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn menu-icon-dashbord" >
                        <a href="index.php" class="non-style-link-menu"><div><p class="menu-text">Dashboard</p></a></div></a>
                    </td>
                </tr>
                <tr class="menu-row">
                    <td class="menu-btn menu-icon-doctor ">
                        <a href="doctors.php" class="non-style-link-menu "><div><p class="menu-text">Doctors</p></a></div>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn menu-icon-schedule">
                        <a href="schedule.php" class="non-style-link-menu"><div><p class="menu-text">Schedule</p></div></a>
                    </td>
                </tr>
                <tr class="menu-row">
                    <td class="menu-btn menu-icon-appoinment">
                        <a href="appointment.php" class="non-style-link-menu"><div><p class="menu-text">Appointment</p></a></div>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn menu-icon-patient">
                        <a href="patient.php" class="non-style-link-menu"><div><p class="menu-text">Patients</p></a></div>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn menu-icon-feedbacks menu-active menu-icon-patien-active">
                        <a href="feedbacks.php" class="non-style-link-menu non-style-link-menu-active"><div><p class="menu-text">Feedbacks</p></a></div>
                    </td>
                </tr>

            </table>

            
        </div>

     <div class="dash-body">
         
     <table>
    <tr>
        <td colspan="2">
            <h2 style="text-align: center;"><u>Patient's Feedbacks</u></h2>
        </td>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        $counter = 0;
        while ($row = $result->fetch_assoc()) {
            if ($counter % 2 == 0) {
                echo '<tr>';
            }
            
            echo '<td>';
            echo '<p style="margin-left: 30px; color: blue; font-size: 18px;"><b>' . $row['name'] . '</b></p>';
            echo '<p style = "margin-left: 30px; color: #808080; font-size: 13px">' . $row['email'] . '</p>';
            echo '<p style="margin-left: 30px; font-size: 15px; color: black; margin-top: 5px;"><b>Feedback:</b></p>';
            echo '<p style = "margin-left: 30px; margin-top: 2px;">'. $row['message'] . '</p>';
            echo '</td>';
            if ($counter % 2 != 0 || $counter == $result->num_rows - 1) {
                echo '</tr>';
            }
            $counter++;
        }
    } else {
        echo '<tr>';
        echo '<td colspan="2">No feedbacks to show</td>';
        echo '</tr>';
    }
    $database->close();
    ?>
</table>

        
       </div>
   
    </div>
</body>
</html>