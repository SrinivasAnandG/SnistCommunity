<?php
session_start();
include 'files.php';
$object=new Files;
$conn=$object->connection();
$user_id=mysqli_real_escape_string($conn,$_POST['username']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
//include 'files.php';
$query="select user_id,password,first_name,last_name from users where user_id='$user_id' and password='$password'";
$execute=mysqli_query($conn,$query);
if($execute)
{
	if(mysqli_num_rows($execute)>0)
	{
		$row=mysqli_fetch_row($execute);
		$_SESSION['user_id']=$row[0];
		$_SESSION['username']=$row[2].' '.$row[3];
		echo '<script>window.location.href = "homepage.php";</script>';

	}
	else
	{
		echo '<script>window.location.href = "index.php";</script>';
	}
}
else
{
	echo '<script>window.location.href = "linkbroke.php";</script>';
}
?>