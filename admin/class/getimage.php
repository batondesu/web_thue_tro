<?php
// Kết nối đến CSDL
$conn = new mysqli("localhost", "root", "", "room_rent");

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Truy vấn CSDL để lấy chuỗi cần lấy
$sql = "SELECT image FROM image_vid WHERE room_id = 3";
$result = $conn->query($sql);

// Lấy kết quả truy vấn
if ($result->num_rows > 0) {
    // Lấy dữ liệu từ bản ghi đầu tiên
    $row = $result->fetch_assoc();
    $image = $row["image"];
    echo $image;
} else {
    echo "0 results";
}

// Đóng kết nối
$conn->close();
?>