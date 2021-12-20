<?php 

	if (!empty($_POST['remember'])) {
		setcookie("username", $_POST['username'], time()+10);
		setcookie("password", $_POST['pwd'], time()+10);
		
	}else{
		setcookie("username", "");
		setcookie("pwd", "");
	}

 ?>