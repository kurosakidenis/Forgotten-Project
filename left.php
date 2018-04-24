<?php
session_start();
require 'db.php';
$username=$_SESSION['userName'];
if (isset($_SESSION['userName'])) {
	# code...
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
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<style type="text/css">
			#linkref {
    color:white;
    text-decoration: none;
    padding:15px;
  }
  a href :hover,active;{
    background-color: #blue
  }
		</style>
	</head>
	<body>
	<a href="home.php?id=<?php echo $username ?>" target="center" id="linkref">HOME</a>
  <a href="albumlist.php?id=<?php echo $username ?>" target="center" id="linkref">ALBUMS</a>
  <a href="view private.php?id=<?php echo $username ?>" target="center" id="linkref">BACKUP</a>
  <?php
//count number of unanswered requests
$query2="SELECT `id`,`status` FROM $friends WHERE status=0";
      $result2=mysqli_query($conn,$query2);
      $number2=mysqli_num_rows($result2);
      ?>
<a href="requests.php?id=<?php echo $username; ?>" target="funs" id="linkref" >REQUESTS <sup><?php echo $number2; ?></sup></a>
	</body>
	</html>
	<?php
} else {
	# code...
	header('location:index.php');
}
?>
