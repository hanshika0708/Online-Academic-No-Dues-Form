<?php
session_start();
include('../config.php');

$table=$_GET['table'];
$id=$_GET['id'];
$url=$_GET['url'];

$query="DELETE FROM `$table` WHERE `id`= '$id' ";
$res=mysqli_query($conn,$query);

if($res)
{
	echo "<script>alert('Data Delete SuccessFully')</script>";
	
	   echo "<script>window.location.href=".$url.".php</script>";
	  
	 
}

else
{
	echo "<script>alert('Server Error')</script>";

echo "<script>window.location.href=".$url."</script>";
}


?>