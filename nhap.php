<?php
    $user_id = $_GET['user_id'];
    $room_id = $_GET['name'];

    $conn = new mysqli("localhost", "root", "", "room_rent");
    $sql = "SELECT * FROM room_booking WHERE user_id = $user_id AND room_id = $room_id";
    $result = $conn->query($sql);
    
    if ( $result->num_rows == 0 ) {
        $sql = "INSERT INTO room_booking (user_id, room_id)
                VALUES ($user_id, $room_id)";
        $result = $conn->query($sql);
        echo "Lưu Thành Công";
    } else {
        $sql = "DELETE FROM room_booking
                WHERE user_id = $user_id AND room_id = $room_id";
        $result = $conn->query($sql);
        echo "Bỏ Lưu";
    }
?>