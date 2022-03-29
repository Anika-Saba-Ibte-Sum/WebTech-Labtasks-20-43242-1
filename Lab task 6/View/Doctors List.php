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
               <td class="DoctorList" style="width: 70%; position: relative;">
                
                <h1>Doctor's List</h1>
                <table style="display: block; position: absolute; left: 50%; transform: translateX(-50%);">
                  <tr>
                    <th>Doctor Name</th>
                    <th>Doctor Username</th>
                    <th>Specialist</th>
                    <th>Available Time</th>

                  </tr>
                  <tr>
                    <td>Md.Harunur Rashid</td>
                    <td>Rashid123</td>
                    <td>Medicine</td>
                    <td>4.00pm-8.00pm</td>
                  </tr>
                  <tr>
                    <td>Md.Abul Kalam Ajad</td>
                    <td>Ajad23</td>
                    <td>Heart</td>
                    <td>7.00pm-9.00pm</td>
                  </tr>
                  <tr>
                    <td>Mst.Abeda Banu</td>
                    <td>Abeda2356</td>
                    <td>Gynecologist</td>
                    <td>5.00pm-8.00pm</td>
                  </tr>
                  <tr>
                    <td>Md.Nurul Islam</td>
                    <td>nurul5</td>
                    <td>Eye</td>
                    <td>6.00pm-10.00pm</td>
                  </tr>
                  <tr>
                    <td>Md.Baset</td>
                    <td>baset67</td>
                    <td>Neuro</td>
                    <td>4.00pm-7.00pm</td>
                  </tr>
                </table>

              

              
               </td>
             </tr>
            
    </table>            
    </div>
</div>


<?php include("foot.php"); ?>