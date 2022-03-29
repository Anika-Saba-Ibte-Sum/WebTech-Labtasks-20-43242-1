<?php
				require("../Model/View Profile-model.php");
					
				/*// Check if image file is a actual image or fake image
				if(isset($_POST["chng"])) {
					
					$target_dir = "../uploads/";
					$target_file = $target_dir . basename($_FILES["fname"]["name"]);
					$uploadOk = 1;
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					$img_name =  $target_dir.basename($_FILES["fname"]["name"]);

				 
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
				    $my_img_name = $_FILES["fname"]["tmp_name"];
				  } else {
				    echo "\nSorry, there was an error uploading your file.";
				  }
				}

				}*/
				

				?>

				<?php

               	//$name = $email = $gender = $day = $image = "";
			    
			  
			    function get_user_view_data($username){
			    	$userData = user_authentication($username);
			    	return $userData;
			    }
			    
			

			?>