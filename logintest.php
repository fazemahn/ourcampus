<?php 

$servername = "localhost";
$username = "root";
$password = "esam";
$dbname = "";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {

	die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['login'])) {
	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql="SELECT * FROM users_1 WHERE EmailAddress='".$email."' AND Password='".$password."' LIMIT 1";
	$res = mysqli_query($conn,$sql);

	if (mysqli_num_rows($res) == 1) {
			header("location: index.html");
	exit();
} 
else {
	echo "Invalid Login Information. Please try again.";
	exit();
}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>login form</title>
	<link rel="stylesheet" type="text/css" href="logsigntest.css">
</head>
<body>


	<form method ="POST" action="loginassignment.php">
		<fieldset>
		
		<div class="maindiv"> 
			<div class="main2"> 
			
			<span class="signup"><a href="signuptest.php"><strong>Sign Up</strong></a> </span>
			<div class="login"> <strong>Log In</strong> </div> <br><br><br><br>
			
			<div class="loginform"> 

				<h4> Login Here</h4>
				<label> Email </label><br>
				<input class ="input" name="email" type="Email" required/> <br>

				<label> Password </label><br>
				<input class ="input" name="password" type="Password" required /><br><br>

				<div class="button" ><input name="login" class="submit" type="submit" value="Log In"></div>
			
			</div>
			
			</div>
		</div>

		</fieldset>
	</form>

</body>
</html>

