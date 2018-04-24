<?php
session_start();
if(isset($_SESSION['userName']))
{
	$username=$_SESSION['userName'];
?>
<html>
<body>
	 <form method="post" action="private_upload.php?id=<?php echo $username?>"  enctype="multipart/form-data">
    <table align="center">
      <tr><td>name</td><td><input type="text" name="name" placeholder="name"/><td></tr>
        <tr> <td> image</td> <td> <input type="file" name="file" required/></td></tr>
        <tr> <td><button type="submit">upload</button></td></tr>
    </table>
  </form>
  <a href="view.php"><button type="submit">home</button></a>
</body>
</html>
<?php
}
else
{
	header('location:index.php');
}
