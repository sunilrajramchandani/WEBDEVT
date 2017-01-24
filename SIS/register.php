<?php
	# write your comment here
    // write your other comment here
	/*
		write your
		comment here
	*/
	$studentNo = "";
	$lastName = "";
	$firstName = "";
	$emailAddress = "";
	$password = "";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Student Registration</title>
		<link href="css/registration.css" rel="stylesheet" />
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		
	</head>
	<body>
		<div class="container">
			<h1 class="text-center">Student Registration</h1>
			<hr>
			<div class="col-lg-3">
			</div>
			<div class="col-lg-6">
					<form name = "test" method="POST" action="welcome.php"
						class="form-horizontal">
						<div class="form-group">
							<div class="col-lg-offset-1 col-lg-5">
								<input type="text" name="sid"
									class="form-control input-lg" placeholder="Student ID" required />
							</div>
							<div class="col-lg-5">
								<input type="text" name="ln"
									class="form-control input-lg" placeholder="Last Name" required />
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-lg-offset-1  col-lg-5">
								<input type="text" name="fn"
									class="form-control input-lg" placeholder="First Name" required />
							</div>
							<div class="col-lg-5">
								<input type="text" name="pwd"
									class="form-control input-lg" placeholder = "User Name" required />
							</div>
							
						</div>
						
						<div class="form-group">
							<div class="col-lg-offset-1 col-lg-5">
								<input type="password" name="pwd" id = "password"
									class="form-control input-lg" placeholder = "Set a Password" required />
							</div>
							<div class="col-lg-5">
								<input type="password" name="cpwd" id = "password2"
									class="form-control input-lg" placeholder="Confirm Password" onchange="match()" required />
							</div>
							<script>
						function match(){
							if (test.password2.value == test.password.value) {
							window.alert("matched");
							}
							if (test.password2.value != test.password.value) {
							window.alert("not matched");
							}
						}
					</script>
							
						</div>
						
						
						
						<div class="form-group">
							<div class="col-lg-offset-1 col-lg-10">
								<input type="text" name="email"
									class="form-control input-lg" placeholder="Email Address" required />
							</div>
						</div>
						<div class="form-group">

							<div class="col-lg-offset-5 col-lg-7">
								<button name="register" class="myButton btn-lg">
									<span>Register</span>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>