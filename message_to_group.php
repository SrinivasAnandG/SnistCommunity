<?php
session_start();
include 'files.php';
$object=new Files;
$conn=$object->connection();
$user_id=$_SESSION['user_id'];
$group_id=mysqli_real_escape_string($conn,$_GET['group_id']);
if(isset($_SESSION['username'])&&isset($_SESSION['user_id']))
{
	$message=mysqli_real_escape_string($conn,$_POST['message']);
	$avoid=str_replace(' ', '', $message);
	if($avoid!='')
	{
		$query="insert into group_messages values(null,'$group_id','$user_id','$message',null)";
		$execute=mysqli_query($conn,$query);
		if($execute)
		{
			echo '<script>window.location.href = "view_group.php?group_id='.$group_id.'";</script>';
		}
		else
		{
			echo '<script>window.location.href = "linkbroke.php";</script>';
		}
	}
	else
	{
		echo '<script>window.location.href = "view_group.php?group_id='.$group_id.'";</script>';
		//echo '<script>window.location.href = "linkbroke.php";</script>';
	}
}
else
{
	echo '<script>window.location.href = "linkbroke.php";</script>';
}
?>