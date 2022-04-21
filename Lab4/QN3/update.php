<?php

$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$address = $_REQUEST['address'];
$email = $_REQUEST['email'];
echo $name."<br>".$address."<br>".$email."<br>";

$conn = new mysqli('localhost', 'test', 'test', 'school')
    or die("Couldn't connect to the database.");

$sql = "UPDATE Lab4 SET name='$name', address='$address', email='$email' WHERE id='$id'";
if ($conn->query($sql)) {
    echo "Record updated successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
}
