<?php
 session_start();
require 'db.php';
if (isset($_SESSION['userName'])) 
{
  $username=$_SESSION['userName'];
  
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Search results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<style>
	.image{
	width: 45px;
	height: 45px;
	
	border: 1px solid #211410;
	border-radius: 50%;}
	</style>
<body>
    
<table >
<?php
 
if(isset(mysqli_real_escape_string($conn,$_POST['newlocation']))
{
  ;
	$query =mysqli_real_escape_string($conn,$_POST['newlocation']);
	$min_length = 2;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length)
    { 
    // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysqli_real_escape_string($conn,$query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysqli_query($conn,"SELECT * FROM members
            WHERE (`name` LIKE '%".$query."%') ") or die(mysqli_error($raw_results));
          
         
        if(mysqli_num_rows($raw_results) > 0)
        {
         // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($raw_results))
            {
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
            	//each fan should be a link 
             ?>
             <a href="">

             <tr>
             <td width="50px" height="50px" ><img src="user_images/<?php echo $results['photo_id'];?>" class="image" /></td>
       <td><?php echo $results['name'];?></td>
             </tr>
     </a>
               <?php
                
            }
            ?>
            </table>
            <?php
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
}
else{
	?>
	<form action="" method="post">
        <input type="text" name="query" />
        <input type="submit" value="Search" />
    </form>
	<?php
}
    
    // gets value sent over search form
     
    
?>
</body>
</html>
<?php
  }
  else
  {
    header('Location:index.php');
  }
?>