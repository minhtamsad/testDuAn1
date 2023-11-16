
<form action="" method="post">
      <div class="sign-in-htm">
				<div class="group">
					<label for="pass" class="label">ib</label>
					<input id="pass" name ="ib" type="text" class="input" data-type="ib">
				</div>
				<div class="group">
					<input type="submit" class="button" name="btns"  value ="Xác nhận">
				</div>	
			</div>
      </form>
<?php


// Data to be sent to Node.js server
$ib = $_POST['ib'];
$data = array(
    'username' => 'JohnDoe',
    'message' => $ib
);

// Convert data to JSON format
$jsonData = json_encode($data);

// Node.js server URL
$nodeServerUrl = 'http://localhost:3000';

// Initialize cURL session
$ch = curl_init($nodeServerUrl);

// Set cURL options
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session and get the response
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Display the response from Node.js server
echo $response;
// echo $response;
$objects = json_decode($response);
// echo $array;
echo $object->message;
?>

