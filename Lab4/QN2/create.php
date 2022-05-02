<?php

$name = $_REQUEST['name'];
$address = $_REQUEST['address'];
$email = $_REQUEST['email'];

$conn = new mysqli('localhost', 'test', 'test', 'school') or
    die("Couldn't connect to the database.");

$sql = "INSERT INTO Lab4(name, address, email) 
        VALUES('$name', '$address', '$email')";
if ($conn->query($sql)) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
}
