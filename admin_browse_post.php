<?php 
session_start(); 
    $conn = new mysqli("localhost", "root", "", "room_rent");
    $room_id = $_GET['room_id'];
    $user_id = $_GET['user_id'];
            $sql = "UPDATE room_info
                    SET `status2` = 'yes'
                    WHERE `room_id` = $room_id";
            $result = $conn->query($sql);
            if ($result) {
           	    header("Location: admin_browse.php?success=Duyệt thành công!!!&user_id=$user_id ");
	            exit();
            }else {
	           	header("Location: admin_browse.php?error=Xảy ra lỗi không xác định!!!&user_id=$user_id");
		        exit();
            }
?>