<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'db_aldo';

$dbkonek = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if($dbkonek->connect_error){
    die('server bermasalah');
}

$monitoring_sensor = mysqli_query($dbkonek, "select * from tbmonitoring");
$monitoring_data = mysqli_fetch_array($monitoring_sensor);
$current1 = $monitoring_data["current1"];
$current2 = $monitoring_data["current2"];
$current3 = $monitoring_data["current3"];
$current4 = $monitoring_data["current4"];
$current5 = $monitoring_data["current5"];
$current6 = $monitoring_data["current6"];
$current7 = $monitoring_data["current7"];
$current8 = $monitoring_data["current8"];
$current9 = $monitoring_data["current9"];
$current10 = $monitoring_data["current10"];

?>