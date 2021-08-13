<?php 
	 include "dbconnection.php";

	 function getAllUsers()
	 {
 		$conn = connect(); 
 		$statement = $conn->prepare("SELECT * FROM users");
		$statement->execute(); 
		$records = $statement->get_result();

		return $records->fetch_all(MYSQLI_ASSOC); 
	} 

	function getUser($username)
	 {
 		$conn = connect(); 
 		$statement = $conn->prepare("SELECT * FROM users WHERE username = ?");
 		$statement->bind_param("s", $username);
		$statement->execute(); 
		$records = $statement->get_result();

		return $records->fetch_all(MYSQLI_ASSOC); 
	} 

 ?>