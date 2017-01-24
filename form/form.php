<!DOCTYPE html>
<html>
<head>
<?php
		error_reporting(0);
	if (isset($_POST['submit'])){
		$number1 = $__POST['first'];
		$number2 = 0;
		for($i = 0; $i < 0)
		if ($number1 > $number2){
			$number2 = $number1;
		}
	}
		?>
<title>LOL</title>
</head>
<body>
	<form method="POST">
		<input type = "number" name = "first" required /></br>
		<button name="submit">Submit</button></br>
	<?php
	if (isset($_POST['submit'])){
		echo $number1 . $symb . $number2;
	}
	?>
	</form>
</body>
</html>