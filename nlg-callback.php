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

$data = array();

if(isset($_POST['event']))
	$event=$_POST['event'];
$data['event']=$event;

if(isset($_POST['bus_services']))
	$bus_services=$_POST['bus_services'];
$data['bus_services']=$bus_services;

if(isset($_POST['problem']))
	$problem=$_POST['problem'];
$data['problem']=$problem;

if(isset($_POST['location']))
	$location=$_POST['location'];
$data['location']=$location;

if(isset($_POST['diversion_road']))
	$diversion_road=$_POST['diversion_road'];
$data['diversion_road']=$diversion_road;

if(isset($_POST['duration']))
	$duration=$_POST['duration'];
$data['duration']=$duration;

if(isset($_POST['service_status']))
	$service_status=$_POST['service_status'];
$data['service_status']=$service_status;

if(isset($_POST['start_time']))
	$start_time=$_POST['start_time'];
$data['start_time']=$start_time;

if(isset($_POST['start_date']))
	$start_date=$_POST['start_date'];
$data['start_date']=$start_date;

if(isset($_POST['start_month']))
	$start_month=$_POST['start_month'];
$data['start_month']=$start_month;

if(isset($_POST['start_year']))
	$start_year=$_POST['start_year'];
$data['start_year']=$start_year;

if(isset($_POST['end_time']))
	$end_time=$_POST['end_time'];
$data['end_time']=$end_time;

if(isset($_POST['end_date']))
	$end_date=$_POST['end_date'];
$data['end_date']=$end_date;

if(isset($_POST['end_month']))
	$end_month=$_POST['end_month'];
$data['end_month']=$end_month;

if(isset($_POST['end_year']))
	$end_year=$_POST['end_year'];
$data['end_year']=$end_year;


makeCall($data);
http_response_code(200);

?>
<?php
function makeCall($data){

$data = json_encode($data);

//Check if the form variables were submitted:
$url = APIURL;

//Encode data array as JSON:
//Create the headers:
$headers = array("Content-Type: application/json");

//$data 	 = json_encode($dataArr);

//Create the REST call:
$response  = rest_post($url,$data,$headers);

echo $response;
}
?>