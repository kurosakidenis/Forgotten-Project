<?php
session_start();
require 'db.php';
if(isset($_SESSION['userName']))
{
	?>
	<html>
<link rel="shortcut icon" href="image\story254.JPG"/>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">  
<link rel="stylesheet" href="css/reset.css">

<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css'>
</head>
<body>
 <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(http://fonts.googleapis.com/css?family=Gudea);

body{
	font-family: Gudea;
  
}

label i[class^='icon-'] , label i[class*='icon-']{
	display: block;
	padding: 14px 0;
}

a:hover i[class^='icon-'] , a:hover i[class*='icon-']{
	color : #837D7D;
}

.container{
	
	margin: 40px auto;
	position: relative;
	border: 1px solid #CFCFCF;
	overflow: hidden;
	background-color: #fff;
	border-radius: 7px;
}

.badboy{
	width: 0;
	height: 0;
	clear: both;
}

.bg-image{
	
	height: 157px;
	
	position: relative;
	border-bottom: 1px solid #38393A;
}


}

h3 {
	display: block;
	position: absolute;
	text-shadow : 0 -1px 2px #000;
	left: 10px;
	top: 14px;
	font-size : 16px;
	color : #F9F7F6;
	font-weight: normal;
}

.followe{
	background : -webkit-linear-gradient(rgb(112, 114, 119) 14%, rgb(101, 98, 98) 37%, rgb(80, 80, 81) 62%, rgb(65, 68, 67) 83%);
	background : -moz-linear-gradient(rgb(112, 114, 119) 14%, rgb(101, 98, 98) 37%, rgb(80, 80, 81) 62%, rgb(65, 68, 67) 83%);
	border-bottom: 1px solid #18191A;
}

.followe li{
	float: left;
  width: 201px;
	box-sizing : border-box;
	-moz-box-sizing : border-box;
}

.followe li:nth-child(1){
	border-right: 1px solid #2D3234;
}

.followe a{
	display: block;
	padding : 10px 0;
	text-decoration: none;
	color: #F5F5F5;
}

.followe span{
	display: block;
	text-align: center;
}

span#number{
	font-size: 20px;
	text-shadow: 0 -1px 2px #000;
}

span#followe{
	text-shadow: 0 -1px 2px #000;
	font-size: 15px;
}

.image{
	width: 120px;
	height: 120px;
	position: absolute;
	background: #F7F9F9;
	border: 1px solid #211410;
	top: 89px;
	left: 140px;
	border-radius: 50%;
}

label{
	display: inline-block;
	width:  33%;
	height: 52px;
	text-align: center;
	margin: 0 -2px;
	text-decoration: none;
	color : #9B9E8D;
	font-size: 22px;
	box-shadow: 0 2px 3px 0px #D8D7D7;
	position: relative;
	background: #fff;
	z-index: 1;
	-webkit-transition : all .25s ease;
	-moz-transition : all .25s ease;
}

label:hover{
	color: #767968;
}



.all{
	width: 1208px;
}

.chat{
	float: left;
	position: relative;
	width: 100%;
}

.chat .show-message{
	background : -webkit-linear-gradient(rgb(242, 242, 243) 15%, rgb(240, 243, 241) 36%, rgb(241, 240, 241) 58%, rgb(236, 236, 236) 100%);
	background : -moz-linear-gradient(rgb(242, 242, 243) 15%, rgb(240, 243, 241) 36%, rgb(241, 240, 241) 58%, rgb(236, 236, 236) 100%);
	border-bottom: 1px solid #D3D3D3;
	padding-bottom: 30px;
}

.chat .type-text{
	background : -webkit-linear-gradient(rgb(251, 251, 254) 18%, rgb(250, 251, 253) 51%, rgb(251, 251, 252) 78%);
	background : -moz-linear-gradient(rgb(251, 251, 254) 18%, rgb(250, 251, 253) 51%, rgb(251, 251, 252) 78%);
	padding-bottom: 13px;
}

input[type='text']{
	border: 1px solid #CED3D9;
	margin: 13px 0 0 28px;
	padding: 10px;
	outline: 0;
	border-radius: 5px;
	width: 235px;
	color : #A0A0A0;
}

