<?php
	//require 'lesson2_user.php';
	
	require 'app/User.php';
	require 'app/Validator.php';
	require 'app/User.php';

	$joost = new User();
	$joost->setPassword('1234lsddfd');
	
	// var_dump($joost->getPassword());
	// $mike = $joost;
	// $mike->setEmail('mike@tutsplus.com');

	$mike = clone $joost;
	$mike->setEmail('mike@tutsplus.com');
	$joost->setEmail('joost@tutsplus.com');


	var_dump($joost);
	echo '<br>';
	var_dump($mike);
	echo '<br/>';