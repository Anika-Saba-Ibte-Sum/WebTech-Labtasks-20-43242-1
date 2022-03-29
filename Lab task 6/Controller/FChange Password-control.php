<?php
    require("../Model/fChange Password-model.php");
    $currErr= $reErr = $pass = "";
    $currPass = $Newpass = $Repass = $passErr = "";

    if(isset($_POST['sub'])){
      if ($_SERVER["REQUEST_METHOD"] == "POST") 
      {
        //$currPass = $_POST['curr'];
        $Newpass = $_POST['new'];
        $Repass = $_POST['re'];

        /*if($currPass == $Newpass){
          $currErr = ' New Password should not be same as the Current Password';
        }*/

        if(empty($_POST["pass"])){
        $passErr = "* password is required";

     }
        else if(strlen($_POST['pass']) < 8)
        {
        $passErr = "* Password must be at least 8 characters ";
        }
        else if(!(str_contains($_POST['pass'], '@') === true or str_contains($_POST['pass'], '$') === true or str_contains($_POST['pass'], '%') === true or str_contains($_POST['pass'], '#') === true))
        {
            $passErr = "* Password must be contain at least one of the special characters ";
            
        }

        if ($Newpass != $Repass) {
          $reErr = 'New Password must match with the Retyped Password';
        }else{
            $idx = 0;
          $userData = Get_Data_From_File();
          //$userData = json_decode(file_get_contents("data.json"), true);
          if($userData != NULL){
            foreach ($userData as $user){
              if($user["e-mail"] === $_SESSION['e-mail']){
                $idx++;
                global $tmp_user;
                $tmp_user = $user;
                $tmp_user["password"] = $Newpass;
              }
            }
            if($idx > 0){
              $userData[$idx-1] = $tmp_user;

            }

            file_put_contents("data.json", json_encode($userData));

          }

        }
      }
    }
          
    ?>