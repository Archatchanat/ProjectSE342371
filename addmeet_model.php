<?php
	session_start();
	include('conn.php');
	
	$title=$_POST['title'];
	$head=$_POST['head'];

	$numattend=$_POST['numattend'];
	$listname=$_POST['listname'];
	$roomid=$_POST['roomid'];
	$start=$_POST['start'];
	$end=$_POST['end'];
	$addequipment=$_POST['addequipment'];
	$remark = $_POST['remark'];


	
	$sql = "INSERT INTO meeting(title,head,numattend,listname,roomid,start,end,addequipment,remark) VALUES ('$title','$head',$numattend,'$listname',$roomid,'$start','$end','$addequipment','$remark')";
	mysqli_query($conn,$sql);
	header('location:addmeet.php');


?>