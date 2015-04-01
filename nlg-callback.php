<?php
include('core/init.core.php');

//header("Content-Type: application/json");

$event = $_POST['event'];

http_response_code(200);
echo json_encode($event);
?>