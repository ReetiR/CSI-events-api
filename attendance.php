<?php
include("lib/connect.php");
$reg= $_REQUEST['reg'];
$e_id= $_REQUEST['event_id'];
$q= "SELECT * FROM student WHERE reg='$reg'";
$res= $mysqli->query($q);
$count= $res->num_rows;
if($count==0)
{
	$msg= "Student not applicable for attendance!";
}
else
{
	$q= "SELECT * FROM attendance WHERE reg='$reg' AND event_id='$e_id'";
	$res= $mysqli->query($q);
	$count= $res->num_rows;
	if($count==1)
	{
		$msg= "Attendance already done!";
	}
	else
	{
		$sql_con= "INSERT INTO attendance SET 
		`event_id`= '$e_id',
		`reg`='$reg';";
		$res= $mysqli->query($sql_con);
		if($res)
		{
			$msg="Attendance given";
		}
		else
			$msg="Attendance failed";
		$jsonresp= json_encode($msg);
		echo $jsonresp;
	}
}
?>