<?php
$file = 'logdata.txt';
$current .= $_GET['name'];
file_put_contents($file, $current, FILE_APPEND | LOCK_EX);
?>