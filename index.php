<?php

$method = $_SERVER['REQUEST_METHOD'];

// Process only when method is POST
if ($method == "POST") {
    $requestBody = file_get_contents('php://input');
    $json = json_decode($requestBody);

    $date_time = $json->result->parameters->date_time;
    $address = $json->result->parameters->address;
    $unit = $json->result->parameters->unit;
	$speech = "Entraste al webhook y el clima para $date_time en $address para $unit no lo se";
	$response = new \stdClass   ();
	
    $response-> speech = "HOLA";
    $response-> displayText= "";
    $response-> source ="webhook";
	echo json_encode($response);
	

}
else{
    echo "Method no allowed";
}
?>