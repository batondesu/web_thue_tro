<?php 
session_start(); 
$conn = new mysqli("localhost", "root", "", "room_rent");

if (isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['nhaplaipassword'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['nhaplaipassword']);
	$name = validate($_POST['name']);

	$user_data = '&name='. $name;


	if(empty($name)){
        header("Location: signup.php?error=Bạn chưa nhập tài khoản!&$user_data");
	    exit();
	}
	else if(empty($pass)){
        header("Location: signup.php?error=Bạn chưa nhập mật khẩu!&$user_data");
	    exit();
	}

	else if(empty($re_pass)){
        header("Location: signup.php?error=Bạn chưa nhập lại mật khẩu!&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: signup.php?error=Mật khẩu nhập lại không khớp! &$user_data");
	    exit();
	}

	else{

		// hashing the password
        //$pass = md5($pass);

	    $sql = " SELECT * FROM users WHERE account_name = '$name' ";
		$result = $conn->query($sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=Tài khoản đã tồn tại!!!&$user_data");
	        exit();
		}else {
            $sql3 = "SELECT MAX(user_id) AS max_id FROM `users`";
            $result3 = $conn->query($sql3);
            $row = $result3->fetch_assoc();
            $max_id = $row["max_id"];

            $sql2 = "INSERT INTO users(user_id,account_name,password) VALUES($max_id+1,'$name','$pass')";
            $result2 = $conn->query($sql2);
            if ($result2) {
           	    header("Location: signup.php?success=Tài khoản của bạn đã tạo thành công!!! ");
	            exit();
            }else {
	           	header("Location: signup.php?error=Xảy ra lỗi không xác định!!! &$user_data");
		        exit();
            }
		}
	}
}else{
	header("Location: signup.php");
	exit();
}