<?php

$name = $_REQUEST['name'];
$address = $_REQUEST['address'];
$email = $_REQUEST['email'];

$conn = new mysqli('localhost', 'test', 'test', 'school') or
    die("Couldn't connect to the database.");

$sql = "CREATE TABLE IF NOT EXISTS Lab4(
        id int(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        name varchar(255) NOT NULL,
        address varchar(255) NOT NULL,
        email varchar(255) NOT NULL
    )";

if ($conn->query($sql)) {
    echo "Table created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

$sql = "INSERT INTO Lab4(name, address, email) 
        VALUES('$name', '$address', '$email')";
if ($conn->query($sql)) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
}
