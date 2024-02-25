<?php
// Get the raw POST data
$data = file_get_contents('php://input');

// Decode JSON data if it's JSON
$jsonData = json_decode($data, true);

// Check if decoding was successful
if ($jsonData !== null) {
    // Echo the decoded data
    echo "Received JSON data:\n";
    print_r($jsonData);
} else {
    // Echo the raw data if not JSON
    echo "Received data:\n";
    echo $data;
}
?>
