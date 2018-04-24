<?php
session_start();
$conn=mysqli_connect("localhost","root","","pics");
//Check Connection
if(!$conn)
{
die("Connection Failed:".mysqli_connect_error());
}
$username=$_SESSION['userName'];

if(isset($_SESSION['userName']))
{
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
  <style type="text/css">
    .image{
       width: 149px;
  height: 105px;
    }
  </style>
	<body>
  <?php 
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
      //count pictures
      $query="SELECT `pic_id` FROM $sisi ";
      $result=mysqli_query($conn,$query);
      $number=mysqli_num_rows($result);
      //count albums
      $query1="SELECT `album_id` FROM $jana ";
      $result1=mysqli_query($conn,$query1);
      $number1=mysqli_num_rows($result1);
      //display funs
      $query2="SELECT `id`,`status` FROM $friends WHERE status=1";
      $result2=mysqli_query($conn,$query2);
      $number2=mysqli_num_rows($result2);
      //display prof pic
      $james="SELECT photo_id  FROM members WHERE name='$username'";
      $sql=mysqli_query($conn,$james);
      while ($row=mysqli_fetch_array($sql)) {
            extract($row);
            ?>
       <img src="user_images/<?php echo $row['photo_id']; ?>" class="image"/><br/>
       <?php

      }
      ?>
      pics <?php echo $number ;?><br/>
      albums <?php echo $number1 ;?> <br/>
      funs <?php echo $number2 ;?><br/>
	<form method="post" enctype="multipart/form-data">
	<table>
			<tr>
				<td>upload</td>
			</tr>
			<tr>
				<td><input type="file" name="file" required/></td>
			</tr>
			<tr>
				<td> <button type="submit"> change pic</button></td>
			</tr>
		</table>
	</form>
	</body>
	</html>
	<?php
	$name = ''; $type = ''; $size = ''; $error = '';
    function compress_image($source_url, $destination_url, $quality) {

        $info = getimagesize($source_url);

            if ($info['mime'] == 'image/jpeg')
                    $image = imagecreatefromjpeg($source_url);

            elseif ($info['mime'] == 'image/gif')
                    $image = imagecreatefromgif($source_url);

        elseif ($info['mime'] == 'image/png')
                    $image = imagecreatefrompng($source_url);

            imagejpeg($image, $destination_url, $quality);
        return $destination_url;
    }
	     if(isset($_FILES['file']))
 {
   $rand=uniqid();
      $errors= array();
      $file_name = $_FILES['file']['name'];
      $file_size =$_FILES['file']['size'];
      $file_tmp =$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];
      $file_ext=strtolower(end((explode('.',$_FILES['file']['name']))));

      $expensions= array("jpeg","jpg","png");

      if(in_array($file_ext,$expensions)=== false){
         $errors1[]="extension not allowed, please choose a JPEG or PNG file.";
      }

      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB'; 
      }

      
$del="SELECT photo_id  FROM members WHERE name='$username';";
      
$james="UPDATE members SET photo_id='$rand' WHERE name='$username' ";

     if(empty($errors)==true){
       $upload_dir = 'user_images/';
        compress_image($file_tmp,$upload_dir.$rand,80);

       mysqli_query($conn,$james);
        
          

          header('location:home.php?id=<?php echo $username?>');
        
        
     }
     else{
        print_r($errors);
        print_r($errors1);
     }
  }
	
      

}
else
{

	header('location:index.php');
}
?>
