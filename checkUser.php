<?php
session_start();

// Kiểm tra xem phiên làm việc đã được thiết lập và người dùng đã đăng nhập hay chưa
if (isset($_SESSION['user_id'])) {
    // Người dùng đã đăng nhập
    echo "Đã đăng nhập";
} else {
    // Người dùng chưa đăng nhập
    echo "Chưa đăng nhập";
}
?>