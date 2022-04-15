<?php require("head.php"); 

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
	<form method="post" action="../Controller/Change Password-control.php">

        
    <fieldset >
      <legend>CHANGE PASSWORD</legend>
      <label><span class="blue">Current Password: </span></label>
      <input type="text" id="password" name="curr" onkeyup="checkPass()"><span class="red">&nbsp;<?php if(isset($_SESSION["currErr"])){echo $_SESSION["currErr"]; $_SESSION["currErr"] = "";} ?></span><p id="passErr"></p>
      <br>
      <label><span class="green">New Password:</span> </label>
      <input type="text" id="npassword" name="new" value="<?php if(isset($_SESSION["passErr"])){echo $_SESSION["passErr"]; $_SESSION["passErr"] = "";} ?>" onkeyup="checkNPass()"><p id="npassErr"></p>
      <br>
      <label><span class="green">Retype New Password: </span></label>
      <input type="text" id="cpassword" name="re" value="<?php if(isset($_SESSION["reErr"])){echo $_SESSION["reErr"]; $_SESSION["reErr"] = "";} ?>" onkeyup="checkCPass()"><p id="cpassErr"></p>
      <hr>
      
      <input type="submit" name="sub">
      <br>
     </fieldset>
</form>
    </td>
  </tr>
</table>  
          
    </div>
</div>
<script>
    function checkPass(){
          if (document.getElementById("password").value == "") {
                    document.getElementById("passErr").innerHTML = "Password can't be blank";
                    document.getElementById("password").style.borderColor = "red";
          }
        }
        function checkNPass(){
          if (document.getElementById("npassword").value == "") {
                    document.getElementById("npassErr").innerHTML = "Password can't be blank";
                    document.getElementById("npassword").style.borderColor = "red";
          }else if (document.getElementById("npassword").value.length < 8) {
                    document.getElementById("npassErr").innerHTML = "Password must be at least 8 charecters";
                    document.getElementById("npassword").style.borderColor = "red";
          }
        }
        function checkCPass(){
          if (document.getElementById("cpassword").value == "") {
                    document.getElementById("cpassErr").innerHTML = "Confirm password can't be blank";
                    document.getElementById("cpassword").style.borderColor = "red";
          }else if (document.getElementById("cpassword").value= password) {
                    document.getElementById("cpassErr").innerHTML = "Confirm Password must be matched with password";
                    document.getElementById("cpassword").style.borderColor = "red";
          }
        }
</script>
<?php require("foot.php"); ?>