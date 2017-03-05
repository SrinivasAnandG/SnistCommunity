<?php
session_start();
include 'files.php';
$object=new Files;
$conn=$object->connection();
$user_id=$_SESSION['user_id'];
$group_id=mysqli_real_escape_string($conn,$_GET['group_id']);
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
	lable
	{
		font-size: 200%;
	}
	input[type=TEXT]
	{
		border-radius: 4px;
	}
	input[type=submit]
	{
		border-radius: 4px;
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
    	position: relative;
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
			echo '<h3>Welcome, '.$_SESSION['username']."...!".'</h3>';
			
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
			
			$row=$object->getGroupDetails($conn,$group_id);
			if($row==true)
			{
				$row2=$object->getUserDetails($conn,$row[2]);
				echo '<div class="row">';
				echo '<div class="col-xs-8">';
				//echo '<lable>Group_Admin : '.$row2[1].' '.$row2[2];
				echo '<lable>'.$row[1].' </lable>';
				echo '<div class="dropdown">';
 		 		echo '<button class="dropbtn">details</button>';
  				echo '<div class="dropdown-content">';
    			echo '<a href="group_details.php?group_id='.$group_id.'">people</a>';
    			echo '<a href="update_group_details.php?group_id='.$group_id.'">update_group_details</a>';
     			if($user_id==$row[2])
     			{
    				echo '<a href="delete_group.php?group_id='.$group_id.'">delete_group</a>';
    			}
    			else
    			{
    				echo '<a href="leave_from_group.php?user_id='.$user_id.'">leave</a>';
    			}
  				echo '</div>';
				echo '</div>';
				echo '<h6>created on '.$row[3].' by :'.$row2[1].' '.$row2[2].'</h6>';
				echo '</div>';
				echo '<div class="col-xs-4">';
				if($user_id==$row[2])
				{
					echo '<form action="add_people.php?group_id='.$group_id.'" method="post">';
					echo '<input type="text" name="user_id" pattern="(?=.*[0-9])(?=.*[A-Z]).{10}" title="college id number" required>';
					echo '<input type="submit" value="Add_(him/her)">';
					echo '</form>';
				}
				echo '</div>';
				echo '</div>';
				$query="select * from group_members where group_id='$group_id'";
				$execute=mysqli_query($conn,$query);
				if($execute)
				{
					while($row4=mysqli_fetch_row($execute))
					{
						$row5=$object->getUserDetails($conn,$row4[1]);
						echo '<div class="row" style="background-color:#BBBBBB; border-radius:5px;">';
						echo '<div class="col-xs-8">';
						if($row5[7]==null)
						{
							echo '<img height="50" class="img-circle" width="50" alt="picture" src="default_pp.png">';
						}
						else
						{
							echo '<img height="50" class="img-circle" width="50" alt="picture" src="data:image;base64,'.$row5[7].'">';
						}
						echo '<h4><a href="view_profile.php?user_id='.$row5[0].'">'.$row5[1].' '.$row5[2].'</a></h4>';
						echo '</div>';
						echo '<div class="col-xs-4">';
						if($user_id==$row[2])
						{
							if($user_id==$row5[0])
							{
								echo '';
							}
							else
							{
								echo '<a href="kick_out.php?id='.$row4[1].'&group_id='.$group_id.'" class="btn btn-info" role="button">kick_out</a><br/>';
							}
						}
						echo '</div>';
						echo '</div><br/>';
					}
				}
				else
				{
					echo '<script>window.location.href = "linkbroke.php";</script>';
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