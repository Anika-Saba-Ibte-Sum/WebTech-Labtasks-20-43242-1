<?php require("head.php"); ?>

<div class="container custom-form-dashboard">
	<div class="navitems">
		
    <div class="container custom-form-fchange" style="width:500px; padding: 280px 0;">  
	<form method="post" action="../Controller/FChange Password-control.php">
    <fieldset >
      <legend>CHANGE PASSWORD</legend>
      
      <label><span class="green">New Password:</span> </label>
      <input type="text" id="password" name="new" onkeyup="checkPass()"><span class="red"><p id="passErr"></p></span>
      <br>
      <label><span class="green">Retype New Password: </span></label>
      <input type="text" id="cpassword" name="re" onkeyup="checkCPass()"><span class="red"><p id="cpassErr"></p></span>
      <hr>
      
      <input type="submit" name="sub">
      <br>
     </fieldset>
</form><br>
<?php if(isset($_SESSION["passErr"])){echo $_SESSION["passErr"]; $_SESSION["passErr"] = ''; }?>
<a href="Login.php">Back to Login page</a>

          
    </div>
</div>
<script>
  function checkPass(){
          if (document.getElementById("password").value == "") {
                    document.getElementById("passErr").innerHTML = "Password can't be blank";
                    document.getElementById("password").style.borderColor = "red";
          }else if (document.getElementById("password").value.length < 8) {
                    document.getElementById("passErr").innerHTML = "Password must be at least 8 charecters";
                    document.getElementById("password").style.borderColor = "red";
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