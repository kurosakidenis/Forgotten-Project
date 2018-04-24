<?php
session_start();
require 'db.php';
function isMobile() {
    return preg_match("/(android|webos|avantgo|iphone|ipad|ipod|blackbe‌​rry|iemobile|bolt|bo‌​ost|cricket|docomo|f‌​one|hiptop|mini|oper‌​a mini|kitkat|mobi|palm|phone|pie|tablet|up\.browser|up\.link|‌​webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
$username=mysqli_real_escape_string ( $conn, $_POST [ 'uname' ]);
$password = mysqli_real_escape_string ( $conn, $_POST [ 'password' ]);

      $algo='6';
      $rounds='5000';
      $CryptSalt='$'.$algo.'$rounds='.$rounds.'$';
      $hashedpassword=crypt($password,$CryptSalt);
      $sql=" SELECT name,password FROM members where name='$username' and password= '$hashedpassword';";
      $result = mysqli_query ( $conn ,$sql );
$row = mysqli_fetch_array ( $result );
$count = mysqli_num_rows ($result);
if ($count == 1) 
{
	$_SESSION['userName'] = $username;
	if(isMobile()===true )
	{
	header('location:frame.php?id=$username');	
	}
	else
	{
		header ('location:view.php?id=$username');
	}

}
else 
{
 echo "Your Login Name or Password is invalid" ;
}
?>