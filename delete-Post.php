<?php
session_start();
include "config.php";
if(!isset($_SESSION["username"])){
  header("Location: logIn.php");
} else if($_SESSION["user_type"]==0) {
  header("Location: user/home.php");
}
$content_id=$_GET['id'];
//$cat_id=$_GET['catid'];
$sql1="SELECT * FROM contents WHERE content_id={$content_id};";
$result=mysqli_query($conn,$sql1) or die("Query Failed :select");
$row=mysqli_fetch_assoc($result);
unlink("img/".$row['img']);     //use delete file from folder


$sql="DELETE FROM contents WHERE content_id={$content_id};";

if(mysqli_multi_query($conn,$sql)){
	header("Location: admin-managePost.php");
}else{
	echo "Cannot Delete";
}

?>