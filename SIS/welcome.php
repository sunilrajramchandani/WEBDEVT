<?php
error_reporting(0);
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
	<title>WELCOME</title>
	<link href="css/registration.css" rel="stylesheet" />
	<link href="css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

	<div class = "container">
		<div class="row col-lg-offset-3">
			<h1>REGISTRATION SUCCESSful!!</h1>
		</div>
		<div class="row col-lg-offset-4">
			<img src='css/lol.png' style="width:40%; height:50%" class="img-responsive img-circle">
		</div>
		<div class="row col-lg-offset-5">
			<p class="h3"><?php echo$firstName." ". $lastName ?></p>
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
	</div>
</body>
<html>
