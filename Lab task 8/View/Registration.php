
           <div class="container custom-form" style="width:500px;">  
                                
                <form method="post" action="../Controller/Registration-control.php" onsubmit="validateform()">
                    
                     <fieldset>
                         <legend>REGISTRATION</legend>
                         <br> 
                         <fieldset>
                              <legend>Patient Name</legend> 
                              <input type="text" id="p-name" name="name" class="form-control" onkeyup="checkName()"/><p id="nameErr"></p> 
                         </fieldset>
                         <hr>
                          <fieldset>
                               <legend>E-mail</legend>
                               <input type="text" id="e-ml" name = "email" class="form-control" onkeyup="checkEmail()"/><p id="emailErr"></p> 
                          </fieldset>
                          <hr>
                         <fieldset>
                              <legend>User Name</legend>
                              <input type="text" id="u-name" name = "username" class="form-control" onkeyup="checkUserName()"><p id="unameErr"></p>
                         </fieldset>
                         <hr>
                         <fieldset>
                              <legend>Password</legend>
                              <input type="password" id="password" name = "pass" class="form-control" onkeyup="checkPass()"/><p id="passErr"></p>
                         </fieldset>
                         <hr>
                         <fieldset>
                              <legend>Confirm Password</legend>
                              <input type="password" id="cpassword" name = "c-pass" class="form-control" onkeyup="checkCPass()"/><p id="cpassErr"></p>
                         </fieldset>
                         <hr>

                         <fieldset>
                         <legend>Gender</legend> 
                          <input type="radio" id="male" name="gender" value="male">
                          <label for="male">Male</label>                     
                          <input type="radio" id="female" name="gender" value="female">
                          <label for="female">Female</label>
                          <input type="radio" id="other" name="gender" value="other">
                          <label for="other">Other</label><br><br>
                         </fieldset>
                         <hr> 
                         <legend>Date of Birth:</legend>
                         <input type="date" name="day"><br><br>
                       
                          </fieldset>
                          <br>
                          <input type="submit" name="submit" value="Submit" class="btn btn-info" />
                          <input type="reset" name="reset" value="Reset" class="btn btn-info" /><br />                      
                         
                           
                          </fieldset>
                          
                     
                </form>  
               
           </div>  
           <br>  
<script>  
          function validateform(){  
           
            
          if (name==null || name==""){  
            alert("Name can't be blank");  
            return false;  
          }else if(password.length<6){  
            alert("Password must be at least 6 characters long.");  
            return false;  
          }else if (name==null || name==""){  
            alert("Username can't be blank");  
            return false;  
          }

          }

          function checkName() {
               if (document.getElementById("p-name").value === "") {
                    document.getElementById("nameErr").innerHTML = "Name can't be blank";
                    document.getElementById("p-name").style.outlineColor = "red";
               }else if (document.getElementById("p-name").value.length > 18) {
                    document.getElementById("nameErr").innerHTML = "Name must be within 18 characters";
                    document.getElementById("p-name").style.outlineColor = "red";
               }else if (document.getElementById("p-name").value.length <= 2) {
                    document.getElementById("nameErr").innerHTML = "Name must have at least 2 characters";
                    document.getElementById("p-name").style.outlineColor = "red";
               }else{
                    document.getElementById("nameErr").innerHTML = "";
                    document.getElementById("name").style.borderColor = "black";

               }
               
        }
        function checkUserName() {
               if (document.getElementById("u-name").value === "") {
                    document.getElementById("unameErr").innerHTML = "Username can't be blank";
                    document.getElementById("u-name").style.outlineColor = "red";
               }else if (document.getElementById("u-name").value.length > 18) {
                    document.getElementById("unameErr").innerHTML = "Username must be within 18 characters";
                    document.getElementById("u-name").style.outlineColor = "red";
               }else if (document.getElementById("u-name").value.length <= 2) {
                    document.getElementById("unameErr").innerHTML = "Username must have at least 2 characters";
                    document.getElementById("u-name").style.outlineColor = "red";
               }else{
                    document.getElementById("unameErr").innerHTML = "";
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
