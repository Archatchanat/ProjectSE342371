<?php
	
	include('conn.php');
	
	$roomid=$_GET['id'];
	
	$title=$_POST['title'];
	$head=$_POST['head'];
	$numattend=$_POST['numattend'];
	$listname=$_POST['listname'];
	$roomid=$_POST['roomid'];
	$start=$_POST['start'];
	$end=$_POST['end'];
	$addequipment=$_POST['addequipment'];
	$remark=$_POST['remark'];

	
	mysqli_query($conn,"update events set title='$title',head='$head', numattend='$numattend', listname='$listname', roomid='$roomid',  start='$start', end='$end',
	addequipment='$addequipment', remark='$remark' where id='$id'");
	header('location:addmeet.php');

?>