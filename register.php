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
	<title>register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style>
	footer
	{
		position:relative;
		bottom:0px;
		/*width: 100%;*/
		text-align: center;
		background-color: #EB0028;
		color: #BBBBBB;
		/*padding-right: 990px;*/
		border-radius: 8px;
		padding-bottom: 25px;
	}
	input[type=TEXT]
	{
		font-size: 110%;
		width:220px;
		border-radius: 4px;
	}
	input[type=NUMBER]
	{
		font-size: 110%;
		width:220px;
		border-radius: 4px;
	}
	input[type=PASSWORD]
	{
		font-size: 110%;
		width:220px;
		border-radius: 4px;
	}
	input[type=SUBMIT]
	{
		width:120px;
		border-radius: 4px;
	}
	label
	{
		font-size: 150%;
	}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row" style="background-color:#EB0028; padding-bottom:50px; border-radius:8px; color:#BBBBBB;">
			<div class="col-xs-12" style="font-size:300%; text-align:center;">
				<h1>SNIST FORUMS</h1>
			</div>
		</div>
			<div class="row" style="padding-left:100px;">
				<form action="signup.php" method="post">
					<label>Student id:</label><br/>
					<input type="text" name="user_id" pattern="(?=.*[0-9])(?=.*[A_Z]).{10}" title="please enter correct college id" required>
					<br/><label>First name:</label><br/>
					<input type="text" name="first_name" pattern="(?=.*[a-zA-Z]).{4,}" title="only characters min of 4 chars" required>
					<br/><label>Last name:</label><br/>
					<input type="text" name="last_name" pattern="(?=.*[a-zA-Z]).{4,}" title="only characters min of 4 chars" required>
					<br/><label>Email:</label><br/>
					<input type="text" name="email" required>
					<br/><label>Mobile:</label><br/>
					<input type="number" name="mobile_number" pattern="(?=.[0-9]).{10}" title="only numbers" required>
					<br/><label>Password:</label><br/>
					<input type="password" name="password" pattern=".{6,}" title="only chars and numbers  and minimun of 6 chars" required>
					<br/><label>Security question: what is your nick name?</label><br/>
					<input type="text" name="security_question" pattern="(?=.[a-zA-z]).{2,}" title="only chars  and minimun of 2 chars" required><br/>
					<input type="submit" value="Signup">
				</form>
			</div></div>
			<footer>developed and maintained by SrinivasAnand.G</footer>
</body>
</html>