<?php 
session_start(); 
    $conn = new mysqli("localhost", "root", "", "room_rent");
    $room_id = $_GET['room_id'];
    $user_id = $_GET['user_id'];
            
            $sql2 = "DELETE FROM `rental_room` WHERE room_id=$room_id";
            $sql3 = "DELETE FROM `image_vid` WHERE room_id=$room_id";
            $sql = "DELETE FROM `room_info` WHERE room_id=$room_id";
            $result2 = $conn->query($sql2);
            $result3 = $conn->query($sql3);
            $result = $conn->query($sql);
            if ($result3 && $result2 && $result) {
           	    header("Location: admin_browse.php?success=Xóa thành công!!!&user_id=$user_id ");
	            exit();
            }else {
	           	header("Location: admin_browse.php?error=Xảy ra lỗi không xác định!!!&user_id=$user_id");
		        exit();
            }
?>