<?php 
        //$room_id = $_GET['name'];
        $room_id = 3;
        $conn = new mysqli("localhost", "root", "", "room_rent");
        $sql = "SELECT r.*,i.image, u.* FROM room_info r
                JOIN image_vid i ON i.room_id = r.room_id
                JOIN rental_room rr ON rr.room_id = r.room_id
                JOIN users u ON u.user_id = rr.user_id
                WHERE r.room_id = $room_id" ;

        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        $image_url = $row["image"];
        $list_image = [];
        $dem = 0;

        $image_url .= " ";
        $image = "";
        for ($i = 0 ; $i < strlen($image_url); ++$i) {
            if ( substr($image, -4) == ".jpg" ) {
                $list_image[++$dem] = $image;
                $image = "";
                }
            else {
                $image .= $image_url[$i];
            }
        }
        $jsonArray = json_encode($list_image);
        $jsonNumber = json_encode($dem);
        
        echo $image_url."<br/>".$jsonNumber ;
    ?>