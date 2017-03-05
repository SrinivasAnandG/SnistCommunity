<?php
session_start();
include 'files.php';
$object=new Files;
$conn=$object->connection();
$user_id=mysqli_real_escape_string($conn,$_POST['user_id']);
$first_name=mysqli_real_escape_string($conn,$_POST['first_name']);
$last_name=mysqli_real_escape_string($conn,$_POST['last_name']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$mobile_number=mysqli_real_escape_string($conn,$_POST['mobile_number']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$security_question=mysqli_real_escape_string($conn,$_POST['security_question']);
if($user_id==''&&$first_name==''&&$last_name==''&&$email==''&&$mobile_number==''&&$password==''&&$security_question=='')
{
	echo '<script>window.location.href = "linkbroke.php";</script>';
}
else
	{
	$query="select * from users where user_id='$user_id'";
	$execute=mysqli_query($conn,$query);
	if(mysqli_num_rows($execute)==0)
	{
		$query2="insert into users values('$user_id','$first_name','$last_name','$email','$mobile_number','$password','$security_question',null)";
		$execute2=mysqli_query($conn,$query2);
		if($execute)
		{
			$_SESSION['user_id']=$user_id;
			$_SESSION['username']=$first_name.' '.$last_name;
			echo '<script>window.location.href = "homepage.php";</script>';
		}
		else
		{
			echo '<script>window.location.href = "index.php";</script>';
		}
	}
	else
	{
		
		echo '<script>window.location.href = "index.php";</script>';
	}
}
?>