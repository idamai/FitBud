<?php
	class User {
		public $name;
		public $email;
		public $password;
		public $birthday;
		public $address1;
		public $address2;
		public $city;
		public $zip;
		public $state;
		public $country;
		public $user_type;
		
		function __construct(){
			
		}
		//Takes in $user array from JSON Object
		function __construct($user){
			$this->name = $user->name;
			$this->email = $user->email;
			$this->password = $user->password;
			$this->birthday = $user->birthday;
			$this->address1 = $user->address1;
			$this->address2 = $user->address2;
			$this->city = $user->city;
			$this->zip = $user->zip;
			$this->state = $user->state;
			$this->country = $user->country;
			$this->user_type = $user->user_type;		
		}
	}
?>