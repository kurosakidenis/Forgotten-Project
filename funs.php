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
color: black;
}
a:visited {
color: black;
}
a:hover {
color: black;
}
a:active {
color: black;
}
      .image{
      width: 45px;
      height: 45px;
      
      border: 1px solid #211410;
      
}
      </style>
            </head>
            <body >
      <?php
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
      if(isset($_POST['query']))
{
  
      $query = mysqli_real_escape_string($conn,$_POST['query']);
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
             <a href="view_profile.php?id=<?php echo $results['name'];?>">

             <tr>
             <td width="50px" height="50px" ><img src="user_images/<?php echo $results['photo_id'];?>" class="image" /></td>
       <td><?php echo $results['name'];?> <br/><br/></td>
             </tr></a>
               <?php
               $name=$results['name'];
               $query="SELECT `id`,`name`,`status` from $friends WHERE name='$name' ORDER BY id DESC ";
       $result1= mysqli_query($conn,$query);
                if(mysqli_num_rows($result1)<=0)
                {
                  ?>
                  <tr>
                        <td><a href="friendrq.php?id=<?php echo $name;?>" target="center" ><button>add</button></a></td>
                        <td><a href="view_profile.php?id=<?php echo $name;?>" target="center">
                        <button>view</button></a><br/></td>
                  </tr>
                  <?php
                  }
                  elseif(mysqli_num_rows($result1)>0)
                  {
                      ?>
                  <tr>
                        <td><a href="view_profile.php?id=<?php echo $name;?>" target="center"><button>view</button></a></td>
                        <td><button>delete</button><br/></td>
                  </tr>
                  <?php   
                  }
                  else{
                    echo "person doesnot exist";
                  }
                
            }
            ?>
            </table>
            <?php
             
        }
        else{ // if there is no matching rows do following
            echo "No results <br/><br/>";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length." characters <br/><br/>";
    }
}
else{
  $query="SELECT `id`,`name`,`status` from $friends WHERE status=1 ORDER BY id DESC ";
       $result= mysqli_query($conn,$query);
       if($result==false)
       {
        die(mysql_error());
       }
       if(mysqli_num_rows($result)>0)
       {
        ?>
           
            <table align="center">
            <?php
        while ($rows= mysqli_fetch_array($result) )
        {
                  extract($rows);
                  //fix errors
                  ?>
          
          <tr align="center">

       <td><a href="view_profile.php?id=<?php echo $rows['name'] ;?>" target="center"><?php echo $rows['name']."";?></a></td>
          </tr><?php
        }?>
        </table>
            <?php
       }
       else
       {
        echo"you have no fans yet";

       }
      
     
      
} 
    

       
}
else
{
	header('location:index.php');
}
?>
</body>
</html>