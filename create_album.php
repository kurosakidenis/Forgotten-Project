<?php
session_start();
if(isset($_SESSION['userName'])) 
{
  $username=$_SESSION['userName'];
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="">
</head>
<body>
  <form action="album.php?id=<?php echo $username?>""  enctype="multipart/form-data" method="post">
    <table>
      <tr>
        <td>album title</td><td><input type="text" name="album" placeholder="album name" required/>
      </tr>
      <tr>
  <td>images</td><td><input type="file" multiple="multiple" name="file[]" placeholder="images"  required/>
      </tr>
      <tr>
        <td> <button type="submit">upload</button>
    </table>
  </form>
  <p><i>max of 20 images </i></p>
  <body>
</html>
<?php
}
else
{
  header('location:index.php');
}
