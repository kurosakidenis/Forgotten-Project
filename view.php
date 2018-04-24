<?php 
session_start();
require 'db.php';
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
?>
	<html>
  <Head>
  <style type="text/css" media="screen">
    #internal{
      width:200px;
      height:100px;
      overflow: auto;
      background: #999999;

    }
  </style>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Main page</title>
	<link rel="stylesheet" type="text/css" href="css/page.css">
 
</head>
<body>
<script type="text/javascript" src="JS/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
function refresh(){
  setTimeout(function()){
    $('#auto').fadeout('slow').load('view.php').fadeIn('slow');
    refresh();
  },20000);
}
</script>

<div id="auto">
<iframe src="nav2.php?id=<?php echo $username ?>" scrolling="no" id="upleft" name="header"></iframe>
<iframe src="first.php?id=<?php echo $username ?>"  id="lowleft" name="left">
</iframe>
</iframe>
<iframe src="home.php?id=<?php echo $username ?>"  id="center" name="center" scrolling="yes"> </iframe>
<iframe src="funs.php?id=<?php echo $username ?>" id="funs" name="funs" scrolling="auto" ></iframe>
<iframe src="viewalbums.php?id=<?php echo $username ?>" id="lowcenter" name="right">
</iframe>
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