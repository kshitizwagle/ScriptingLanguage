<?php

$conn = new mysqli('localhost', 'test', 'test', 'school')
    or die("Couldn't connect to the database.");
$sql = 'SELECT * FROM Lab4';
$res = $conn->query($sql);
while ($row = $res->fetch_assoc()) {
    foreach ($row as $key => $value) {
        echo $value." ";
    }
    echo "<br>";
}
