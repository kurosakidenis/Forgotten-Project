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
  width: 149px;
  height: 105px;
  }
  .align{
    text-align: center;
  }
   .upload{
    width: 35px;
  height: 27px; 
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
</style>
  <?php
	
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
      if (mysqli_num_rows($sql)<=0) {
        ?>
        <p>no albums to delete</p>
        <?php
        
      }
      else
      {
        ?>
        <form method="post" action="delalbums.php/?id=<?php echo $username ?>" enctype="multipart/form-data">
        <?php
        while ($row=mysqli_fetch_array($sql)) {
            extract($row);
            #display table names as links.
            ?>
       
           <a href="delalbums.php?id=<?php echo $row['album_id']; ?>" name="id"> <img src="Albums/<?php echo $row['userPic']; ?>" class="image1" /></a>
       <a href="delalbums.php?id=<?php echo $row['album_id']; ?>" target="center" class="align" name="id" ><?php echo $row['album_name']; ?></a>
            
                  
  
       <?php

      }
      ?>
     </form>
     </body>
            </html>
      <?php
      }
      
}
 else 
{
	# code...
	header('location:index.php');
}

?>
