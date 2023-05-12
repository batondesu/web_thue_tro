<?php 
session_start(); 
$conn = new mysqli("localhost", "root", "", "room_rent");

if (isset($_POST['password'])
    && isset($_POST['name']) ) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$pass = validate($_POST['password']);

	$name = validate($_POST['name']);

	$user_data = '&name='. $name;


	if(empty($name)){
        header("Location: login.php?error=Bạn chưa nhập tài khoản!&$user_data");
	    exit();
	}
	else if(empty($pass)){
        header("Location: login.php?error=Bạn chưa nhập mật khẩu!&$user_data");
	    exit();
	}

	else{

		// hashing the password
        //$pass = md5($pass);

	    $sql = " SELECT * FROM users WHERE account_name = '$name' AND password = '$pass' ";
		$result = $conn->query($sql);

		if (mysqli_num_rows($result) > 0) {
			$row = $result->fetch_assoc();
			$local = "index.php?user_id=";
			$local .= $row["user_id"];
			header("Location: $local");
	        exit();
		}else {
           	    header("Location: login.php?success=Tài khoản hoặc mật khẩu không đúng!!! ");
		}
	}
}else{
	header("Location: signup.php");
	exit();
}