<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL);

require("database.php");

class ChaseBank {
	public function UserRegistration($username,$password)
	{
		$db = DB();
		// $hashed = password_hash($password, PASSWORD_DEFAULT);
		$stmt = $db->prepare("INSERT INTO users(username,password) VALUES(?,?)");
		$stmt->execute([$username,$password]);
		$data = $stmt->rowCount();
		if ($data>0) {
			return true;
		}else {
			return false;
		}
	}
}


?>