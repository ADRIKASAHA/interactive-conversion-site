<!DOCTYPE html>
<html>
<head>
	<title>Conversion Rate</title>
</head>
<body>
	<?php
	session_start();
   $result=$_SESSION['result'];
   $num=$_SESSION['number'];
   $operator=$_SESSION['operator'];

	?>
	<h3 style="color: red;">Page 2 [Conversion Rate]</h3>
<h3 style="color: red;">Conversion Site</h3>

<a href="http://localhost/feet_to_inch/home.php">1.Home</a>
	<a href="conversion_Rate.php">2.Coversion Rate</a>
	<a href="History.php">3.History</a>
	<br><br>
	<h3 style="color: red;">Coversion Rate : </h3>

	<form action="conversion_Rate.php" method="post">
		<label for="value" ></label>
			<input type="text" id="txet" name="" value='<?php echo $operator ?>'>
			<label for="value" ></label>
			<input type="text" id="text" name="text1" value="<?php echo $num?>">
			<label for="value" ></label>
			<input type="text" id="text" name="text2" value="<?php echo $result ?>" >
			<br><br>
			<button type="submit"name="submit" value="Convert"><a href="History.php">SUBMIT</a></button>
		<br><br><br>
	</form>
	</body>
</html>