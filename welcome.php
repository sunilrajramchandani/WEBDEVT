<?php
	if (!isset($_POST["register"])){
		header('location: register.php');
	}
	else{
		$studentNo = $_POST["sid"];
		$lastName = $_POST["ln"];
		$firstName = $_POST["fn"];
		$emailAddress = $_POST["email"];
		$password= $_POST["pwd"];
		$birthDate = $_POST["bday"];
		$date = date('o-m-d');
		
	}

?>
<!DOCTYPE html>
<head>
	<title>FORM</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

	<div class = "container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4  col-xs-4">
				<p class="h1">WELCOME!</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">	
			</div>
			<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4 text-right">
				<p class="h3"><?php echo $firstName.",".$lastName ?></p>
			</div>
		</div>
	
		<div class = "row">
			<div class="col-lg-4">
			</div>
			<div class="col-lg-4">
				<p class = "h4"> <?php echo $emailAddress ?>
			</div>
			<div class="col-lg-4">
			</div>
		</div>
		
		<div class = "row">
			<div class="col-lg-4">
			</div>
			<div class="col-lg-4">
				<p class = "h4"> <?php echo $birthDate ?>
			</div>
			<div class="col-lg-4">
			</div>
		</div>
		<div class = "row">
			<div class = "col-lg-4">
			</div>
			<div class = "col-lg-4">
			<p class = "h1"> <?php if($date == $birthDate){ echo "HAPPY BIRTHDAY"; } else{ echo "TODAY IS NOT YOUR BIRTHDAY :("; } ?>
			</div>
			<div class = "col-lg-4">
			</div>
		<div>
	</div>
		
	
</body>
<html>
