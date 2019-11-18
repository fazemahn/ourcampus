<!DOCTYPE html>
<html>
<head>
	<title>login form</title>
	<link rel="stylesheet" type="text/css" href="logsigntest.css">
</head>
<body>


	<form method ="POST" action="signup.php">
		<fieldset>

		<div class="maindiv">
			<div class="main2">

			<span class="signup">Sign Up</span>
			<div class="login"> <a href="logintest.php">Log In</a> </div> <br><br><br><br>

			<div class="signupform">

				<h4>Create an Account</h4>

				<label> First Name </label><br>
				<input class="input" type="text" name="fname" required/> <br>
				<label> Last Name </label><br>
				<input class="input" type="text" name="lname" required/> <br>
				<label> Email </label><br>
				<input class="input" type="Email" name="email" required/> <br>
				<label> Password </label><br>
				<input class="input" type="Password" name="password" required />

				<div class="button"><input name="submit" class="submit" type="submit" value="Sign Up"></div><br><br>
			</div>

			</div>
		</div>

		</fieldset>
	</form>

</body>
</html>
