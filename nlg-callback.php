<?php
include('core/init.core.php');

//header("Content-Type: application/json");

$event = "";
$bus_services = "";
$problem = "";
$location = "";
$diversion_road = "";
$duration = "";
$service_status = "";
$start_time = "";
$start_date = "";
$start_month = "";
$start_year = "";
$end_time = "";
$end_date = "";
$end_month = "";
$end_year = "";

if(isset($_POST['event']))
	$event=$_POST['event'];

if(isset($_POST['bus_services']))
	$bus_services=$_POST['bus_services'];

if(isset($_POST['problem']))
	$problem=$_POST['problem'];

if(isset($_POST['location']))
	$location=$_POST['location'];

if(isset($_POST['diversion_road']))
	$diversion_road=$_POST['diversion_road'];

if(isset($_POST['duration']))
	$duration=$_POST['duration'];

if(isset($_POST['service_status']))
	$service_status=$_POST['service_status'];

if(isset($_POST['start_time']))
	$start_time=$_POST['start_time'];

if(isset($_POST['start_date']))
	$start_date=$_POST['start_date'];

if(isset($_POST['start_month']))
	$start_month=$_POST['start_month'];

if(isset($_POST['start_year']))
	$start_year=$_POST['start_year'];

if(isset($_POST['end_time']))
	$end_time=$_POST['end_time'];

if(isset($_POST['end_date']))
	$end_date=$_POST['end_date'];

if(isset($_POST['end_month']))
	$end_month=$_POST['end_month'];

if(isset($_POST['end_year']))
	$end_year=$_POST['end_year'];


http_response_code(200);
echo json_encode($event);
?>