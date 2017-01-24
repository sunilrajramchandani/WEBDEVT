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
		$username = $_POST["username"];
		
	}

?>
<!DOCTYPE html>
<head>
	<title>WELCOME</title>

	<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="welcome.css" rel="stylesheet" />
</head>
<body>

	<div class = "container">
		<div class="row text-center">
			<h1>REGISTRATION SUCCESSful!!</h1>
		</div>
		<div class="row">
			<img src='lol.PNG' style="width:30%; height:40%" class="center-block img-responsive">
		</div>
		<div class="row text-center">
			<h3><?php echo$firstName." ". $lastName. "(" . $username . ")" ?><h3>
		</div>
	
		<div class = "row text-center">
				<h4> <?php echo $emailAddress ?>  </h4>
		</div>
	</div>
</body>
<html>
