<?php
	class User{
		private $email;
		private $password;
		const MINCHARS = 8;
		public function login(){
			return 'Logging in';
		}
		public function logout(){
			return 'Logging out';
		}
		public function setPassword($string){
			if($this->validatePassword($string)== false){
				throw new Exception('The password should be at least' .self::MINCHARS.'character logn');
			}
			$this->password = hash('sha256',$string);
		}
		public function getPassword(){
			return $this->password;
		}
		public function set(){
			if(!filter_var($trsing, FILTER_VALIDATE_EMAIL)){
				throw new Exception('Please Provide a valid email');
			}
			$this->email = $string
		}
		public function getEmail(){
			return $this->email;
		}
		private function validatePassword($string){
			return strlen($string) < self::MINCHAR ? false:true;
		}
	}