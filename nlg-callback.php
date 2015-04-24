<?php
include('core/init.core.php');

//header("Content-Type: application/json");

$event = "";
$bus_services = "";
$bus_services_directions="";
$problem = "";
$delay_size="";
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

if(isset($_POST['bus_services_directions']))
	$bus_services_directions=$_POST['bus_services_directions'];
$data['bus_services_directions']=$bus_services_directions;

if(isset($_POST['delay_size']))
	$delay_size=$_POST['delay_size'];
$data['delay_size']=$delay_size;

if(isset($_POST['problem']))
	$problem=$_POST['problem'];
$data['problem']=$problem;

if(isset($_POST['location']))
	$location=$_POST['location'];
$data['location']=$location;

if(isset($_POST['diversion_roads']))
	$diversion_roads=$_POST['diversion_roads'];
$data['diversion_roads']=$diversion_roads;

if(isset($_POST['duration']))
	$duration=$_POST['duration'];
$data['duration']=$duration;

if(isset($_POST['service_status']))
	$service_status=$_POST['service_status'];
$data['service_status']=$service_status;

//set the start timestamp
if($_POST['start_date_radio']==1 && isset($_POST['start_datetime'])){
	$start_datetime = $_POST['start_datetime'];

	$start_datetime = strtotime($start_datetime);

	//$formatted_date = date('H:i d-m-Y',$start_datetime);

	$data['start_time']=date('H', $start_datetime).":".date('i', $start_datetime);
	$data['start_date']=date('d', $start_datetime);
	$data['start_month']=date('F', $start_datetime);
	$data['start_year']=date('Y', $start_datetime);
}


if($_POST['end_date_radio']==1){
	$end_datetime = $_POST['end_datetime'];

	$end_datetime = strtotime($end_datetime);

	//$formatted_date = date('H:i d-m-Y',$end_datetime);

	$data['end_time']=date('H', $end_datetime).":".date('i', $end_datetime);
	$data['end_date']=date('d', $end_datetime);
	$data['end_month']=date('F', $end_datetime);
	$data['end_year']=date('Y', $end_datetime);
}

//var_dump($data['start_time'].' '. $data['start_date'].' '.$data['start_month'].' '.$data['start_year']);

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