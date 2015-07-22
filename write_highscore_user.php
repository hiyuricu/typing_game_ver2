<?php
$file = 'highscore.txt';
$file2 = 'highscore_user.txt';
$current = $_GET['highscore'];
$current_user = $_GET['challenger'];
$highscore = file_get_contents("highscore.txt");

if ($current > $highscore) {
	file_put_contents($file, $current);
	file_put_contents($file2, $current_user);
}
?>