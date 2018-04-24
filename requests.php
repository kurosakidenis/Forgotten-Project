<?php
session_start();
$conn=mysqli_connect("localhost","root","","pics");
//Check Connection
if(!$conn)
{
die("Connection Failed:".mysqli_connect_error());
}
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
      $shared="shared";
      $sh_albums="shrdal";
      $lini="pals";
      $friends=$mimi.$lini;
      $shared_pics=$mimi.$shared;
      $shared_albums=$mimi.$sh_albums;
	?>
	 <!DOCTYPE html>
            <html>
            <head>
      
                   <style type="text/css">
   
      .image{
      width: 45px;
      height: 45px;
      
      border: 1px solid #211410;
      
}
      </style>
            </head>
	<?php
	
	$query="SELECT `id`,`name`,`userPic`,`status` from $friends WHERE status=0 ORDER BY id DESC ";
       $result= mysqli_query($conn,$query);
       
       if(mysqli_num_rows($result)>0)
       {
        ?>
           <body>
            <table align=" center">
            <?php
        while ($rows= mysqli_fetch_array($result) )
        {
                  extract($rows);
                  //fix errors
                  ?>
          <a href="view_profile.php?id=<?php echo $rows['name'];?>">

             <tr>
             	<td width="50px" height="50px" >
             		<img src="user_images/<?php echo $rows['userPic'];?>" class="image" /></td>
       			<td>
       		<?php echo $rows['name'];?> <br/><br/></td>
             </tr>
             	</a>
          	<tr>
               <td>
               		<a href="friendrq.php?id=<?php echo $name;?>" target="center" >
               		<button>add</button>
               		</a>
             </td>
               	<td>
                   <a href="view_profile.php?id=<?php echo $name;?>" target="center">
                    <button>view</button>
                    </a>
                    <br/>
                </td>
             </tr>

          <?php
        }
        ?>
        </table>
        </body>
        </html>
            <?php
       }
       else
       {
       	echo"no unanswerd requests";
       }
       
   }
   else
   {
   	header('location:index.php');
   }
?>