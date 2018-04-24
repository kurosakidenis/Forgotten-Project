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
   width: 171px;
  height: 105px;
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
</style> <?php
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
      	
      if (mysqli_num_rows($sql)<=0) {
        ?>
        
         <a href="input.php?id=$username" target="center"><img src="img/images.jpeg" class="upload" /></a><br/>
        <?php
      }

      else
      {
        while ($row=mysqli_fetch_array($sql)) {
            extract($row);
            ?>
      
<img src="uploaded_images/<?php echo $row['userPic']; ?>" class="image1"/>
       
       <?php

  }
  ?>
  <a href="input.php?id=<?php echo $username?>" target="center"><img src="img/images.jpeg" class="upload" ></a><br/>
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