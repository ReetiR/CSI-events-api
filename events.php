<?php
include("lib/connect.php");
$q= "SELECT * FROM event";
$res= $mysqli->query($q);
$i= 0;
while($data= $res->fetch_array())
{
	$event[$i][name]= $data['name'];
	$event[$i][id]= $data['id'];
	$i++;
}
$finalJson= json_encode($event);
echo $finalJson;
?>