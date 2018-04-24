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
   
                  if(isset($_GET['delete_id']))
  {

    $uid=$_GET['delete_id'];
    // select image from db to delete
    $select = "SELECT pic_id,userPic FROM $kesho WHERE  pic_id ='$uid";
    $imgRow=mysqli_query($conn,$select);
    
    // it will delete an actual record from db
    
      $delete = "DELETE FROM $kesho WHERE `$kesho`.pic_id ='$uid'";
    $del=mysqli_query($conn,$delete);
   
     header("Location:view private.php?id=$username");
    
  }
  else{
    echo "no pic sent";
  }
}
  else
  {
    header('Location:index.php');
  }
?>