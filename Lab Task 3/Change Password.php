<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change Password</title>
	<style type="text/css">
        .black{
        	color: black;
        }
        .red{
            color: red;
        }
        .green{
            color: green;
        }
    </style>
</head>
<body>
	<?php

    $currErr= $reErr = "";
    $currPass = $Newpass = $Repass = "";

     if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
      $currPass = $_POST['curr'];
      $Newpass = $_POST['new'];
      $Repass = $_POST['re'];

      if($currPass == $Newpass){
      	$currErr = ' New Password should not be same as the Current Password';
      }elseif ($Newpass != $Repass) {
      	$reErr = 'New Password must match with the Retyped Password';
      }else{
      	
      }
    }     
    ?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <fieldset >
      <legend>CHANGE PASSWORD</legend>
      <label>Current Password: </label>
      <input type="text" name="curr"><span class="red">&nbsp;</span>
      <br>
      <label><span class="green">New Password:</span> </label>
      <input type="text" name="new"><span class="red">&nbsp;<?php echo $currErr ?></span>
      <br>
      <label><span class="red">Retype New Password: </span></label>
      <input type="text" name="re"><span class="red">&nbsp;<?php echo $reErr ?></span>
      <hr>
      
      <input type="submit" name="sub">
      <br>
     </fieldset>
</form>
</body>
</html>