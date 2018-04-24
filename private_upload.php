<?php
session_start();
require 'db.php';
if(isset($_SESSION['userName']))
{
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
  $username=$_SESSION['userName'];
$name=mysqli_real_escape_string($conn,$_POST['name']);
$mimi=$username;
      $yeye="albums";
      $jana=$mimi.$yeye;
      $wewe="storyyako";
      $sisi=$mimi.$wewe;
      $leo="private";
      $kesho=$mimi.$leo;
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

      if($file_size > 10485760){
         $errors[]='File size must be less than MB';
      }

     if(empty($errors)==true){
       $upload_dir = 'private_images/';
        compress_image($file_tmp, $upload_dir.$rand, 80);
        

        $query="INSERT INTO $kesho (picname,userPic)
        VALUES ('$name','$rand');";
        
          mysqli_query($conn,$query);
          header('location:view private.php?id=$username');
        
       
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
