<?php
	session_start();
    require 'dbconfig/config.php';
	$a=$_GET['id'];
	$b=$_SESSION['username'];
	$query1="Update request SET status=1,recycler_id='$b' where req_id=$a";
	$res=mysqli_query($con,$query1);
	echo "<script>window.close()</script>";
?>