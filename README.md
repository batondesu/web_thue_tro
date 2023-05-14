# WEBSITE Tìm phòng trọ
## IDE/Compiler 
 Visual Studio Code
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

## Website
  ### Giới thiệu
    Web Thuê Trọ - trang thông tin truy cập và trao đổi thông tin về dịch vụ thuê, cho thuê phòng trọ
    Tìm kiếm và đăng bài nhanh chóng hiệu quả
  ### Chức năng
    Hiển thị danh sách các thể loại phòng trọ, nhà nguyên căn, trọ ở ghép theo nhiều tiêu chí
    Tìm kiếm/lọc/sắp xếp danh sách theo địa điểm, giá tiền,...
    Đăng ký, đăng nhập, danh sách đã lưu, danh sách đăng, cập nhật thông tin người dùng
    Giao diện thông tin chi tiết phòng, trao đổi thông tin giữa 2 bên
    Admin có quyền duyệt, xóa bài  
## Hoạt động
  ### Admin
    Account: abcdemlabaton
    Password: abcxyz
  ### User
    #### Người thuê
      Đăng ký, đăng nhập tài khoản
      Truy cập thông tin phòng, lựa chọn phòng, lưu bài viết, chủ động liên hệ trao đổi thông tin
    #### Chủ trọ
      Đăng ký, đăng nhập tài khoản
      Đăng thông tin phòng trọ, chờ phê duyệt, nhận yêu cầu từ phía người thuê
  
