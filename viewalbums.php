<?php
session_start();
require 'db.php';
if(isset($_SESSION['userName']))
{
      ?>
            <!DOCTYPE html>
            <html>
            <head>
                   <style type="text/css">
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
                   </style>
                   <script type="text/javascript">
function refresh() {
  $('album').load('viewalbums.php');
}
</script>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
            </head>
            <body>
            <div id="album">
            <table align="center">
            <?php
  $username=$_SESSION['userName'];
$mimi=$username;
      $yeye="albums";
      $jana=$mimi.$yeye;
      $wewe="storyyako";
      $sisi=$mimi.$wewe;
      $leo="private";
      $kesho=$mimi.$leo;
       $query="SELECT album_id,album_name,pic_no from $jana ORDER BY album_id DESC ";
       $result= mysqli_query($conn,$query);
       if($result==false)
       {
       	die(mysql_error());
       }
       if(mysqli_num_rows($result)>0)
       {
       	
       	while ($rows= mysqli_fetch_array($result) )
       	{
                  extract($rows);
                  ?>
       		
       		<tr>
       <td><a href="albumpics.php?id=<?php echo $rows['album_name'] ;?>" target="center"><?php echo $rows['album_name']."\t \t \t (".$rows['pic_no'].")";?></a></td>
       		</tr><?php
       	}?>
       	</table>
            </div>
            <?php
       }
       else
       {
       	echo"this is where your albums will be ";

       }
}
else
{
	header('location:index.php');
}
?>
</body>
</html>