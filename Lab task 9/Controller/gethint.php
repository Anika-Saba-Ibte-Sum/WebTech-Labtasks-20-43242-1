<?php
require("../Model/Registration-model.php");
$q = $_GET['q'];
//$q = "anikasaba21";
$data = get_patient_by_actual_username($q);
$data1 =get_patient_by_actual_email($q);
if($data != null){
  if(count($data) > 0){
  echo "Username is already existed<br>";
}
}
if($data1 != null){
  if(count($data1) > 0){
  echo "E-mail is already existed<br>";
}
}


?>