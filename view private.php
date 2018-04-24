<?php
session_start();
require 'db.php';
if(isset($_SESSION['userName']))
{
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
	$username=$_SESSION['userName'];
	$mimi=$username;
      $yeye="albums";
      $jana=$mimi.$yeye;
      $wewe="storyyako";
      $sisi=$mimi.$wewe;
      $leo="private";
      $kesho=$mimi.$leo;
      $james="SELECT pic_id,picname,userPic FROM $kesho ORDER BY pic_id DESC";
      $sql=mysqli_query($conn,$james);

      if(mysqli_num_rows($sql)<=0)
      {
?>
        <a href="private.php?id=$username" target="center"> <img src="img/images.jpeg" class="upload" /> </a><br/>
        <?php
      }
      else{
        while ($row=mysqli_fetch_array($sql)) {
            extract($row);
            ?>
       
            <img src="private_images/<?php echo $row['userPic'];?>" class="image"/>
            <?php
       
            
      }
      ?>
      <a href="private.php?id=$username" target="center"><img src="img/images.jpeg" class="upload" /></a><br/>
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
