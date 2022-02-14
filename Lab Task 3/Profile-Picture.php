<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile Picture</title>
</head>
<body>
	<?php
	$img_name = "Images/picture.png";
// Check if image file is a actual image or fake image
if(isset($_POST["sub"])) {
	
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fname"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$img_name =  $target_dir.basename($_FILES["fname"]["name"]);

  // $check = getimagesize($_FILES["fname"]["tmp_name"]);
  // if($check !== false) {
  //   // echo "File is an image - " . $check["mime"] . ".";
  //   $uploadOk = 1;
  // } else {
  //   // echo "File is not an image.";
  //   $uploadOk = 0;
  // }

//   // Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// Check file size
if ($_FILES["fname"]["size"] > 400000) {
  echo "Picture size should not be more than 4MB";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  echo " Picture format must be in jpeg or jpg or png";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "\nSorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fname"]["tmp_name"], $target_file)) {
    // echo "The file ". htmlspecialchars( basename( $_FILES["fname"]["name"])). " has been uploaded.";
  } else {
    echo "\nSorry, there was an error uploading your file.";
  }
}

}


?>
 <form action="Profile-Picture.php" method="post" enctype="multipart/form-data">
    <fieldset >
      <legend>PROFILE PICTURE</legend>
      <img src="<?php echo $img_name; ?>" width="180" height="210">
      <br>
      <input type="file" id="myFile" name="fname">
      <br>
      <hr>
  	  <input type="submit" name="sub">
    </fieldset>
 </form>
</body>
</html>