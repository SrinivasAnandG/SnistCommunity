<?php

class Files
{
	public $connect;
	function connection()
	{
		$host="localhost";
		$username="root";
		$password="";
		$database="student";
		ini_set('mysql.connect_timeout', '60');
		$connect=mysqli_connect($host,$username,$password,$database);
		if($connect)
		{
			return $connect;
		}
		else
		{
			die("not connected");
		}
	}
	function getUserDetails($conn,$id)
	{
		if (mysqli_ping($conn))
		{
			$query="select * from users where user_id='$id'";
			ini_set('mysql.connect_timeout', '60');
			$execute=mysqli_query($conn,$query);
			$row=mysqli_fetch_row($execute);
			if($execute==true)
			{
				return $row;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
	function getLikes($conn,$post_id)
	{
		if (mysqli_ping($conn))
		{
			$query="select * from likes where post_id='$post_id'";
			ini_set('mysql.connect_timeout', '60');
			$execute=mysqli_query($conn,$query);
			if($execute)
			{
				$row=mysqli_num_rows($execute);
				//echo $row;
				return $row;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
	function getLiked($conn,$post_id,$user_id)
	{
		if(mysqli_ping($conn))
		{
			$query="select * from likes where post_id='$post_id' and user_id='$user_id'";
			$execute=mysqli_query($conn,$query);
			if(mysqli_num_rows($execute)>0)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
	function like($conn,$post_id,$user_id)
	{
		if (mysqli_ping($conn))
		{
			$query="select * from likes where post_id='$post_id' and user_id='$user_id'";
			ini_set('mysql.connect_timeout', '60');
			$execute=mysqli_query($conn,$query);
			if(mysqli_num_rows($execute)==0)
			{
				$query2="insert into likes values ('$post_id','$user_id')";
				$execute2=mysqli_query($conn,$query2);
				if($execute2==true)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			else
			{
				$query3="delete from likes where post_id='$post_id' and user_id='$user_id'";
				ini_set('mysql.connect_timeout', '60');
				$execute3=mysqli_query($conn,$query3);
				if($execute3)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		else
		{
			return false;
		}
	}
	function getComments($conn,$post_id)
	{
		if (mysqli_ping($conn))
		{
			$query="select * from comments where post_id='$post_id'";
			ini_set('mysql.connect_timeout', '60');
			$execute=mysqli_query($conn,$query);
			//$row=mysqli_fetch_array($execute);
			if($execute)
			{
				return $execute;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
	function writeComment($conn,$post_id,$user_id,$comment)
	{
		if (mysqli_ping($conn))
		{
			$query="insert into comments values (null,'$post_id','$user_id','$comment')";
			ini_set('mysql.connect_timeout', '60');
			$execute=mysqli_query($conn,$query);
			if($execute)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
	function addView($conn,$post_id)
	{
		if (mysqli_ping($conn))
		{
			$query="select views from posts where post_id='$post_id'";
			ini_set('mysql.connect_timeout', '60');
			$execute=mysqli_query($conn,$query);
			if($execute)
			{
				$row=mysqli_fetch_row($execute);
				$views=$row[0];
				$views=$views+1;
				$query2="update posts set views='$views' where post_id='$post_id'";
				$ececute2=mysqli_query($conn,$query2);
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
	function getGroupDetails($conn,$group_id)
	{
		if (mysqli_ping($conn))
		{
			$query="select * from groups where group_id='$group_id'";
			ini_set('mysql.connect_timeout', '60');
			$execute=mysqli_query($conn,$query);
			if($execute)
			{
				$row=mysqli_fetch_row($execute);
				return $row;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
}
?>