<?php
session_start();
include 'files.php';
$object=new Files;
$conn=$object->connection();
$post_id=mysqli_real_escape_string($conn,$_GET['post_id']);
$user_id=$_SESSION['user_id'];
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
		color: #BBBBBB;
		width: 200px;
	}
	
	input[type=SUBMIT]
	{
		border-radius: 5px;
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
			
			echo '<!-- AddToAny BEGIN -->';
			echo '<div class="a2a_kit a2a_kit_size_32 a2a_default_style">';
			//echo '<a class="a2a_dd" href="https://www.addtoany.com/share"></a>';
			echo '<a href="homepage.php" class="a2a_button_facebook"></a>';
			echo '<a class="a2a_button_twitter"></a>';
			echo '<a class="a2a_button_google_plus"></a>';
			echo '<a class="a2a_button_whatsapp"></a>';
			echo '</div>';
			echo '<script async src="https://static.addtoany.com/menu/page.js"></script>';
			echo '<!-- AddToAny END -->';
			$query="select * from posts where post_id='$post_id'";
			$execute=mysqli_query($conn,$query);
			if(($execute)&&(mysqli_num_rows($execute)==1))
			{
				$object->addView($conn,$post_id);
				$row=mysqli_fetch_row($execute);
				$row2=$object->getUserDetails($conn,$row[1]);
				$likes=$object->getLikes($conn,$row[0]);
				echo '<div class="row">';
				echo '<div class="col-xs-8" style="color:; font-size:150%;">'.$row2[1].' '.$row2[2];
				if($user_id=='15311A12D5')
				{
					echo '  <a class="btn btn-info" role="button" href="delete_post.php?post_id='.$post_id.'">delete_post</a>';
				}
				else
				{
					echo '  <a class="btn btn-info" role="button" href="report.php?post_id='.$post_id.'">report</a>';
				}
				$result=$object->getLiked($conn,$post_id,$user_id);
				if($result)
				{
					$result='Unlike';
				}
				else
				{
					$result='Like';
				}
				echo '</div>';
				echo '<div class="col-xs-4" style="color:; font-size:100%;">'.$row[4].'<lable>views</lable>'." ".$row[5].'</div>';
				echo '</div>';
				echo '<div class="row">';
				echo '<div class="col-xs-12" style="background-color:#BBBBBB; padding-bottom:25px; padding-top:25px; border-radius:8px; font-size:200%; overflow:scroll;"><lable>'.nl2br($row[2]).'</div>';
				echo '</div><br/>';
				echo '<div class="row">';
				echo '<div class="col-xs-12" style="background-color:#BBBBBB; padding-bottom:25px; padding-top:25px; border-radius:8px; font-size:120%; overflow:scroll;"><lable>'.nl2br($row[3]).'</div>';
				echo '</div>';
				echo '<a href="like.php?post_id='.$post_id.'" class="btn btn-info" role="button">'.$result.'</a><lable>'.$likes.' Likes</lable>';
				echo '<form action="comment.php?post_id='.$post_id.'" method="post">';
				echo '<textarea name="comment" rows="2" cols="45" style="border-radius:5px;" required></textarea>';
				echo ' <input type="submit" value="Comment_to_this_post">';
				echo '</form>';
				echo '<h2>comment session:</h2>';
				$query5="select * from comments where post_id='$post_id' order by date desc";
				$ececute5=mysqli_query($conn,$query5);
				while($row5=mysqli_fetch_row($ececute5))
				{
					$row6=$object->getUserDetails($conn,$row5[1]);
					echo '<div class="row">';
					if($row6[7]==null)
					{
						echo '<div class="col-xs-10" style="background-color:#BBBBBB; padding-bottom:0px; padding-top:0px; border-radius:8px; font-size:120%; overflow:scroll;"><lable ><img height="50" class="img-circle" width="50" alt="picture" src="default_pp.png"><a href="view_profile.php?user_id='.$row6[0].'">'.$row6[1]." ".$row6[2].'</a>:</lable><lable style="font-size:70%; position:absolute; right:0px; top:15px;">'.$row5[3].'</lable><br/>';
					}
					else
					{
						echo '<div class="col-xs-10" style="background-color:#BBBBBB; padding-bottom:0px; padding-top:0px; border-radius:8px; font-size:120%; overflow:scroll;"><lable ><img height="50" class="img-circle" width="50" alt="picture" src="data:image;base64,'.$row6[7].'"><a href="view_profile.php?user_id='.$row6[0].'">'.$row6[1]." ".$row6[2].'</a>:</lable><lable style="font-size:70%; position:absolute; right:0px; top:15px;">'.$row5[3].'</lable><br/>';
					}
					echo '<h6 style="padding-left:25px;">'.nl2br($row5[2]).'</h6>';
					//echo '<h6 style="text-align:right;">'.nl2br($row5[3]).'</h6>';
					echo '</div>';
					echo '<div class="dropdown">';
  					echo '<button class="dropbtn">details</button>';
  					echo '<div class="dropdown-content">';
    				echo '<a href="message_report.php">report</a>';
   				 	if($user_id==$row5[1]||$user_id==$row[1])
     				{
    					echo '<a href="delete_comment.php?id='.$row5[1].'&post_id='.$row5[0].'&date='.$row5[3].'">delete_message</a>';
    				} 
    				echo '</div>';
					echo '</div>';
					echo '</div><br/>';

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