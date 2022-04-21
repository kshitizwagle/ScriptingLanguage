<?php

$id = $_REQUEST['id'];

$conn = new mysqli('localhost', 'test', 'test', 'school')
    or die("Couldn't connect to the database.");
$sql = "DELETE FROM Lab4 WHERE id = '$id'";
if($conn->query($sql)){
    echo "Deleted successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
}