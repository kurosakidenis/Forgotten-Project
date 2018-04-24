<?php
session_start();
require 'db.php';
$username=$_SESSION['userName'];

if(isset($_SESSION['userName']))
{
	$mimi=$username;
      $vids=$mimi."vid_entry";
	?>
	<!DOCTYPE html>
<html>
<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
</style>
<body>


	<div id='box'>
    	<?php
			$video= $_GET['video'];
		?>
        <video id="my_video_1" class="video-js vjs-default-skin" controls data-setup="{}" preload="auto" width="100%" height="450" poster="my_video_poster.png">
        
  		<source src="videos/<?php echo $video; ?>" type='video/mp4'>
		</video>

		<script type="text/javascript">
          function myScript() {
            console.log;
          }
        </script>
        <div id='back'>
        <a href="vids.php">Back</a>
        </div>
	</div>
<?php
mysqli_close($con);
?>
    </div>
</body>
</html>
	<?php
}
else
{
	header('location:index.php');
}
?>