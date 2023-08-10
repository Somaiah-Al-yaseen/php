<?php
// API endpoint URL
$apiUrl = 'https://jsonplaceholder.typicode.com/posts';

// Initialize cURL session
$ch = curl_init($apiUrl);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response instead of outputting it
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); // Set the content type to JSON
$response = curl_exec($ch); // Execute the cURL session
curl_close($ch); // Close the cURL session

// Decode the JSON response
$data = json_decode($response, true);

// Check if the request was successful
if ($data) {
    foreach ($data as $post) {
        echo "Title: " . $post['title'] . "<br>";
        echo "Body: " . $post['body'] . "<br><br>";
    }
} else {
    echo "Error fetching data from the API.";
}
?>
