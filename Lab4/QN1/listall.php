<?php

$conn = new mysqli('localhost', 'test', 'test', 'school')
    or die("Couldn't connect to the database.");
$sql = 'SELECT * FROM lab4';
$res = $conn->query($sql);
while ($row = $res->fetch_assoc()) {
    foreach ($row as $key => $value) {
        echo $key . ': ' . $value . '<br>';
    }
    echo "<br>";
}
