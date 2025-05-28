<?php
// Example associative array
$associativeArray = array(
    "name" => "John Doe",
    "email" => "john.doe@example.com",
    "age" => 30,
    "address" => array(
        "street" => "123 Main St",
        "city" => "New York",
        "zipcode" => "10001"
    )
);

// Convert the associative array to a JSON string
$jsonString = json_encode($associativeArray, JSON_PRETTY_PRINT);  // JSON_PRETTY_PRINT makes the output more readable
echo "JSON String:\n";
echo $jsonString . "\n\n";

// Convert the JSON string back to an associative array
$decodedArray = json_decode($jsonString, true);  // 'true' to return an associative array

echo "Decoded Associative Array:\n";
print_r($decodedArray);
?>