button[type='submit']{
	-webkit-appearance: none;
	-moz-appearance: none;
	background: -webkit-linear-gradient(rgb(32, 199, 127) 21%, rgb(30, 180, 115) 52%, rgb(28, 160, 101) 79%);
	background: -moz-linear-gradient(rgb(32, 199, 127) 21%, rgb(30, 180, 115) 52%, rgb(28, 160, 101) 79%);
	background: -ms-linear-gradient(rgb(32, 199, 127) 21%, rgb(30, 180, 115) 52%, rgb(28, 160, 101) 79%);
	box-shadow: inset 0 0 2px 1px #DDD7D7;
	border: 1px solid #A0A0A0;
	padding: 2px 22px 10px 20px;
	margin: 0px 0 0 25px;
	border-radius: 4px;
}

button[type='submit']:hover{
	cursor: pointer;
}

button[type='submit']:hover #i{
	color : #fff;
}

.friend{	
	float: left;
	margin: 30px 0 0 15px;
}

.me{
	float: right;
	margin : 20px 15px 0 0;
}

.friend img , .me img{
	border-radius: 2px;
} 

.friend img{
	float: left;
	margin: 10px 0 0 7px;
}

.me img{
	float: right;
	margin: 10px 7px 0 ;
}

.friend .message{
	border : 1px solid #E2E2E2;
	margin: 2px 0 0 55px;
	padding: 10px;
	background: #FDFCF5;
	border-radius: 6px;
	width: 180px;
	position: relative;
}

.me .message{
	border: 1px solid #BFE3EE;
	margin: 2px 51px 0 0;
	padding: 10px;
	background: #DCEAF7;
	border-radius: 6px;
	position: relative;
	width: 160px;
}

.friend p , .me p{
	font-size: 14px;
}

.me p{
	color : #6AA0F0;
}

.friend p{
	color : #AEB0A4;
}

#i{
	font-size: 25px;
	color: #E8E8E8;
	display: block;
	margin-top: 4px;
	-webkit-transition : all .25s ease;
	-moz-transition : all .25s ease;
}

label:hover{
	cursor: pointer;
}

input[type='radio']{
	display: none;
}

input[type='radio']:checked + label{
	color: #767968;
}

input[type='radio']#one:checked ~ .all{
	margin-left: 0px;
	-webkit-transition : all .5s ease-in-out;
	-moz-transition : all .5s ease-in-out;
}

.Description , .Link{
	width:100%;
	height:282px;
	float:left;
	padding: 10px 0;
	background : -webkit-linear-gradient(rgb(242, 242, 243) 15%, rgb(240, 243, 241) 36%, rgb(241, 240, 241) 58%, rgb(236, 236, 236) 81%);
	background : -moz-linear-gradient(rgb(242, 242, 243) 15%, rgb(240, 243, 241) 36%, rgb(241, 240, 241) 58%, rgb(236, 236, 236) 81%);
}

.Description  p {
	margin : 60px 0;
	text-align: center;
	line-height: 30px;
	color: #535252;
	font-size: 18px;
}

input[type='radio']#two:checked  ~  .all{
	margin-left: -403px;
	-webkit-transition : all .5s ease-in-out;
	-moz-transition : all .5s ease-in-out;
}

input[type='radio']#two:checked ~  .all:before{
	left: 183px;
}

input[type='radio']#three:checked  ~  .all{
	margin-left: -805px;
	-webkit-transition : all .5s ease-in-out;
	-moz-transition : all .5s ease-in-out;
}

input[type='radio']#three:checked ~  .all:before{
	left: 319px;
}

.menu{
	width: 100%;
	height: inherit;
	margin: 0 auto ;
}

ul{
	width: inherit;
	height: inherit;
	list-style: none;
}

.menu li{
	width: inherit;
	border-bottom : 1px solid rgb(235, 235, 235);
}

.menu li:nth-child(1){
	margin-top: 67px;
}

.menu li:last-child{
	border-bottom: 0;
}

.Link a{
	display: block;
	padding: 8px 15px;
	text-decoration: none;
	color : #4B4E43;
	font-size: 18px;
	text-align: center;
	text-shadow : 0 0 2px #4F5144;
	opacity: .7;
}

.Link a:hover{
	text-shadow : 0 0 0;
	opacity: 1;
}
    </style>
<style>
	.image1{
  	width: 120px;
	height: 120px;
 	border-radius: 50%;
			}
			.pics{
   width: 149px;
  height: 105px;
  }
			.friend_image{
  	width: 45px;
	height: 45px;
 	border-radius: 50%;
			}
      a {
		font-family: Verdana, sans-serif;
		text-decoration: none;
		}
      a:link {
		color: blue;
			}
