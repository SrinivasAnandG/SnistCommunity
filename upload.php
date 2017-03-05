<?php
session_start();
if(isset($_SESSION['user_id'])&&isset($_SESSION['username']))
{

	include 'files.php';
	$user_id=$_SESSION['user_id'];
	$object=new Files;
	$conn=$object->connection();
	$heading=mysqli_real_escape_string($conn,$_POST['heading']);
	$category=mysqli_real_escape_string($conn,$_POST['category']);
	$description=mysqli_real_escape_string($conn,$_POST['description']);
	if(getimagesize($_FILES['picture']['tmp_name'])==false)
	{
		$query="insert into posts values(null,'$user_id','$heading','$description',0,CURDATE(),'$category',null)";
		$execute=mysqli_query($conn,$query);
		echo '<script>window.location.href = "homepage.php";</script>';
	}
	else
	{
		$image = addslashes($_FILES['picture']['tmp_name']);
        $name  = addslashes($_FILES['picture']['name']);
        $image = file_get_contents($image);
        $image = base64_encode($image);
        //saveimage($name,$image);
        $uploaddir = 'compose_image/'; //this is your local directory
        $uploadfile = $uploaddir . basename($_FILES['picture']['name']);
        move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile);
        $query="insert into posts values(null,'$user_id','$heading','$description',0,CURDATE(),'$category','$uploadfile')";
		$execute=mysqli_query($conn,$query);
		echo '<script>window.location.href = "homepage.php";</script>';
	}
}
else
{
	echo '<script>window.location.href = "linkbroke.php";</script>';
}
?>