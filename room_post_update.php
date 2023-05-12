<?php 
session_start(); 
$conn = new mysqli("localhost", "root", "", "room_rent");

if (isset($_POST['title']) && isset($_POST['price']) && isset($_POST['size']) 
    && isset($_POST['city']) && isset($_POST['district']) && isset($_POST['ward'])
    && isset($_POST['note']) && isset($_POST['type']) && isset($_POST['image'])
    && isset($_POST['vid'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

    $title = validate($_POST['title']);
    $price = validate($_POST['price'])/1000000;
	$size = validate($_POST['size']);
    $city = validate($_POST['city']);
    $district = validate($_POST['district']);
    $ward = validate($_POST['ward']);
    $note = validate($_POST['note']);
    $type = validate($_POST['type']);
    $image = validate($_POST['image']);
    $vid = validate($_POST['vid']);



	if(empty($title)){
        header("Location: room_post.php?error=Bạn chưa nhập tiêu đề phòng!&user_id=$user_id");
	    exit();
	}
	else if(empty($price)){
        header("Location: room_post.php?error=Bạn chưa nhập giá!&user_id=$user_id");
	    exit();
	}
    else if(empty($size)){
        header("Location: room_post.php?error=Bạn chưa nhập diện tích!&user_id=$user_id");
	    exit();
	}
    else if(empty($city)){
        header("Location: room_post.php?error=Bạn chưa nhập tỉnh, thành phố!&user_id=$user_id");
	    exit();
	}
    else if(empty($district)){
        header("Location: room_post.php?error=Bạn chưa nhập quận, huyện!&user_id=$user_id");
	    exit();
	}
    else if(empty($ward)){
        header("Location: room_post.php?error=Bạn chưa nhập xã, phường!&user_id=$user_id");
	    exit();
	}
    else if(empty($type)){
        header("Location: room_post.php?error=Bạn chưa nhập kiểu phòng!&user_id=$user_id");
	    exit();
	}
    else if(empty($image)){
        header("Location: room_post.php?error=Bạn chưa đăng ảnh!&user_id=$user_id");
	    exit();
	}

	else{

		// hashing the password
        //$pass = md5($pass);
            $sql = "SELECT MAX(room_id) AS max_id FROM `room_info`";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $max_id = $row["max_id"];
            $date = date("Y-m-d");

            $sql2 = "INSERT INTO room_info(`room_id`,`title`,`status`,`price`,`size`
                                            ,`city`,`district`,`ward`,`note`,`type`,`last_update`)
                        VALUES($max_id+1,'$title','Còn phòng','$price','$size'
                                            ,'$city','$district','$ward','$note','$type','$date')";
            $result2 = $conn->query($sql2);
            if ($result2) {
                $sql3 = "INSERT INTO image_vid(`room_id`,`image`,`vid`)
                            VALUES($max_id+1,'$image','$vid')";
                $result3 = $conn->query($sql3);
                if ($result3) {
           	    header("Location: room_post.php?success=Đăng bài thành công!!! ");
	            exit();
                }
            }else {
	           	header("Location: room_post.php?error=Xảy ra lỗi không xác định!!! &$user_data");
		        exit();
            }
	}
	
}else{
	header("Location: room_post.php");
	exit();
}