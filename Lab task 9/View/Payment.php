<?php require("head.php"); ?>

<div class="container custom-form-doctorlist">
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
                <div class="container custom-form" style="width:500px;">  
                                
                <form method="post">  
                      
                     <br>  
                     <fieldset>
                         <legend>FOR PAYMENT</legend>
                         <br> <br> 
                         <fieldset>
                              <legend>bKash/Rocket/Nagad Number</legend> 
                              <input type="text" name="name" class="form-control"/> 
                         </fieldset>
                         <hr>
                          <fieldset>
                               <legend>Amount</legend>
                               <input type="text" name = "email" class="form-control"/>
                          </fieldset>
                          <hr>
                         <fieldset>
                              <legend>Pin Number</legend>
                              <input type="password" name = "username" class="form-control" />
                         </fieldset>
                         <hr>
                        
                        
                          </fieldset>
                          <input type="submit" name="submit" value="Submit" class="btn btn-info" />
                          <input type="reset" name="reset" value="Reset" class="btn btn-info" /><br />                      
                          <?php  
                          if(isset($message))  
                          {  
                               echo $message;  
                          }  
                          
                          ?> 
                           
                          </fieldset>
                          <hr> 
                     
                </form>  
           </div>  
               </td>
             </tr>
            
    </table>            
    </div>
</div>


<?php include("foot.php"); ?>