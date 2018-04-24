<?php
session_start();
require 'db.php';
if(isset($_SESSION['userName']))
{	
	$mimi=$_SESSION['userName'];
	$lini="pals";
    $friends=$mimi.$lini;
	$name=$_GET['id'];
	$pal=$name.$lini;
	//take user and fan pic
	$query="SELECT name,photo_id FROM members WHERE name= '$name'  ";
	$query1="SELECT name,photo_id FROM members WHERE name= '$mimi'  ";
	if($result=mysqli_query($conn,$query))
	{
	$row=mysqli_fetch_array($result);
	extract($row);
	$userpic=$row['photo_id'];
	$sql="INSERT INTO $friends(name,userpic,status) VALUES('$name','$userpic','1') ;";
	mysqli_query($conn,$sql);

	if($result1=mysqli_query($conn,$query1))
	{
		$row1=mysqli_fetch_array($result1);
	extract($row1);
	$mypic=$row1['photo_id'];
	//insert into user 

	$fun_insert1="INSERT INTO $pal(name,userpic,status) VALUES('$mimi','$mypic','0') ;";
	if(mysqli_query($conn,$fun_insert1))
	{
		header('location:view_profile.php?id=$name');
		
		
	}
	else
	{
		echo "fun not added";
	}
	}
	
	}
	
}
else
{
	header('location:index.php');
}
?>
