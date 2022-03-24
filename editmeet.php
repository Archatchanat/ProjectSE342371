<?php
	session_start();
	include('conn.php');
	
	$roomid=$_GET['roomid'];
	
	$id=$_POST['id'];
	$title=$_POST['title'];
	$head=$_POST['head'];
	$roomname=$_POST['roomname'];

	
	mysqli_query($conn,"update events set roomname='$roomname', location='$location' where id='$id'");
	header('location:addmeet.php');

?>