<?php

$method = $_SERVER['REQUEST_METHOD'];

// Process only when method is POST
if ($method == "POST") {
    $requestBody = file_get_contents('php://input');
    $json = json_decode($requestBody);

    $date_time = $json->result->parameters->date_time;
    
    $speech = $date_time;
	$response = new \stdClass();
    $response->speech = "";
    $response->displayText= "";
    $response->source = "webhook";
	echo json_encode($response);
	

}
else{
    echo "Method no allowed";
}
?>