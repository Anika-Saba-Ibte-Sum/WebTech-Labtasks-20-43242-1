<?php 

include("head.php"); ?>



<br>  
           <div class="container custom-form" style="width:500px;">  
                                
                <form method="post" action="../Controller/Registration-control.php">  
                      
                     <br>  
                     <fieldset>
                         <legend>REGISTRATION</legend>
                         <br> <br> 
                         <fieldset>
                              <legend>Patient Id</legend> 
                              <input type="text" name="id" class="form-control"/><span class="red">&nbsp;<?php //echo $nameErr; ?></span>  
                         </fieldset>
                         <fieldset>
                              <legend>Patient Name</legend> 
                              <input type="text" name="name" class="form-control"/><span class="red">&nbsp;<?php //echo $nameErr; ?></span>  
                         </fieldset>
                         <hr>
                          <fieldset>
                               <legend>E-mail</legend>
                               <input type="text" name = "email" class="form-control"/><span class="red">&nbsp;<?php //echo $emailErr; ?></span>
                          </fieldset>
                          <hr>
                         <fieldset>
                              <legend>User Name</legend>
                              <input type="text" name = "username" class="form-control" /><span class="red">&nbsp;<?php //echo $unameErr; ?></span>
                         </fieldset>
                         <hr>
                         <fieldset>
                              <legend>Password</legend>
                              <input type="password" name = "pass" class="form-control" /><span class="red">&nbsp;<?php //echo $passErr; ?></span>
                         </fieldset>
                         <hr>
                         <fieldset>
                              <legend>Confirm Password</legend>
                              <input type="password" name = "c-pass" class="form-control" /><span class="red">&nbsp;<?php //echo $cPassErr; ?></span>
                         </fieldset>
                         <hr>

                         <fieldset>
                         <legend>Gender</legend> 
                          <input type="radio" id="male" name="gender" value="male">
                          <label for="male">Male</label>                     
                          <input type="radio" id="female" name="gender" value="female">
                          <label for="female">Female</label>
                          <input type="radio" id="other" name="gender" value="other">
                          <label for="other">Other</label><span class="red">&nbsp;<?php //echo $genderErr; ?></span><br><br>
                         </fieldset>
                         <hr> 
                         <legend>Date of Birth:</legend>
                         <input type="date" name="day"> <span class="red">&nbsp;<?php //echo $dayErr; ?></span><br><br>
                         <fieldset>
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
                <p><?php if(isset($_SESSION['regErr'])){echo $_SESSION['regErr']; $_SESSION['regErr'] = '';}?></p>
           </div>  
           <br>  

<?php include("foot.php"); ?>