<?php
session_start();
require 'db.php';
if(isset($_SESSION['userName']))
{
  ?>
<html>
            <body>
            <style>
  .image1{
  width: 100px;
  height: 100px;
  }
  a {
font-family: Verdana, sans-serif;
text-decoration: none;
}
      a:link {
color: black;
}
a:visited {
color: black;
}
a:hover {
color: black;
}
a:active {
color: black;
}
</style> 
<?php
	$userName=$_SESSION['userName'];
	$mimi=$userName;
      $yeye="albums";
      $jana=$mimi.$yeye;
      $wewe="storyyako";
      $sisi=$mimi.$wewe;
      $leo="private";
      $kesho=$mimi.$leo;
	 $james="SELECT pic_id,picname, userPic FROM $sisi ORDER BY pic_id DESC ";
      $sql=mysqli_query($conn,$james);
      	# code...
      	while ($row=mysqli_fetch_array($sql)) {
            extract($row);
            ?>
<img src="uploaded_images/<?php echo $row['userPic']; ?>" class="image1"/>
       
       <?php
       echo "\n".$row['picname'];

	}
  ?>
  <button>share</button>
  <?php
}
	else
	{
		header('Location:index.php');
	}

?>

</body>
</html>