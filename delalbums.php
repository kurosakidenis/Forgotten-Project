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
   
    if(isset($_GET['id']))
  {

    $uid=$_GET['id'];
    // select image from db to delete
    $select = "SELECT album_id,album_name FROM $jana  WHERE  album_id ='$uid'";
    ($imgrow=mysqli_query($conn,$select))===true;
    $row=mysqli_fetch_array($imgrow);
    
      extract($row);
      $del=$row['album_name'].$mimi;
    $select1="SELECT TABLE $del";
    if(mysqli_query($conn,$select1)===true)
    {
     $delete="DROP TABLE $del";
      $delete = "DELETE FROM $jana WHERE `$jana`.album_id ='$uid'";
    $del=mysqli_multi_query($conn,$delete);
     header("Location:albumlist.php?id=$username"); 
    
    }
    
    
    // it will delete an actual record from db
    
    }
  
        
    
  }
  else{
    echo "no pic sent";
    header('Location: ../index.php');
  }
?>