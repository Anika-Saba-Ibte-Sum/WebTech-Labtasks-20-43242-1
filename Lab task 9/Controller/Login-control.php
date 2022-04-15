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

    

      
      $rem_me = false;

      if(isset($_POST['rem-me']) && count($_POST['rem-me']) > 0){
        $rem_me = true;
      }

      if (empty($_POST["username"]) || empty($_POST["pass"])) 
      {
        $_SESSION['authentication-error'] = "Username and Password both are required";
        header("location: ../View/Login.php");
      } 
      else 

      {
        //echo $rem_me;
        $data = user_authentication($name);
        //var_dump($data);
        if($data != null){
          
          if($name == $data["username"] && password_verify($_POST["pass"], $data["password"])){
            $_SESSION["username"] = $data["username"];

            if($rem_me){
              setcookie("username", $name, time()+60, "/");
            }
            header("location: ../View/Dasboard.php");
          }else{
            header("location: ../View/Login.php");
            $_SESSION['authentication-error'] =  "Username and password are not matched";
            
          }
          }else{
          header("location: ../View/Login.php");
          $_SESSION['authentication-error'] =  "Username not found";
        }

       }
    
      
    }
}
       
?>
<a href="../View/Login.php">back</a>

 