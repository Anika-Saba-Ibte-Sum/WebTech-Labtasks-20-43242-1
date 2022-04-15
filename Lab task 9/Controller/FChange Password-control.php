<?php
    session_start();
    require("../Model/FChange Password-model.php");
    $currErr= $reErr = $pass = "";
    $currPass = $Newpass = $Repass = $passErr = "";

    //set email
    $emailErr = "";
    $_SESSION["emailErr"] = "";
    

    if(isset($_POST['email-sub'])){
      $err = false;
        if (empty($_POST["mail"])) {
        $_SESSION["emailErr"] = "* Email is required";
        $err = true;
    }else if(!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)){
        $_SESSION["emailErr"] = "* Invalid email format";
        $err = true;
    }else{
      $_SESSION["f-email"] = $_POST["mail"];
      header("location: ../View/FChange Password.php");
    }
    if($err){
        header("location: ../View/Forget Password.php");
    }
}
//echo $_SESSION["f-email"];


    //changing password
    if(isset($_POST['sub'])){
      if ($_SERVER["REQUEST_METHOD"] == "POST") 
      {
        $err = false;
        //$currPass = $_POST['curr'];
        $Newpass = $_POST['new'];
        $Repass = $_POST['re'];
        $_SESSION["passErr"] = "";

        if(empty($_POST['new'])){
          $_SESSION["passErr"] = "* password is required";
        $err = true;
        }
        else if(strlen($_POST['new']) < 8)
        {
          $_SESSION["passErr"] = "* Password must be at least 8 characters ";
        $err = true;
        }
        else if(!(str_contains($_POST['new'], '@') === true or str_contains($_POST['new'], '$') === true or str_contains($_POST['new'], '%') === true or str_contains($_POST['new'], '#') === true))
        {
          $_SESSION["passErr"] = "* Password must be contain at least one of the special characters ";
            $err = true;
        }

        if ($Newpass != $Repass) {
          $_SESSION["passErr"] = '* New password must match with the retyped Password';
          $err = true;
        }
          if(!$err){
            $data['email'] = $_SESSION["f-email"];
            $data['password'] = password_hash($_POST['new'], PASSWORD_BCRYPT, ["cost"=>12]);
            unset($_SESSION["f-email"]);
        /*$data['e-mail'] = $_POST['email'];
        $data['gender'] = $_POST['gender'];
        $data['day'] = $_POST['day'];*/
        //var_dump($data);
        if (updatepatient($data)) {
          header("location: ../View/Login.php");
        } 
      }else{
        header("location: ../View/FChange Password.php");
      }

        }
      }
    
          
    ?>