<?php require("head.php"); ?>
<?php require("../Controller/View Profile-control.php"); 
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
                    <li><a href="../View Profile.php">View Profile</a></li>
                    <li><a href="../View/Edit Profile.php">Edit Profile</a></li>
                    <li><a href="../View/Change Profile Picture.php">Change Profile Picture</a></li>
                    <li><a href="../View/Change Password.php">Change Password</a></li>
                    <li><a href="../View/Doctors List.php">Doctor's List</a></li>
                    <li><a href="../View/Appointment.php">Appointment</a></li>
                    <li><a href="../View/Prescription.php">Prescription</a></li>
                    <li><a href="../View/Payment.php">Payment</a></li>
                </ul>
               </td>
               <td style="width: 50%;">
               	

               	<div class="container custom-form" style="width:500px;">  
                                
                <form method="post">  
            		      <?php 
                           $userData =get_user_view_data($_SESSION["username"]);
                           if($userData != null){
                          ?>
                     <br>  
                     <fieldset>
                         <legend>PROFILE</legend>
                         <br> <br> 
                         <fieldset>
                              <label>Name :</label>
                              <label><?php echo $userData["patient_name"]; ?></label>
                        
                         <hr>
                          
                               <label>E-mail :</label>
                               <label><?php echo $userData["e-mail"]; ?></label>
                          
                          <hr>
                         
                         <label>Gender :</label>
                          <label><?php echo $userData["gender"]; ?></label>
                         <br><br>
                         
                         <hr> 
                        
                         <label>Date of Birth :</label>
                         <label><?php echo $userData["dob"]; ?></label><br>
                     <?php }   ?>
                    	 <a href="../View/Edit Profile.php">Edit Profile</a>

                    	 </fieldset>

                     
                </form>  
           </div>  

               	
               </td>

               <td style="width: 30%;">
				<?php 
					$my_img_name = "picture.png";
					if(isset($_SESSION['image'])){
						$my_img_name = $_SESSION['image'];
					}
				?>

				<form action="View Profile.php" method="post" enctype="multipart/form-data">
			    
			      <img src="../uploads/<?php echo $my_img_name; ?>" width="180" height="210">
			      <br>
			      <a href="Change Profile Picture.php">Change Profile</a>
			      <br>
			    	
			  	  
			 	</form>
               </td>
             </tr>
            
		</table>            
    </div>
</div>
<?php require("foot.php"); ?>