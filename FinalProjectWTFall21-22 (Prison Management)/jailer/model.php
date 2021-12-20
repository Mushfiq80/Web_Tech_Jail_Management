<?php 
	function emptyInputLogin($username, $pwd){
		$result;
		if (empty($username) || empty($pwd)) {
			
			$result = true;
		}
		else{
			$result = false;
		}
		return $result;
	}
	
	function unameExists($conn, $username){
		$sql = "SELECT * FROM users where usersName = ?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("location:../login.php?error=stmtfailed");
			exit();
		}

		mysqli_stmt_bind_param($stmt, "s", $username);
		mysqli_stmt_execute($stmt);

		$resultData = mysqli_stmt_get_result($stmt);

		if ($row = mysqli_fetch_assoc($resultData)){
			return $row;
		}
		else{
			$result = false;
			return $result;
		}
		mysqli_stmt_close($stmt);
	}

	
	
	function loginUser($conn, $username, $pwd){
	 	$unameExists = unameExists($conn, $username);

	 	if ($unameExists === false) {
	 		header("location: ../Homepage.php");
	 		exit();
	 	}
	 	

	 	$pwdHashed = $unameExists["usersPwd"];
	 	$checkPwd = password_verify($pwd, $pwdHashed);
	 		
	 	if ($checkPwd === false) {
	 		header("location:../Homepage.php");
	 		exit();
	 	}
	 	else if($checkPwd === true){
	 		session_start();
	 	 $_SESSION["userid"] = $unameExists[userId];
	 	 $_SESSION["username"] = $unameExists[usersName];
	 	 header("location:../Homepage.php");
	 	 exit();
	 	}
	 }