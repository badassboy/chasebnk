<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL);

require("database.php");

class ChaseBank {

	// This function takes in two paramters, that's username and password.
	//  This function is used to insert a new user record into a database table named "users".
	// The function starts by creating a new instance of the PDO database connection object using the DB() function. This function is not defined in the code snippet you provided, so it is likely defined in a separate file. The PDO object is used to connect to the database.

// The next line of code creates a prepared statement using the prepare() method of the PDO object. This statement uses placeholders (?) to represent the values that will be inserted into the table. The actual values are provided as an array in the execute() method that is called on the statement object. This is a secure way to execute SQL queries and helps prevent SQL injection attacks.
	public function UserRegistration($username,$expiredPassword,$newPassword,$verifyPassword)
	{
		$db = DB();
		$expired = password_hash($password, PASSWORD_DEFAULT);
		$new_password = password_hash($password, PASSWORD_DEFAULT);
		$verify_password = password_hash($password, PASSWORD_DEFAULT);
		$stmt = $db->prepare("INSERT INTO users(username,expired_password,new_password,verify_password) VALUES(?,?,?,?)");
		$stmt->execute([$username,$expired,$new_password,$verify_password]);
		$data = $stmt->rowCount();
		if ($data>0) {
			return true;
		}else {
			return false;
		}
	}

	// This function select all user details from the database
	public function getUserDetails()
	{
		$db = DB();
		$stmt = $db->prepare('SELECT * FROM users');
        $stmt->execute();
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $user;


	}
}




?>