<?php
	//require 'lesson2_user.php';
	
	require 'app/User.php';
	require 'app/Validator.php';
	require 'app/User.php';

	$rules = array('email' => 'required|email', 'password' =>'required|min:8');
	$data = array('email' => 'joost@tutsplus.com','password' =>'123456788');

	$validator = new Validator();
	$validator->validate($data,$rules)
	if ($validator->validate($data,$rules)) {
		// $joost = new User($string);
		// $joost->setEmail($data['email'])
		// ->setPassword(getHash($data['password']));
		// var_dump($joost);

		//Validation passed. Set user values.
		$joost = new User($data);

		$joost->email = 'someotheremail@tutsplus.com';
		//$joost->shoesize = '43';
		$joost->password ="saldsf";
		//Dump user
		//var_dump($joost->email);
		//var_dump($joost->password);
		echo $joost;
	}
	else{
		var_dump($validator->getEr);
	}