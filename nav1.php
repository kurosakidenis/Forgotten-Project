<?php
session_start();
require 'db.php';
if (isset($_SESSION['userName'])) {
  $username=$_SESSION['userName'];
  ?>
<!DOCTYPE>
<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <style type="text/css">
  .vertical-menu {
    width: 100%; /* Set a width if you like */
}


.vertical-menu a {
    background-color: #eee; /* Grey background color */
    color: black; /* Black text color */
    display: block; /* Make the links appear below each other */
    text-align: left;
    
    padding: 12px; /* Add some padding */
     /* Remove underline from links */
}

.vertical-menu a:hover {
    background-color: #111; /* Dark grey background on mouse-over */
}

.vertical-menu a.active {
    background-color: #4CAF50; /* Add a green color to the "active/current" link */
    color: white;
}
 ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
  #navbar{
    width:100%;
    height: 29px;
    background-color: #2d6e84;


  }

 
  .data{
    height: 100%;
  }
 


  </style>

</head>
<body>


   <div class="vertical-menu">
   <ul>
     <li><a href="home.php?id=<?php echo $username ?>" target="center" >HOME</a></li>
     <li><a href="albumlist.php?id=<?php echo $username ?>" target="center" >ALBUMS</a></li>
     <li><a href="view private.php?id=<?php echo $username ?>" target="center" >PRIVATE</a></li>
     <li><a href="funs.php?id=<?php echo $username ?>" target="center" >FANS</a></li>
     <li><a href="sharedpics.php?id=<?php echo $username ?>" target="center" >SHARED PICS</a></li>
     <li><a href="" target="center" id="linkref">ALBUMS</a></li>
     <li><a href="profile.php?id=<?php echo $username ?>" target="center" >PROFILE</a></li>
     <li><a href="delpic.php?id=<?php echo $username ?>" target="center" >DELETE PIC</a></li>
     <li><a href="deleteal.php?id=<?php echo $username ?>" target="center" >DELETE ALBUM</a></li>
     <li><a href="delprivate.php?id=<?php echo $username ?>" target="center" >DELETE PRIVATE</a></li>
   </ul>
</div> 


</body>
</html>
<?php
  }
  else
  {
    header('Location:index.php');
  }
?>