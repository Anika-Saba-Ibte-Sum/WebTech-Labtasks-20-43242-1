 <?php
 session_start();
 require("../Model/Login-model.php");

    $err = "";
    $name = $pass = "";
    $_SESSION['authentication-error'] = "";

    if(isset($_POST['log'])){
      if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
      $name = $_POST['username'];

      /*if(empty($_POST["pass"])){
     $passErr = "* password is required";
     $err = true;
     }
     else if(strlen($_POST['pass']) =8){
        $passErr = "* Password must be at least 8 characters ";
        $err = true;
      }else if(!(str_contains($_POST['pass'], '@') === true or str_contains($_POST['pass'], '$') === true or str_contains($_POST['pass'], '%') === true or str_contains($_POST['pass'], '#') === true)){
        $passErr = "* Password must be contain at least one of the special characters ";
        $err = true;   
      }else if($_POST["pass"] != $_POST["c-pass"]){
        $cPassErr = "* password is not matched";
        $err = true;
     }else{   
        $pass = $_POST["pass"];
     }*/

      
      $rem_me = false;

      if(count($_POST['rem-me']) > 0){
        $rem_me = true;
      }
      if (empty($_POST["username"]) || empty($_POST["pass"])) 
      {
        $err = "Username and Password both are required";
      } 
      else 

      {
        //echo $rem_me;
        $data = user_authentication($name, $pass);
        var_dump($data);
        if($data != null){
          $_SESSION["username"] = $data["username"];

          if($rem_me){
            setcookie("username", $name, time()+60, "/");
          }
          


            header("location: ../View/Dasboard.php");
          }else{
          header("location: ../View/Login.php");
        }

       }
    
      
    }
}
       
?>
 