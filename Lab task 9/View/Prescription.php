<?php require("head.php"); ?>

<div class="container custom-form-dashboard">
  <div class="navitems">
    <table style="width: 100%;">
       <tr style="width: 100%;">

              <td style="width: 20%;">
         <ul>

            <li>User Account</li>
            <hr>
                    <li><a href="../View/Dasboard.php">Dashboard</a></li>
                    <li><a href="../View/View Profile.php">View Profile</a></li>
                    <li><a href="../View/Edit Profile.php">Edit Profile</a></li>
                    <li><a href="../View/Change Profile Picture.php">Change Profile Picture</a></li>
                    <li><a href="../View/Change Password.php">Change Password</a></li>
                    <li><a href="../View/Doctors List.php">Doctor's List</a></li>
                    <li><a href="../View/Appointment.php">Appointment</a></li>
                    <li><a href="../View/Prescription.php">Prescription</a></li>
                    <li><a href="../View/Payment.php">Payment</a></li>
                </ul>
               </td>
               <td style="width: 70%;">
                
               <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
                  <br>
                  <h1>Prescription: Already existed</h1><br>
                  <h3>Report: <input type="file" name="pfile"></h3><br><br>
                  <input type="submit" name="sub" value="Submit">
                  <br>
                </form>
               </td>
             </tr>
            
    </table>            
    </div>
</div>


<?php include("foot.php"); ?>