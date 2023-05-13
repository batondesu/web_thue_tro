# WEBSITE Tìm phòng trọ

## Thành viên:
* Phạm Xuân Trường
* Trần Bá Toản
* Nguyễn Viết Tú
* Đoàn Mạnh Dương

### Hướng dẫn cài đặt:

Clone và giải nén (hoặc chuyển) code vào thư mục htdocs (đối với Xampp hay Apache) hoặc www (đối với Wampp, nginx, docker).  
Truy cập `phpmyadmin`, tạo database `room_rent` và import dữ liệu từ file `room_rent.sql` trong thư mục `Database` để tạo bảng dữ liệu.  
Cấu hình các thông số kết nối SQL trong file `admin`/`config.php` cho phù hợp:  

define("DB_HOST", "localhost");  
define("DB_USER", "root");  
define("DB_PASS", "");  
define("DB_NAME", "room_rent");   
  
Gõ đường dẫn sau để chạy ứng dụng web:  
http://localhost/web_thue_tro  
(Nếu thư mực lưu trong `xampp\htdocs` được đặt tên khác thì đường dẫn: http://localhost/("Folder_name"))