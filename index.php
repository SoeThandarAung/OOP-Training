<?php
	require 'lesson2_user.php';
	$joost = new User();
	$joost->setPassword('1234lsddfd');
	var_dump($joost->getPassword());