<?php require("head.php"); ?>

 
<div class="container custom-form-dashboard">
  <div class="navitems">
    <table style="width: 100%;">
       <tr style="width: 100%;">

              <td style="width: 20%;">
         <ul>

            <li>User Account</li>
            <hr>
                    <li><a href="../ViewView/Dasboard.php">Dashboard</a></li>
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
                 <div class="container custom-form" style="width:500px;">  
                                
                <form method="post">  
                      
                     <br>  
                     <fieldset>
                         <legend>FOR APPOINTMENT</legend>
                         <br> <br> 
                         <fieldset>
                              <legend>Doctor Name</legend> 
                              
                                <select name="dname" id="dname">
                                  <option value="Md.Harunur Rashid">Md.Harunur Rashid</option>
                                  <option value="Md.Abul Kalam Ajad">Md.Abul Kalam Ajad</option>
                                  <option value="Mst.Abeda Banu">Mst.Abeda Banu</option>
                                  <option value="Md.Nurul Islam">Md.Nurul Islam</option>
                                  <option value="Md.Baset">Md.Baset</option>
                                </select> 
                         </fieldset>
                         <hr>
                          <fieldset>
                               <legend>Date</legend>
                               <select name="spl" id="spl">
                                  <option value="3/13/2022">3/13/2022</option>
                                  <option value="3/14/2022">3/14/2022</option>
                                  <option value="3/15/2022">3/15/2022</option>
                                  <option value="3/16/2022">3/16/2022</option>
                                  <option value="3/17/2022">3/17/2022</option>
                                </select> 
                          </fieldset>
                          <hr>
                         <fieldset>
                              <legend>Select Time</legend>
                              <select name="st" id="st">
                                  <option value="4.00pm">4.00pm</option>
                                  <option value="7.00pm">7.00pm</option>
                                  <option value="5.00pm">5.00pm</option>
                                  <option value="6.00pm">6.00pm</option>
                                  <option value="4.00pm">4.00pm</option>
                                </select> 
                         </fieldset>
                         <hr>
                         
                          <input type="submit" name="Appointment" value="Appointment" class="btn btn-info" />
                          <input type="submit" name="Cancel Appointment" value="Cancel Appointment" class="btn btn-info" /><br />                      
                          
                           
                          </fieldset>
                          <hr> 
                     
                </form>  
           </div>  
                    <?php
                    $message="Appointment is taken successfully";
                    if(isset($_POST["submit"]))  
                    {  
                        echo $message; 
                    }
                    ?> 

               </td>
             </tr>
            
    </table>            
    </div>
</div>


<?php include("foot.php"); ?>