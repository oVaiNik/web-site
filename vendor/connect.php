<?php
	header('Content-Type: text/html; charset=utf-8');
	$connect = mysqli_connect("localhost", "root", "", "sait");

	if (!$connect){
		die ("Ошибка подключени");
	}
?>
