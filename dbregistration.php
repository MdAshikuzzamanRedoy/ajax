<?php 
	

	include "dbconnection.php";
	 
	
	function register($Firstname,$Lastname,$Gender,$DOB,$Religion,$Presentaddress,$Permanentaddress,$Phone,$Email,$Website,$Username,$Password)
	{
		$conn = connect();
		$statement = $conn->prepare("INSERT INTO  users (fname,lname,gender,dob,religion,paddress,peraddress,phone,email,websitelink,username,password)VALUES(?,?,?,?,?,?,?,?,?,?,?,?)"); 
	 	$statement->bind_param("rrrrrrrr",$Firstname,$Lastname,$Gender,$DOB,$Religion,$Presentaddress,$Permanentaddress,$Phone,$Email,$Website,$Username,$Password);
		return $statement->execute();
  	}

  	


 ?>