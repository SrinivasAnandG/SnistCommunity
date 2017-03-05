<?php
session_start();
$user_id=$_SESSION['user_id'];
if(isset($_SESSION['user_id'])&&isset($_SESSION['username']))
{
	include 'files.php';
	$object=new Files;
	$conn=$object->connection();
	$post_id=mysqli_real_escape_string($conn,$_GET['post_id']);
	$comment=mysqli_real_escape_string($conn,$_POST['comment']);
	$avoid=str_replace(' ', '', $comment);
	if(($avoid!=''))
	{
		$query="insert into comments values('$post_id','$user_id','$comment',null)";
		$execute=mysqli_query($conn,$query);
		//echo "hello";
		echo '<script>window.location.href = "view_post.php?post_id='.$post_id.'";</script>';
	}
	else
	{
		//echo "fucked up here";
		echo '<script>window.location.href = "view_post.php?post_id='.$post_id.'";</script>';
	}
}
else
{
	echo '<script>window.location.href = "linkbroke.php";</script>';
}
?>