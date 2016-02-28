<?php
class strongpass {

	public function check($password) {
		$response = "OK";

		// Check password length is at least 8 characters
		if(strlen($password) < 8) {
			$response = "Password must be at least 8 characters";
			// check if password contains letters, by seeing if it is_numeric.
		}	else if(is_numeric($password)) {
			$response = "Password must contain at least one letter";
			// check if password doesn't contains a number
		} else if(!preg_match('#[0-9]#', $password)) {
			$response = "Password must contain at least one number";
			// check if password doesn't contain a lowercase character
		} else if(!preg_match("/[a-z]/",$password)) {
			echo 'hello';
			$response = "Passsword contains no Lowercase characters";
			// check if password doesn't contain an Uppercase character
		} else if(!preg_match("/[A-Z]/",$password)) {
			echo 'hello';
			$response = "Passsword contains no Uppercase characters";
			// check if password doesn't contain a special character
		} else if(!preg_match("/[^\da-zA-Z]/",$password)) {
			echo 'hello';
			$response = "Passsword contains no Special characters";
		}


		return $response;
	}

}

?>