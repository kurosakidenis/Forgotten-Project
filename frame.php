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
<style type="text/css">
 

#lowleft{
   width: 10%;
   height:100%;
   background:;
   float: left; 
   border: 0;
}


#center{
   width: 90%;
   height: 100%;
   background:url(../image/img/2book.jpg);
   position: relative;
   float: left;
   border:0;
   overflow-y:hidden;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Main page</title>
  
 
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
<iframe src="nav1.php?id=<?php echo $username ?>" scrolling="no" id="lowleft" name="header"></iframe>

<iframe src="home.php?id=<?php echo $username ?>"  id="center" name="center" scrolling="auto"> </iframe>

</div>
</body>
</html>

<?php
}
else
{
  header('location:index.php');
}?>