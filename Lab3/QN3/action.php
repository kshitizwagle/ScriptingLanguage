<?php

if (!preg_match("/[a-zA-Z ]$/", $_REQUEST['name'])) {
    header('Location: index.php?error=name');
}

if (!preg_match("/[0-9]{10}/", $_REQUEST['phone'])) {
    header('Location: index.php?error=phone');
}

if (!preg_match("/\S+@\S+\.\S+/", $_REQUEST['email'])) {
    header('Location: index.php?error=email');
}

echo "Form is valid.<br>";