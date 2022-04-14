<?php
$file = fopen("test.txt", "w") or die("Unable to open file!");
fwrite($file, "Hello\nWorld");
fclose($file);
