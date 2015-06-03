<?php
include("lib/connect.php");
$name= $_REQUEST['event'];
$q= "SELECT * FROM event WHERE name LIKE $name";
$res= $mysqli->query($q);
$count= $res->num_rows;
if($count==1)
{
	$msg= "Event already created";
}
else
{
	$edate=date("Y-m-d h:i:s");
	$sql_con= "INSERT INTO event SET 
	`name`= '$name',
	`created_at`='".$pdate."';";
	$res= $mysqli->query($sql_con);
	if($res)
	{
		$msg="Event succesfully created";
	}
	else
		$msg="Event creation mailed";
	$jsonresp= json_encode($msg);
	echo $jsonresp;
}
?>