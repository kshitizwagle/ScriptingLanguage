<?php

$conn = new mysqli('localhost', 'test', 'test', 'school')
    or die("Couldn't connect to the database.");
$sql = 'SELECT * FROM Info';
$res = $conn->query($sql);
$i = 1;
while ($row = $res->fetch_assoc()) {
    echo $i.'<br>';
    foreach ($row as $key => $value) {
        echo $key . ': ' . $value . '<br>';
    }
    echo "<br>";
    $i++;
}
