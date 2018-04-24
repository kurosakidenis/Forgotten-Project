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
  $name=$_POST['album'];

      $upload_dir = 'Albums/';
    $username=$_SESSION['userName'];
$mimi=$username;
      $yeye="albums";
      $jana=$mimi.$yeye;
      $wewe="storyyako";
      $sisi=$mimi.$wewe;
      $leo="private";
      $kesho=$mimi.$leo;
      $album=$name.$mimi;
        $query="CREATE TABLE $album (
          `pic_id` int(11) NOT NULL AUTO_INCREMENT,
        `picname` varchar(200) NOT NULL,
        PRIMARY KEY (`pic_id`)) ";
        $sql="SELECT pic_id FROM $album ";
       
            

  if(isset($_FILES['file']))
 {
   
      $errors= array();
      if(mysqli_query($conn,$query)==true)
      {
         
         for($i=0; $i < count($_FILES['file']['name']);$i++)
         {
           $rand=uniqid();
           $query2="INSERT INTO $album (`picname`) 
         VALUES('$rand') ";
      
         
      $file_size =$_FILES['file']['size'][$i];
      $file_tmp =$_FILES['file']['tmp_name'][$i];
      $file_type=$_FILES['file']['type'][$i];
      $file_ext=strtolower(end((explode('.',$_FILES['file']['name'][$i]))));

      $expensions= array("jpeg","jpg","png");

      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

      if($file_size > 10485760){
         $errors[]='File size must be less than 10 MB';
      }

      if(empty($errors)===true && mysqli_query($conn,$query2)==true)
      {
        $upload_dir = 'Albums/';
        
         
          compress_image($file_tmp, $upload_dir.$rand, 80);
           
      }
      else
      {
        print_r($errors);
      }
     
         }
       }
      
      else
      {
        echo"album exists";
      }
     
                
            if($sql2=mysqli_query($conn,$sql))
            {

                $rows=mysqli_num_rows($sql2);
            # code...
                $mysql1="SELECT`pic_id` ,`picname` FROM $album where `pic_id`=1";
                $result=mysqli_query($conn,$mysql1);
                

            $count=$rows;
            if(isset($rows) && $fetch=mysqli_fetch_array($result)){
              $userpic=$fetch['picname'];
              $query1="INSERT into $jana (`album_name`,`userPic`,`pic_no`)
         VALUES('$name','$userpic','$count'); ";

         mysqli_query($conn,$query1);

            header('location:albumlist.php?id=$username');

            }
            }
         
            else{
              echo "screw code";
            } 
          
            
  
}
       
     
}
else
{
  header('location:index.php');
}
?>
  
      