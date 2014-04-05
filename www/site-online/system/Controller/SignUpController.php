<?php
	class  SignUpController {
		private $conn;
		function __construct($conn){
			$this->conn = $conn;
		}
		function isEmailTaken($new_email){
			$sql = "SELECT * FROM `users` WHERE `email` = '".$new_email."'";
			$res = mysql_query($sql, $this->connection);
			if (!$res) throw new Exception("Database access failed: " . mysql_error());
			$rows = mysql_num_rows($res);
			if ($rows>0)
				return false;
			else
				return true;
		}
		
		function addNewUser($user){
			foreach ($user as $key => $val) {
				$user[$key] = mysql_real_escape_string($val);
			}
			$sql = "INSERT INTO `users` VALUES ( ".$user->name." , ".$user->email." , ".$user->password." , ".$user->birthday." , ".$user->`address1`." , ".$user->`address2." , ".$user->city." , ".$user->zip." , ".$user->state." , ".$user->country." , ".$user->user_type." , ".$user->profile_picture." )";
			$res = mysql_query($sql,$this->conn);
			if (!$res) throw new Exception("Database access failed: " . mysql_error());
			return true;
		}
		
	}
?>
		
		