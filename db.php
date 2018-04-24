<?php
$conn=mysqli_connect("localhost","root","","pics");
//Check Connection
if(!$conn)
{
die("Connection Failed:".mysqli_connect_error());
}
?>