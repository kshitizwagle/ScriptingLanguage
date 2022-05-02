<?php
function write($text) {
    $file = fopen("test.txt", "a+") or die("Unable to open file!");
    fwrite($file, $text);
    fclose($file);
}

function read() {
    $file = fopen("test.txt", "r") or die("Unable to open file!");
    $line = fread($file, filesize("test.txt"));
    fclose($file);
    return $line;
}

write("Hello World!<br>");
write("Hello From PHP!<br>");
echo read();