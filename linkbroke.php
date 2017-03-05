<?php
session_start();
include 'files.php';
$object=new Files;
$conn=$object->connection();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charser="UTF-8">
	<meta lang="en-US">
	<title>welcome</title>
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
		position:absolute;
		bottom:0px;
		width: 100%;
		text-align: center;
		background-color: #003760;
		color: #BBBBBB;
		/*padding-right: 990px;*/
		border-radius: 8px;
		padding-bottom: 25px;
	}
	body
	{
		background-image: url("back_image.png");
  	  	background-repeat: no-repeat;
    	background-position: left top;
    	background-attachment: fixed;
    	background-color: #BDC4C1;
	}
	panel
	{
		font-size: 200%;
	}
	</style>	
</head>
<body>
	<div class="row" style="background-color:#003760; padding-bottom:30px; border-radius:8px; color:#BBBBBB;">
			<div class="col-xs-2" style="font-size:300%; padding-top:35px;">
			<img class="img-responsive" alt="college_logo" src="logo.jpeg" height="320" width="420">
			</div>
			<div class="col-xs-10" style="font-size:300%;">
			<h1 style="text-align:center; padding-right:75px; padding-top:13px;">COMMUNITY</h1>
			</div>
			</div>
		<panel>link may broken or not exists please relogin, thank you...!</panel>
		<a href="index.php">return</a>
	</div>
		<footer>developed and maintained by SrinivasAnand.G</footer>
</body>
</html>