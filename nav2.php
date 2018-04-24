<?php
session_start();
require 'db.php';
if (isset($_SESSION['userName'])) {
  $username=$_SESSION['userName'];
  ?>
<!DOCTYPE HTML>
<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <style type="text/css">

  .navbar{
    width: 100%;
    height: 10%;
    background-color: #2d6e84;
    border: 0;
  }

  
  .link{
       width: 49.5%;
    height: 10%;
    background-color: #2d6e84;
     border: 0;
  }
  
  .data{

   width: 50%;
    height: 10%;
    background-color: #2d6e84;
     border: 0;
  }

  </style>

</head>
<body>
  
<div class="navbar" >
<iframe src="left.php" scrolling="no" class="link"></iframe> 
  
<iframe src="right.php"  scrolling="no" class="data" ></iframe>
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