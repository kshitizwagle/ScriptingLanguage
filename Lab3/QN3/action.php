<?php

$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$valid = true;
if (empty($name) && empty($phone) && empty($email)) {
    echo "Empty form.<br>";
    $valid = false;
}

if (!preg_match("/^[a-zA-Z ]*$/", $name) and strlen($name) < 10) {
    echo "Invalid name.<br>";
    $valid = false;
}

if (!preg_match("/^[0-9]{10}$/", $phone) and strlen($phone) < 10) {
    echo "Invalid phone number.<br>";
    $valid = false;
}

if (!preg_match("/^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/", $email)) {
    echo "Invalid email.<br>";
    $valid = false;
}
if($valid) {
    echo "Form is valid.<br>";
    echo "Name: $name<br>";
    echo "Phone: $phone<br>";
    echo "Email: $email<br>";
}