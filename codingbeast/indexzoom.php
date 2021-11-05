<?php
include('configzoom.php');
include('api.php');
$arr['topic']='Meet with Doctor';
$arr['start_date']=date('2021-10-16 00:22:30');
$arr['duration']=30;
$arr['password']='vha';
$arr['type']='2';
$result=createMeeting($arr);
if(isset($result->id)){
	// echo "Join URL: <a href='".$result->join_url."'>".$result->join_url."</a><br/>";
	// echo "Password: ".$result->password."<br/>";
	// echo "Start Time: ".$result->start_time."<br/>";
	// echo "Duration: ".$result->duration."<br/>";
	$rp1="$result->join_url";
}else{
	echo '<pre>';
	print_r($result);
}
?>