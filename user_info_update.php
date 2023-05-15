<?php 
session_start(); 
$conn = new mysqli("localhost", "root", "", "room_rent");

if (isset($_POST['name']) && isset($_POST['account_name']) && isset($_POST['password']) 
    && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['address'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

    $user_id = $_GET['user_id'];
	$name = validate($_POST['name']);
    $account_name = validate($_POST['account_name']);
    $password = validate($_POST['password']);
    $email = validate($_POST['email']);
    $phone = validate($_POST['phone']);
    $address = validate($_POST['address']);



	if(empty($name)){
        header("Location: user_info_edit.php?error=Bạn chưa nhập tài khoản!&user_id=$user_id");
	    exit();
	}
	else if(empty($password)){
        header("Location: user_info_edit.php?error=Bạn chưa nhập mật khẩu!&user_id=$user_id");
	    exit();
	}

	else{
        $sql2 = " SELECT * FROM users WHERE user_id != $user_id AND account_name = '$name' ";
		$result2 = $conn->query($sql2);
		$sql4 = " SELECT * FROM users WHERE user_id != $user_id AND email = '$email' ";
		$result4 = $conn->query($sql4);
		$sql5 = " SELECT * FROM users WHERE user_id != $user_id AND tel = '$phone' ";
		$result5= $conn->query($sql5);

		if (mysqli_num_rows($result2) > 0) {
			header("Location: user_info_edit.php?error=Tài khoản đã tồn tại!!!&user_id=$user_id");
	        exit();
		} else if (mysqli_num_rows($result4) > 0) {
			header("Location: user_info_edit.php?error=Email đã tồn tại!!!&user_id=$user_id");
	        exit();
		} else if (mysqli_num_rows($result5) > 0) {
			header("Location: user_info_edit.php?error=Số điện thoại đã tồn tại!!!&user_id=$user_id");
	        exit();
		} else {

		// hashing the password
        //$pass = md5($pass);

            $sql = "UPDATE users
                    SET `User_name` = '$name',
                        `account_name` = '$account_name',
                        `password` = '$password',
                        `email` = '$email',
                        `tel` = '$phone',
                        `address` = '$address'
                    WHERE `user_id` = $user_id";
            $result = $conn->query($sql);
            if ($result) {
           	    header("Location: user_info.php?success=Chỉnh sửa thành công!!!&user_id=$user_id ");
	            exit();
            }else {
	           	header("Location: user_info_edit.php?error=Xảy ra lỗi không xác định!!!&user_id=$user_id");
		        exit();
            }
        }
	}
	
}else{
	header("Location: user_info_edit.php");
	exit();
}