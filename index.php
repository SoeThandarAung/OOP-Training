<?php
	require 'lesson2_user.php';
	$joost = new User();
	$joost->email = "joost@tutsplus.com";
	$joost->password = "ghv7%Lsv7";

	$nick = new User();
	$nick->email = "nick@gmail.com";
	$nick->password="nick";
	var_dump($nick->login());