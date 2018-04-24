<?php
session_start();
require 'db.php';
$username= mysqli_real_escape_string ($conn,$_POST['username']);

 $email =mysqli_real_escape_string ($conn,$_POST['email']) ;
 $password = mysqli_real_escape_string ($conn,$_POST['password']);
 $confirmcode=uniqid();
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
if(isset($_FILES['photo']))
 {
   $rand=uniqid();
      $errors= array();
      $file_name = $_FILES['photo']['name'];
      $file_size =$_FILES['photo']['size'];
      $file_tmp =$_FILES['photo']['tmp_name'];
      $file_type=$_FILES['photo']['type'];
      $file_ext=strtolower(end((explode('.',$_FILES['photo']['name']))));

      $expensions= array("jpeg","jpg","png");

      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

      if($file_size > 10485760){
         $errors[]='File size must be less than 10 MB';
      }

      if(empty($errors)===true)
      {
        $upload_dir = 'user_images/';
         compress_image($file_tmp,$upload_dir.$rand,80);

         
      $algo='6';
      $rounds='5000';
      $CryptSalt='$'.$algo.'$rounds='.$rounds.'$';      
      $hashedpassword=crypt($password,$CryptSalt);

      
      
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
      $shared_pics=$mimi.$shared;
      $shared_albums=$mimi.$sh_albums;


      $_SESSION['userName'] = $username;

      $sql="CREATE TABLE  $sisi (
        `pic_id` int(11) NOT NULL AUTO_INCREMENT,
        `picname` varchar(200),
        `userPic` varchar(200) NOT NULL,
        PRIMARY KEY (`pic_id`));";

        $sql.="CREATE TABLE  $jana(
          `album_id` int(11) NOT NULL AUTO_INCREMENT,
          `album_name` varchar(200) NOT NULL,
          `userPic` varchar(200) NOT NULL,
            `pic_no` int(200) NOT NULL,
          PRIMARY KEY (`album_id`));";

$sql.="CREATE TABLE $kesho(
  `pic_id` int(11) NOT NULL AUTO_INCREMENT,
        `picname` varchar(200),
        `userPic` varchar(200) NOT NULL,
        PRIMARY KEY (`pic_id`));";

        $sql.="CREATE TABLE $friends(
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(200) NOT NULL,
        `userPic` varchar(200) NOT NULL,
        `status` int(1) NOT NULL,
        PRIMARY KEY(`id`));";

        $sql.="CREATE TABLE  $shared_albums(
          `album_id` int(11) NOT NULL AUTO_INCREMENT,
          `album_name` varchar(200) NOT NULL,
          `name` varchar(200) NOT NULL,
          `userPic` varchar(200) NOT NULL,
            `pic_no` int(200) NOT NULL,
          PRIMARY KEY (`album_id`));";
          $sql.="CREATE TABLE $shared_pics(
  `pic_id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(200),
        `userPic` varchar(200) NOT NULL,
        PRIMARY KEY (`pic_id`));"; 

      $sql.="INSERT INTO members(name,email,password,photo_id,confirmcode)
      VALUES('$username','$email','$hashedpassword','$rand','$confirmcode');
      ";
      if (mysqli_multi_query($conn,$sql)===true)
      {
        
    header('location:frame.php?id=$username');

      }
else{
  echo "username ".$username." alerady exists" ;
    }


      }
      else{
         echo "error";
      }
      


}
mysqli_close($conn);
 ?>