<?php
session_start();
if (isset($_SESSION['userName'])) 
{
	?>
	<!DOCTYPE html>
	<html>
	<head>
	<script src="https://code.jquery.com/jquery-3.2.1.js"
			  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
			  crossorigin="anonymous"></script>
		<script type="text/javascript">
		$(document).ready(function jumpPage(newLoc)
		{
			newPage=newLoc.options[newLoc.selectedIndex].value
				if (newPage !="" && newPage.length <= 2) 
				{
					window.location=newPage
				}
		})
		
		</script>
	</head>
	<body onload="document.myform.newlocation.selectedIndex=0">
	<table align="left">
		<tr>
			<form action="search.php" name="myform">
				<select name="newlocation" onchange="jumpPage(this)">
					 <option value="" target="funs">
				</select>
			</form>
		</tr>
	</table>
	
	
	</body>
	</html>
	<?php
} else {
	# code...
	header('location:index.php');
}
?>