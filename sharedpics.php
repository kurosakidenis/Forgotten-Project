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
</style> <?php
	$userName=$_SESSION['userName'];
	$mimi=$userName;
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
	 $james="SELECT pic_id,name, userPic FROM $shared_pics ORDER BY pic_id DESC ";
      $sql=mysqli_query($conn,$james);
      	# code...
      if (mysqli_num_rows($sql)<=0) {
        ?>
         <p> you have no shared pics yet</p>
        <?php
      }

      else
      {
        while ($row=mysqli_fetch_array($sql)) {
            extract($row);
            ?>
      
<img src="uploaded_images/<?php echo $row['name']; ?>" class="image1"/>
       
       <?php

  }
  ?>
  
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