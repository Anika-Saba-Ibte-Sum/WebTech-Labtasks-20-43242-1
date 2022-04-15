<?php require("head.php"); 
require("../Controller/View Profile-control.php"); 
if(!isset($_SESSION["username"])){
        header("location: Login.php");
    }


?>


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
               <td style="width: 80%;">
               	<div class="container custom-form" style="width:500px;">  
                                
                <form method="post" action="../Controller/Edit Profile-control.php">  
                      <?php 
                           $userData =get_user_view_data($_SESSION["username"]);
                         
                          ?>
                     <br>  
                     <fieldset>
                         <legend>EDIT PROFILE</legend>
                         <br> <br> 
                         <fieldset>
                              <legend>Name</legend> 
                              <input type="text" id= "p-name" name="name" class="form-control" onkeyup="checkName()" value="<?php if(isset($userData["patient_name"])){echo $userData["patient_name"];} ?>" /> </span><p id="nameErr"></p>    
                         </fieldset>
                         <hr>
                          <fieldset>
                               <legend>E-mail</legend>
                               <input type="text" id="e-ml" name = "email" class="form-control" onkeyup="checkEmail()" value="<?php if(isset($userData["e-mail"])){echo $userData["e-mail"];} ?>"/></span><p id="emailErr"></p>
                          </fieldset>
                          <hr>
                          <hr>
                         
                         <fieldset>
                         <legend>Gender</legend>
                          <input type="radio" id="male" name="gender" value="male" <?php if($userData["gender"] === "male"){echo "checked";} ?>
                          <label for="male">Male</label>                     
                          <input type="radio" id="female" name="gender" value="female"  <?php if($userData["gender"] === "female"){echo "checked";} ?>
                          
                          <label for="female">Female</label>
                          <input type="radio" id="other" name="gender" value="other"  <?php if($userData["gender"] === "other"){echo "checked";} ?>
                          
                          <label for="other">Other</label><br><br>
                         </fieldset>
                         <hr> 
                        
                         <legend>Date of Birth:</legend>
                         <input type="date" name="day" value="<?php if(isset($userData["dob"])){echo $userData["dob"];} ?>"> <br><br>
                    	<hr>
                    	<input type="submit" name="submit" value="Submit" class="btn btn-info"/>
                </form>  
           </div>
               </td>

             </tr>
            
		</table>            
    </div>
</div>
<script>
     function checkName() {
              
               if(document.getElementById("p-name").value === "") {
                    document.getElementById("nameErr").innerHTML = "Name can't be blank";
                    document.getElementById("p-name").style.outlineColor = "red";
               }else if (document.getElementById("p-name").value.length <= 2) {
                    document.getElementById("nameErr").innerHTML = "Name must have at least 2 characters";
                    document.getElementById("p-name").style.outlineColor = "red";
               }
               else{
                    document.getElementById("nameErr").innerHTML = "";
                    document.getElementById("name").style.borderColor = "black";

               }
               
        }
    function checkEmail() {
               if (document.getElementById("e-ml").value === "") {
                    document.getElementById("emailErr").innerHTML = "Email can't be blank";
                    document.getElementById("e-ml").style.outlineColor = "red";
               }else{
                    document.getElementById("emailErr").innerHTML = "";
                    document.getElementById("name").style.borderColor = "black";

               }
               
        }
</script> 
<?php require("foot.php"); ?>