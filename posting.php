<?php
session_start();
include 'files.php';
$object=new Files;
$conn=$object->connection();
$my_id='15311A12D5';
$id=mysqli_real_escape_string($conn,$_GET['user_id']);
$value=str_replace(' ','',$id);
if($value=='')
{
	echo '<script>window.location.href = "linkbroke.php";</script>';
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charser="UTF-8">
	<meta lang="en-US">
	<title>welcome</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
	input[type=TEXT]
	{
		border-radius: 5px;
	}
	input[type=SUBMIT]
	{
		border-radius: 5px;
	}
	.navbar-custom 
	{
		background-color:#BBBBBB;
    	color: black;
  		border-radius:10px;
	}
  	.navbar
  	{ 
   	 	background-image: none;
	}
	.dropbtn
	{
    	background-color:#BBBBBB;
    	color: black;
    	padding: 6px;
    	font-size: 16px;
    	border: none;
	    cursor: pointer;
	    padding-right: 10px;
	    padding-left: 10px;
	    border-radius: 5px;
	}

	.dropdown 
	{
    	position: absolute;
    	right: 50px;
    	display: inline-block;
	}

	.dropdown-content 
	{
    	display: none;
    	position: absolute;
    	background-color: #f9f9f9;
    	min-width: 160px;
    	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    	z-index: 1;
	}

	.dropdown-content a 
	{
    	color: black;
    	padding: 12px 16px;
    	text-decoration: none;
    	display: block;
	}

	.dropdown-content a:hover {background-color: #BBBBBB;}

	.dropdown:hover .dropdown-content 
	{
    	display: block;
	}

	.dropdown:hover .dropbtn 
	{
    	background-color: #3e8e41;
	}

	</style>	
</head>
<body>
	<?php
		if(isset($_SESSION['user_id'])&&isset($_SESSION['username']))
		{
			$REGULAR='REGULAR';
			$CS='CS';
			$IT='IT';
			$MECH='MECH';
			$ECE='ECE';
			$EEE='EEE';
			$ECM='ECM';
			$BT='BT';
			$CIVIL='CIVIL';
			$CLUBS='CLUBS';
			$FESTS='FESTS';
			$WORKSHOPS='WORKSHOPS';
			$EVENTS='EVENTS';
			$OTHERS='OTHERS';
			echo '<div class="container-fluid">';
			//echo '<img class="img-thumbnail" alt="college_logo" src="logo.jpeg" height="130" width="70">';
			echo '<div class="row" style="background-color:#003760; padding-bottom:30px; border-radius:8px; color:#BBBBBB;">';
			echo '<div class="col-xs-2" style="font-size:300%; padding-top:35px;">';
			echo '<img class="img-responsive" alt="college_logo" src="logo.jpeg" height="320" width="420">';
			//echo '<h1 style="text-align:center;">SNIST FORUMS</h1>';
			echo '</div>';
			echo '<div class="col-xs-10" style="font-size:300%;">';
			echo '<h1 style="text-align:center; padding-right:75px; padding-top:13px;">COMMUNITY</h1>';
			echo '</div>';
			echo '</div>';
			echo '<div class="row">';
			echo '<div class="col-xs-8">';
			echo '<h3>Welcome, '.$_SESSION['username']."...!".'</h3>';
			echo '</div>';
			echo '<div class="col-xs-4" style="padding-top:25px;">';
			echo '<form action="search.php" method="post">';
			echo '<input type="text" name="search_value" placeholder="Search Anything..." required>';
			echo ' <input type="submit" value="Search">';
			echo '</form>';
			echo '</div>';
			echo '</div>';
			
			echo '<nav class="navbar navbar-default navbar-custom">';
  			echo '<div class="navbar-header">';
    		echo '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">';
      		echo '<span class="sr-only">Toggle navigation</span>';
      		echo '<span class="icon-bar"></span>';
      		echo '<span class="icon-bar"></span>';
      		echo '<span class="icon-bar"></span>';
    		echo '</button>';
    		echo '<a class="navbar-brand" href="homepage.php">Snist Community</a>';
  			echo '</div>';
  			echo '<div class="collapse navbar-collapse">';
    		echo '<ul class="nav navbar-nav">';
     		echo '<li class="active"><a href="homepage.php">Homepage</a></li>';
        	echo '<li><a href="compose.php">Compose</a></li>';
        	echo '<li><a href="groups.php">Groups</a></li>';
        	echo '<li><a href="create_group.php">Create</a></li>';
        	echo '<li><a href="mostviewed.php">Mostviewed</a></li>';
        	echo '<li><a href="profile.php">Profile</a></li>';
        	echo '<li><a href="logout.php">Logout</a></li>';
    		echo '</ul>';
  			echo '</div>';
			echo '</nav>';
			//likes starting
			$row2=$object->getUserDetails($conn,$id);
			echo '<h4>'.$row2[1].' '.$row2[2].' Posting:</h4><br/>';
			echo '<h4>Likes:</h4>';
			$query="select * from likes where user_id='$id'";
			$execute=mysqli_query($conn,$query);
			if($execute)
			{
				if(mysqli_num_rows($execute)>0)
				{
					while($row3=mysqli_fetch_row($execute))
					{
						$query2="select * from posts where post_id='$row3[0]'";
						$execute2=mysqli_query($conn,$query2);
						if($execute2)
						{
							$row4=mysqli_fetch_row($execute2);
							echo '<div class="row">';
							echo '<div class="col-xs-8">';
							echo $row2[1].' '.$row2[2].' Liked this Post:';
							echo '<br/><lable style="background-color:#BBBBBB; font-size:150%;">'.$row4[2].'    </lable><br/><br/>';
							echo '</div>';
							echo '<div class="colxs-4">';
							echo '<a href="view_post.php?post_id='.$row3[0].'" class="btn btn-info" role="button">View</a>';
							echo '</div>';
							echo '</div>';
						}
						else
						{
							echo '<script>window.location.href = "linkbroke.php";</script>';
						}
					}
					echo '<br/><br/><br/>';
				}
				else
				{
					echo '<h5>Nothing to show</h5>';
					echo '<br/><br/><br/>';
				}
			}
			else
			{
				echo '<script>window.location.href = "linkbroke.php";</script>';
			}
			//Likes ending


			//comments start
			echo '<h4>Commenting:</h4>';
			$query3="select * from comments where user_id='$id'";
			$execute3=mysqli_query($conn,$query3);
			if($execute3)
			{
				if(mysqli_num_rows($execute3)>0)
				{
					while($row4=mysqli_fetch_row($execute3))
					{
						$query4="select * from posts where post_id='$row4[0]'";
						$execute4=mysqli_query($conn,$query4);
						if($execute4)
						{
							$row5=mysqli_fetch_row($execute4);
							echo '<div class="row">';
							echo '<div class="col-xs-8">';
							echo $row2[1].' '.$row2[2].' Commented on this Post:';
							echo '<br/><lable style="background-color:#BBBBBB; font-size:150%;">'.$row5[2].'    <br/></lable>Comment :'.$row4[2].'<br/><br/><br/>';
							echo '</div>';
							echo '<div class="colxs-4">';
							echo '<a href="view_post.php?post_id='.$row4[0].'" class="btn btn-info" role="button">View</a>';
							echo '</div>';
							echo '</div>';

						}
						else
						{
							echo '<script>window.location.href = "linkbroke.php";</script>';
						}
					}
					echo '<br/><br/><br/>';
				}
				else
				{
					echo '<h5>Nothing to show</h5>';
					echo '<br/><br/><br/>';
				}
			}
			else
			{
				echo '<script>window.location.href = "linkbroke.php";</script>';
			}
			//Comments over
			echo '<h4>Posts:</h4>';
			$query4="select * from posts where user_id='$id'";
			$execute4=mysqli_query($conn,$query4);
			if($execute4)
			{
				if(mysqli_num_rows($execute4)>0)
				{
					while($row6=mysqli_fetch_row($execute4))
					{
						$row5=mysqli_fetch_row($execute4);
						echo '<div class="row">';
						echo '<div class="col-xs-8">';
						echo $row2[1].' '.$row2[2].' Composed this Post:';
						echo '<br/><lable style="background-color:#BBBBBB; font-size:150%;">'.$row6[2].'    </lable><br/><br/><br/>';
						echo '</div>';
						echo '<div class="colxs-4">';
						echo '<a href="view_post.php?post_id='.$row6[0].'" class="btn btn-info" role="button">View</a>';
						echo '</div>';
						echo '</div>';
					}
					echo '<br/><br/><br/>';
				}
				else
				{
					echo '<h5>Nothing to show</h5>';
					echo '<br/><br/><br/>';
				}
			}
			else
			{
				echo '<script>window.location.href = "linkbroke.php";</script>';
			}


			


			echo '</div>';
			echo '<a href="author.php"><footer>Developed and Maintained by Srinivas Anand.G</footer></a>';
		}
		else
		{
			echo '<script>window.location.href = "linkbroke.php";</script>';
		}
	?>
</body>
</html>