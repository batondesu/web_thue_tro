<?php $conn = new mysqli("localhost", "root", "", "room_rent");
        $sql = "SELECT r.*,i.image, (r.price / r.size) AS abc FROM `room_info` r
            LEFT JOIN image_vid i
            ON i.room_id=r.room_id
            ORDER BY abc
            LIMIT 8" ;
        $result = $conn->query($sql);
    ?>