<?php
$file = 'highscore.txt';
$current = $_GET['highscore'];
$highscore = file_get_contents("highscore.txt");

if ($current > $highscore) {
	file_put_contents($file, $current);
}
?>