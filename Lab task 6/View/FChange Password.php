<?php require("head.php"); ?>

<div class="container custom-form-dashboard">
	<div class="navitems">
		
    <div class="container custom-form-fchange" style="width:500px; padding: 280px 0;">  
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <fieldset >
      <legend>CHANGE PASSWORD</legend>
      
      <label><span class="green">New Password:</span> </label>
      <input type="text" name="new"><span class="red">&nbsp;<?php //echo $currErr ?></span>
      <br>
      <label><span class="red">Retype New Password: </span></label>
      <input type="text" name="re"><span class="red">&nbsp;<?php //echo $reErr ?></span>
      <hr>
      
      <input type="submit" name="sub">
      <br>
     </fieldset>
</form>
<a href="Login.php">Back to Login page</a>

          
    </div>
</div>
<?php require("foot.php"); ?>