<?php require("head.php"); ?>
    
<div class="container custom-form-login" style="width:500px;">  
 <form method="post" action="../Controller/Login-control.php">
    <fieldset >
      <legend>LOGIN</legend>
      <br> 
      <label>User Name: </label>
      <input type="text" id="u-name" name="username" value="<?php //echo $name;?>" onkeyup="checkUserName()"><span class="red">&nbsp;<?php //echo $nameErr ?></span><p id="unameErr"></p>
      <br>
      <label>Password: </label>
      <input type="text" id="password" name="pass" value="<?php //echo $pass;?>" onkeyup="checkPass()"><span class="red">&nbsp;<?php //echo $passErr ?></span><p id="passErr"></p>
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
<script>
   function checkUserName() {
               if (document.getElementById("u-name").value === "") {
                    document.getElementById("unameErr").innerHTML = "Username can't be blank";
                    document.getElementById("u-name").style.outlineColor = "red";
               }else if (document.getElementById("u-name").value.length <= 2) {
                    document.getElementById("unameErr").innerHTML = "Username must have at least 2 characters";
                    document.getElementById("u-name").style.outlineColor = "red";
               }else{
                    document.getElementById("unameErr").innerHTML = "";
                    document.getElementById("name").style.borderColor = "black";

               }
               
        }
   function checkPass(){
          if (document.getElementById("password").value == "") {
                    document.getElementById("passErr").innerHTML = "Password can't be blank";
                    document.getElementById("password").style.borderColor = "red";
          }else{
                    document.getElementById("unameErr").innerHTML = "";
                    document.getElementById("name").style.borderColor = "black";

            }
        }
    
</script>
<?php require("foot.php"); ?>