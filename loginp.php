<?php
session_start();
require 'db.php';
$username=mysqli_real_escape_string ( $conn, $_POST [ 'username' ]);
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
	
	header('location:frame.php?id=$username');	
}
else 
{
 echo "Your Login Name or Password is invalid" ;
}
?>