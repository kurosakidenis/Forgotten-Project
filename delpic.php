<?php
session_start();
require 'db.php';
if(isset($_SESSION['userName']))
{
    $username=$_SESSION['userName'];
  $mimi=$username;
      $yeye="albums";
      $jana=$mimi.$yeye;
      $wewe="storyyako";
      $sisi=$mimi.$wewe;
      $leo="private";
      $kesho=$mimi.$leo;  

  ?>
  <!DOCTYPE html>
  <html>
  <head>
            <style>
  .image{
   width: 154px;
  height: 107px;
  }
    .upload{
    width: 35px;
  height: 27px; 
}
</style>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>
  <body>
  <?php
	
      $james="SELECT pic_id,picname,userPic FROM  $sisi  ORDER BY pic_id DESC";
      $sql=mysqli_query($conn,$james);

      if(mysqli_num_rows($sql)<=0)
      {
?>
        <p>no data to delete </p>
        <?php
      }
      else{
       ?>
       <form method="post" action="delimg.php?id=<?php echo $username ?>" enctype="multipart/form-data">
       <?php
        while ($row=mysqli_fetch_array($sql)) {
            extract($row);
            ?>
       
<a href="delimg.php?delete_id=<?php echo $row['pic_id'];?>" name="delete_id" target="center" ><img src="uploaded_images/<?php echo $row['userPic'];?>" class="image"/></a>
            <?php

       
      }
      ?>
      
      </form>
      <?php
      }
 
     ?>
     </body>
</html>
     <?php          

	}
	else
	{
		header('Location:index.php');
	}

?>