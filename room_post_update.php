<?php 
session_start(); 
$listcity=['An Giang','Bà rịa - Vũng tàu','Bạc Liêu','Bắc Kạn','Bắc Giang','Bắc Ninh','Bến Tre',
'Bình Dương','Bình Định','Bình Phước','Bình Thuận','Cà Mau','Cao Bằng','Cần Thơ', 'Đà Nẵng','Đắk Lắk','Đắk Nông',
'Đồng Nai','Đồng Tháp','Điện Biên','Gia Lai','Hà Giang','Hà Nam','Hà Nội','Hà Tĩnh','Hải Dương','Hải Phòng',
'Hòa Bình','Hậu Giang','Hưng Yên','Thành phố Hồ Chí Minh','Khánh Hòa','Kiên Giang','Kon Tum','Lai Châu','Lào Cai','Lạng Sơn','Lâm Đồng',
'Long An','Nam Định','Nghệ An','Ninh Bình','Ninh Thuận','Phú Thọ','Phú Yên','Quảng Bình','Quảng Nam','Quảng Ngãi',
'Quảng Ninh','Quảng Trị','Sóc Trăng','Sơn La','Tây Ninh','Thái Bình','Thái Nguyên','Thanh Hóa','Thừa Thiên - Huế','Tiền Giang',
'Trà Vinh','Tuyên Quang','Vĩnh Long','Vĩnh Phúc','Yên Bái'];
$conn = new mysqli("localhost", "root", "", "room_rent");

if (isset($_POST['title']) && isset($_POST['price']) && isset($_POST['size']) 
    && isset($_POST['calc_shipping_provinces']) && isset($_POST['calc_shipping_district']) && isset($_POST['ward'])
    && isset($_POST['note']) && isset($_POST['type']) && isset($_POST['image'])
    && isset($_POST['vid']) && isset($_POST['address'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

    $user_id = $_GET['user_id'];
    $title = validate($_POST['title']);
    $price = validate($_POST['price'])/1000000;
	$size = validate($_POST['size']);
    $city = validate($_POST['calc_shipping_provinces']);
    $district = validate($_POST['calc_shipping_district']);
    $ward = validate($_POST['ward']);
    $address = validate($_POST['address']);
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
    else if(empty($address)){
        header("Location: room_post.php?error=Bạn chưa nhập địa chỉ!&user_id=$user_id");
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
            $city = $city - 1;

            $sql2 = "INSERT INTO room_info(`room_id`,`title`,`status`,`price`,`size`
                                            ,`city`,`district`,`ward`,`note`,`type`,`last_update`,`address`,`status2`)
                        VALUES($max_id+1,'$title','Còn phòng','$price','$size'
                                            ,'$listcity[$city]','$district','$ward','$note','$type','$date','$address','no')";
            $result2 = $conn->query($sql2);
            if ($result2) {
                $sql3 = "INSERT INTO image_vid(`room_id`,`image`,`vid`)
                            VALUES($max_id+1,'$image','$vid')";
                $result3 = $conn->query($sql3);
                if ($result3) {
                    $sql4 = "INSERT INTO rental_room(`user_id`,`room_id`)
                                VALUES($user_id,$max_id+1)";
                    $result4 = $conn->query($sql4);
                    if ($result4) {
           	            header("Location: user's_room_post.php?success=Đăng bài thành công và đang đợi duyệt bài!!!&user_id=$user_id ");
	                    exit();
                    }
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