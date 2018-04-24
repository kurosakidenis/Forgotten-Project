<?php
session_start();
require 'db.php';
if (isset($_SESSION['userName'])) {
  ?>
   <!DOCTYPE html>
            <html>
            <body>
            <style  >
            .image1{
  width: 100px;
  height: 100px;
  }
  .align{
    text-align: center;
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
	# code...
	$username=$_SESSION['userName'];
	$mimi=$username;
      $yeye="albums";
      $jana=$mimi.$yeye;
      $wewe="storyyako";
      $sisi=$mimi.$wewe;
      $leo="private";
      $kesho=$mimi.$leo;
      $link='user_images/';
      $james="SELECT album_id,album_name,userPic,pic_no FROM $jana  ORDER BY album_id DESC";
      $sql=mysqli_query($conn,$james);
      
      while ($row=mysqli_fetch_array($sql)) {
            extract($row);
            #display table names as links.
            ?>
           
           <a href="albumpics.php?id=<?php echo $row['album_name']; ?>"> <img src="Albums/<?php echo $row['userPic']; ?>" class="image1" /></a>
       <a href="albumpics.php?id=<?php echo $row['album_name']; ?>" target="center" class="align" ><?php echo $row['album_name']; ?></a>
           
       <?php

      }
      ?>
      <button >share</button>
       </body>
            </html>
      <?php
 
}
 else 
{
	# code...
	header('location:index.php');
}

?>
