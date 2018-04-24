<!DOCTYPE HTML>
<html>
<head>
  <title> vertical head</title>
  <link rel="stylesheet" href="font-awesome.css">
<style type="text/css">

body{
	background-color:  #4A96AD;
	padding:0;
	margin:0;
}
.menu ul{ 
	list-style: none;
	margin:0;
	 }
	 .menu ul li{
	 	padding:15px;
	 	position:relative;
	 	width: 200px;
	 	background-color: #7D1935;
	 	border-top: 1px solid #BDC3C7;
	 }
	 .menu ul ul{
	 	transition:all 0.3s; 
	 	opacity:0;
	 	position: absolute;
	 	visibility: hidden;
	 	left:84%;
	 	top: -2%;
	 }
	 .menu ul li:hover > ul{
	 	opacity:1;
	 	visibility: visible;

     .i class {

     }
	 }
	 .menu ul li a{
	 	color:#fff;
	 	text-decoration: none;
	 }
	 .menu ul li ul li {
	 	color:#fff;
	 	text-decoration: none;
	 }
	 #search{
	 	width:200px;
	 	padding:7px;
	 	border: 1px solid ##2d6e84;
	 	vertical-align: right;
	 }
	 #submit {
	 	padding:7 px;
	 	background:#2d6e84; 
	 	border: 1 px solid #2d6e84;
	 	color:white ;
	 	margin-left: -5 px;
	 }
	 #search-box {
	 	float:left;
	 }
	 </style>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 </head>
<body> 
    
     <ul >
  <form  action="funs.php" method="post" target="funs">
        <input type="text" name="query" /  placeholder="Search..." maxlenght="15" id ="search">
        <input type="submit" value="Search" / id="submit">
    </form>
    </ul>
   
     

     <div class="menu">
     <ul>
         <li><a href="home.php?id=<?php echo $username ?>" target="center" ><i class="fa fa-home" style="font-size:19px;color:#4A96AD;"></i> </a></li>
         <li><a href="profile.php?id=<?php echo $username ?>" target="center" > <i class="fa fa-user-circle-o" style="font-size:19px;color:#4A96AD;"></i>PROFILE</a></li>
         <li><a href="albumlist.php?id=<?php echo $username ?>" target="center" ><i class="fa fa-file-image-o" style="font-size:19px;color:#4A96AD;"></i>  ALBUMS</a>
          <ul> 
          <li><a href="ADD.php?id=<?php echo $username ?>" target="center"></a> <i class="fa fa-plus" style="font-size:19px;color:#4A96AD; word-spacing: 10px;"></i> ADD</li> 
          <li><a href="EDIT.php?id=<?php echo $username ?>"></a> <i class="fa fa-pencil-square-o" style="font-size:19px;color:#4A96AD;"></i>EDIT</li> 
          <li><a href="DELETE.php "></a> <i class="fa fa-trash-o" style="font-size:19px;color:#4A96AD;"></i>DELETE</li> 
          </ul>
         </li>
         <li><a href="view private.php?id=<?php echo $username ?>" target="center"> <i class="fa fa-user-secret" style="font-size:19px;color:#4A96AD;"></i>PRIVATE</a></li>
         <li><a href="funs.php?id=<?php echo $username ?>" target="center" > <i class="fa fa-users" style="font-size:19px;color:#4A96AD;"></i>FANS</a></li>
         <li><a href="sharedpics.php?id=<?php echo $username ?>" target="center" > <i class="fa fa-share-alt" style="font-size:19px;color:#4A96AD;"></i>SHARED PICS</a></li >
     
     </ul>
       </div>
</body>
</html>
