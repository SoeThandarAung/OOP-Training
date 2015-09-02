<?php
	class User{
		public $email;
		public $password;
		public function login(){
			return 'Logging in';
		}
		public function logout(){
			return 'Logging out';
		}
	}