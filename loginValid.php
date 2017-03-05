<?php
session_start();
if(isset($_SESSION['user_id'])&&isset($_SESSION['username']))
{
	echo '<script>window.location.href = "homepage.php";</script>';
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charser="UTF-8">
	<meta lang="en-US">
	<title>login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style>
	input[type=TEXT]
	{
		border-radius: 5px;
		color: #BBBBBB;
	}
	input[type=PASSWORD]
	{
		border-radius: 5px;
	}
	footer
	{
		position:relative;
		bottom:0px;
		color: #BBBBBB;
		/*width: 100%;*/
		text-align: center;
		background-color: #EB0028;
		/*padding-right: 990px;*/
		border-radius: 8px;
		padding-bottom: 25px;
	}
	</style>
</head>
<body>
	<div class="container-fluid" style="background-color:#DFDFDF;">
		<div class="row" style="background-color:#EB0028; padding-bottom:50px; border-radius:8px; color:#BBBBBB;">
			<div class="col-xs-6" style="font-size:300%;"><label>SNIST FORUMS</label></div>
			<div class="col-xs-6" style="font-size:110%; padding-top:25px;">
				<form action="login.php" method="post">
				username:<input type="text"  name="username" pattern="(?=.*[0-9])(?=.*[A-Z]).{10}" title="college id number">
				password:<input type="password"  name="password" pattern=".{6,14}" title="minimun of 6 characters and maximum of 14 characters">
				<input type="submit"  value="Login">
				</form>
				<form action="register.php" method="post">
				<input type="submit"  value="Signup">
				</form>	
			</div>
			</div>
		</div>
		<img class="img-responsive" src="image.png" alt="login" width="1150" height="420" style="" > 
		<footer>developed and maintained by srinivas anand.G</footer>
	</div>
</body>
</html>