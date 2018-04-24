<?php
session_start();
require 'db.php';
if(isset($_SESSION['userName']))
{
	$import=$_GET['id'];
	$userName=$_SESSION['userName'];
	$mimi=$userName;
      $yeye="albums";
      $jana=$mimi.$yeye;
      $wewe="storyyako";
      $sisi=$mimi.$wewe;
      $leo="private";
      $kesho=$mimi.$leo;
      $yeye=$import.$mimi;
	 $james="SELECT `pic_id`,`picname` FROM $yeye ORDER BY pic_id DESC ";
      $sql=mysqli_query($conn,$james);
      	# code...
      	while ($row=mysqli_fetch_array($sql)) {
            extract($row);
            ?><html>
            <body>
            <style>
  .image{
  width: 149px;
  height: 105px;
  }
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
</style> <img src="Albums/<?php echo $row['picname']; ?>" class="image"/>
       
       <?php

	}
}
	else
	{
		header('Location:index.php');
	}

?>

</body>
</html>
