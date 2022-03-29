<?php require("head.php"); ?>
    
<div class="container custom-form-login" style="width:500px;">  
 <form method="post" action="../Controller/Login-control.php">
    <fieldset >
      <legend>LOGIN</legend>
      <br> 
      <label>User Name: </label>
      <input type="text" name="username" value="<?php //echo $name;?>"><span class="red">&nbsp;<?php //echo $nameErr ?></span>
      <br>
      <label>Password: </label>
      <input type="text" name="pass" value="<?php //echo $pass;?>"><span class="red">&nbsp;<?php //echo $passErr ?></span>
      <hr>
      <input type="checkbox" id="me" name="rem-me[]" value="Remember Me">
      <label for="remember me"> Remember Me</label><br>
      <br>
      <input type="submit" name="log" value="Log In">
      <a href="Forget Password.php"><span class="blue">Forget Password?</span></a>
     </fieldset>
     <span><?php if(isset($_SESSION['authentication-error'])){
        echo $_SESSION['authentication-error']; 
        $_SESSION['authentication-error']= ""; } ?></span>
 </form>
</div>
<?php require("foot.php"); ?>