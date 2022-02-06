<!DOCTYPE html>
<html>
<head>
	<title>Validation</title>
	<style type="text/css">
		.red{
			color: red;
		}

	</style>
</head>
<body>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $dayErr = $degreeErr = $bloodgroupErr =  "";
$name = $email = $gender = $day = $degree = $blood = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } 
  else {
    $name = $_POST["name"];
    $pattern = "/^[a-z]+([a-z]|[0-9]|\.|-)*/i";
    // check if name only contains letters and whitespace
    if (!preg_match($pattern,$name)) {
      $nameErr = "Only letters and white space allowed";
    }
    else if(str_word_count($name)<2){

    	$nameErr= "Name field at least two words";
    	$name = " ";
    }

  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } 
  else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    $emailErr = "Invalid email format";
    }else{
    	$email = $_POST["email"];
    }
  

  if (empty($_POST["day"])) {
    $dayErr = "Date of birth is required";
  } else {
    $day = $_POST["day"];
    $d = explode("-",$day);
    $dd = (int)$d[2];
    $mm = (int)$d[1];
    $yy = (int)$d[0];
    //yyyy-mm-dd

    if(!($dd<=31 && $dd>=1 && $mm<=12 && $mm>=1 && $yy<=1998 && $yy>=1953)){
    	$dayErr = "Invalid date of birth";
    	$day = "";
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = $_POST["gender"];
  }

  if (empty($_POST["degree"])) {
    $degreeErr = "Degree is required";
  } 
  else {

    $degree = $_POST["degree"];
    if(count($degree)<2){
    	$degreeErr = "At least two of degree must be selected";
    }
  }

  if (empty($_POST["blood"])) {
    $bloodgroupErr = "Blood group is required";
  } else {
    $blood = $_POST["blood"];
  }
}
?>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<fieldset >
      <legend>NAME</legend>
      <input type="text" name="name" value="<?php echo $name;?>"><span class="red">&nbsp;<?php echo $nameErr ?></span>
      <hr>
		<br>

    </fieldset>
    <br>
		<fieldset>
			<legend>EMAIL</legend>
			 <input type="text" name="email" value="<?php echo $email;?>"><span class="red">&nbsp;<?php echo $emailErr ?></span>
			 <hr>
		<br>
		</fieldset>
		<fieldset>
			<legend>DATE OF BIRTH</legend>
      <input type="date" id="day" name="day" size="1"><span class="red">&nbsp;<?php echo $dayErr ?></span>
		  <hr>
		  <br>
		</fieldset>
		<br>
		<fieldset>
			<legend>GENDER</legend>
			<input type="radio" name="gender"
			<?php if (isset($gender) && $gender=="Male") echo "checked";?>
			value="Male">Male
			<input type="radio" name="gender"
			<?php if (isset($gender) && $gender=="Female") echo "checked";?>
			value="Female">Female
			<input type="radio" name="gender"
			<?php if (isset($gender) && $gender=="Other") echo "checked";?>
			value="Other">Other<span class="red">&nbsp;<?php echo $genderErr ?></span>
			<hr>
			<br>
	</fieldset>
	<br>
	<fieldset>
			<legend>DEGREE</legend>
			<input type="checkbox" name="degree[]"
			<?php if (isset($degree) && $degree=="SSC") echo "checked";?>
			value="SSC">SSC
			<input type="checkbox" name="degree[]"
			<?php if (isset($degree) && $degree=="HSC") echo "checked";?>
			value="HSC">HSC
			<input type="checkbox" name="degree[]"
			<?php if (isset($degree) && $degree=="BSc") echo "checked";?>
			value="BSc">BSc
			<input type="checkbox" name="degree[]"
			<?php if (isset($degree) && $degree=="MSc") echo "checked";?>
			value="other">MSc<span class="red">&nbsp;<?php echo $degreeErr ?></span>
			<hr>
			<br>
			
	</fieldset>
	<br>
	<fieldset >
      <legend>BLOOD GROUP</legend>
      <select id="blood" name="blood">
      <option value=""></option>
		  <option value="A+">A+</option>
		  <option value="A-">A-</option>
		  <option value="B+">B+</option>
		  <option value="B-">B-</option>
		  <option value="AB+">AB+</option>
		  <option value="AB-">AB-</option>
		  <option value="O+">O+</option>
		  <option value="O-">O-</option>
		  </select>
		  <span class="red">&nbsp;<?php echo $bloodgroupErr ?></span>
		  <hr>
			<br>
			<input type="submit" name="">
	</fieldset>
	<br>
	</form>

	<h2>Displayed Data</h2>
	<?php 
	echo $name."<br>";
	echo $email."<br>";
	echo $day."<br>";
	echo $gender."<br>";
	if(!empty($degree)){
		if(count($degree) != 0){
			echo "Degree: ";
			foreach($degree as $val){
				echo $val." ";
			}
		}
	}
	echo "<br>";
	echo $blood."<br>";
	?>

</body>
</html>