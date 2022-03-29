<?php 
require_once 'db_connect.php';
function addpatient($data){
     $conn = db_conn();
     $selectQuery = "INSERT INTO `patient_registration`(`Id`, `patient_name`, `e-mail`, `username`, `password`, `gender`, `dob`) VALUES (:id, :name, :email, :username, :password, :gender, :day)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
          ':id' => $data['id'],
          ':name' => $data['name'],
          ':email' => $data['e-mail'],
          ':username' => $data['username'],
          ':password' => $data['password'],
          ':gender' => $data['gender'],
          ':day' => $data['day']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

?>