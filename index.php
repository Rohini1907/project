<?php

$method = $_SERVER['REQUEST_METHOD'];

if($method == "POST"){
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);

	$text = $json->result->parameters->text;

	switch ($text) {
		case 'Assam':
			$speech = "32 Million";
			break;

		case 'Delhi':
			$speech = "27 Million";
			break;

		case 'Goa':
			$speech = "2 Million";
			break;

		case 'Karnataka':
			$speech = "62 Million";
			break;

		case 'Rajasthan':
			$speech = "68 Million";
			break;
		
		default:
		    $speech = "Sorry, I don't get that.please ask me something else."
            break;
	}

	$response = new \stdClass();
	$response->speech = "";
	$response->displayText = "";
	$response->source = "ffinclusion";
	echo json_encode($response);

}else
{
	echo "Method not allowed";
}



?>
