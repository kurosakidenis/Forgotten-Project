<?php
session_start();
require 'db.php';
?>
<html>
<link rel="shortcut icon" href="image\story254.JPG"/>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<style>
	.image{
	width: 45px;
	height: 45px;
	position: absolute;
	border: 1px solid #211410;
	border-radius: 50%;}
      a {
font-family: Verdana, sans-serif;
text-decoration: none;
}
      a:link {
color: blue;
}
a:visited {
color: blue;
}
a:hover {
color: blue;
}
a:active {
color: blue;
}
</style>
<?php
$username=$_SESSION['userName'];

if(isset($_SESSION['userName']))
{
      $mimi=$username;
      $yeye="albums";
      $jana=$mimi.$yeye;
      $wewe="storyyako";
      $sisi=$mimi.$wewe;
      $leo="private";
      $kesho=$mimi.$leo;
      $shared="shared";
      $sh_albums="shrdal";
      $lini="pals";
      $friends=$mimi.$lini;
      $shared_pics=$mimi.$shared;
      $shared_albums=$mimi.$sh_albums;


      $james="SELECT photo_id  FROM members WHERE name='$username'";
      $sql=mysqli_query($conn,$james);
      while ($row=mysqli_fetch_array($sql)) {
            extract($row);
            ?>
       <img src="user_images/<?php echo $row['photo_id']; ?>" class="image"/>
       <?php

      }
      ?>
 <br/>
<br/>
<br/>
<p><b><?php  echo $username?></b></p>


<a href="home.php?id=<?php echo $username;?>" target="center"> pics</a><br/>

<a href="vids.php?id=<?php echo $username;?>" target="center">videos</a><br/>
<a href="view private.php?id=<?php echo $username; ?>" target="center">backup</a><br/>

<a href="albumlist.php?id=<?php echo $username;?>" target="center">albums</a><br/>


<p><b>shared</b></p>
<a href="sharedpics.php?id=<?php echo $username; ?>" target="center">pics</a><br/>
<a href="" target="center">albums</a><br/>
<p><b>edit</b> </p>
<a href="profile.php?id=<?php echo $username;?>" target="center">profile</a><br/>
<a href="delpic.php?id=<?php echo $username ;?>" target="center">delete pic</a><br/>
<a href="deleteal.php?id=<?php echo $username ;?>" target="center"> delete album</a><br/>
<a href="delprivate.php?id=<?php echo $username ;?>" target="center">del backup</a><br/>
<!--<a href="signout.php?id=<?php echo $username ;?>">logout</a>-->



</body>
</html>
<?php
mysqli_free_result($sql);
}
else{
	header('location:index.php');
}
?>