a:visited {
		color: blue;
		}
a:hover {
		color: blue;
		}
a:active {
		color: blue;
		}
</style>


<?php 
$username=$_SESSION['userName'];

if(isset($_SESSION['userName']))
{

	$mimi=$_GET['id'];
     $yeye="albums";
      $jana=$mimi.$yeye;
      $lini="pals";
      $friends=$mimi.$lini;
      $wewe="storyyako";
      $sisi=$mimi.$wewe;
      $james="SELECT photo_id,name FROM members WHERE name='$mimi'";
      $sql=mysqli_query($conn,$james);
      while ($row=mysqli_fetch_array($sql)) {
            extract($row);
            ?>
     
<div class="container">

		<div class="bg-image">
		
			<h3><?php echo $mimi;?></h3>
			
		</div>

			<div class='followe'>
				<ul>
					<li>
						<span id='number'></span>
						<span id='followe'></span>
					</li>
					<li>
						<span id='number'></span>
						<span id='followe'></span>
					</li>
					
				</ul>
			</div>

		<div class="image"><img src="user_images/<?php echo $row['photo_id'];?>" class="image1"></div>

		<input type="radio" id='one' name='contorol' checked value="posts" /> 
		<label for="one">Pics<i class='icon-comments-alt'></i></label>
		<input type="radio" id='two' name='contorol' value="Readers" />
		<label for="two">albums<i class='icon-link'></i></label>
		<input type="radio" id='three' name='contorol' value="Reading" /> 
		<label for="three">fans<i class='icon-user'></i></label>
		
<div class="all">
		<div class="chat">
			<div class="show-message">
				<?php
				$pics_query="SELECT pic_id,userPic FROM $sisi ORDER BY pic_id DESC";
				$pics_result=mysqli_query($conn,$pics_query);

				if($pics_result==false)
       				{
       					die(mysql_error());
       				}
       			if(mysqli_num_rows($pics_result)>0)
      				 {
       	
       					while ($query1= mysqli_fetch_array($pics_result) )
       				{
                  extract($query1);
                  ?>
                  <img src="uploaded_images/<?php echo $query1['userPic']; ?>" class="pics"/>
                  <?php
              		}
          			}
          			else{
          				echo "user has no pics yet";
          			}
                  ?>
				
			</div>
			
		</div>

		<div name="album_pics" class="Description">
		<?php
			$album_query="SELECT album_id,userPic,pic_no,album_name FROM $jana ORDER BY album_id DESC";
			$album_result=mysqli_query($conn,$album_query);
			  if($album_result==false)
       {
       	die(mysql_error());
       }
       if(mysqli_num_rows($album_result)>0)
       {
       	
       	while ($rows= mysqli_fetch_array($result) )
       	{
                  extract($rows);
                  ?>
                  		<tr>
       <td><a href="#" target="album_pics"><?php echo $rows['album_name']."\t \t \t (".$rows['pic_no'].")";?></a></td>
       		</tr>
       		<?php
              }
          }
          else{
          	echo "no albums yst to display";
          }
			?>
		</div>

		<div class="Link">
			<div class="menu">
				<?php
				$fan_query="SELECT id,status,name,`userPic` FROM $friends WHERE status=1 ORDER BY id DESC";
				$fan_result=mysqli_query($conn,$fan_query);
				if(mysqli_num_rows($fan_result)>0)
       {
       	
       	while ($query= mysqli_fetch_array($result) )
       	{
                  extract($query);
                  ?>
                  <a href="view_profile.php?id=<?php echo $results['name'];?>">

             <tr>
             <td width="50px" height="50px" ><img src="user_images/<?php echo $results['userpic'];?>" class="friend_image" /></td>
       <td><?php echo $results['name'];?> <br/><br/></td>
             </tr></a>
				<?php
			}
		}
		else{
			echo "the user has no fans yet";
		}
				?>
			</div>
		</div>

		<div class="badboy"></div>
	</div>
</div>
    
    
    
    
    
  </body>
</html>


       <?php

      }
      ?>
</table>

</body>
</html>
<?php
mysqli_free_result($sql);
}
  }
else
{
	header('location:index.php');
}
?>