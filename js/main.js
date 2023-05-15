function addHeader() {
    document.write(`        
	<div class="header">
        <div class="container">
            <div class="container-inner full">
                <div class="logo">
                    <a href="index.html">
                        <img src="images/logo.jpg" alt="Trang chủ" title="Trang chủ">
                    </a>
                </div> 
                <!-- End Logo -->

                <div class="menu">
                    <ul class="nav-top">
                        <li><a href="search.html"> PHÒNG TRỌ</a></li>
                        <li><a href="search.html"> NHÀ NGUYÊN CĂN</a></li>
                        <li><a href="search.html"> TRỌ GHÉP</a></li>
                        <li><a href="lease.html"> CHO THUÊ</a></li>
                    </ul> 
                </div> 
                <!-- End Menu -->

                <div class="box-user">
                    <ul class="nav-user">
                        <li class="signup">
                            <a class="dangky" href="signup.php"> ĐĂNG KÝ</a>
                        </li>
                        <li class="login">
                            <a class="dangnhap" href="login.php"> ĐĂNG NHẬP</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div> 
    <!-- End Header -->
    `)
}

function addList() {
    document.write(`        
	<div class="main-content">
        <div class="head-box">
            
            <div class="gioithieu">
                <h1> TRANG THÔNG TIN TÌM VÀ CHO THUÊ PHÒNG TRỌ NHANH CHÓNG HIỆU QUẢ </h1>
            </div>
            <div class="listarea"> 
                <div class="list-box">
                <img src="images/CG.jpg">    
                <a href="search.php"> Cầu Giấy </a>
                </div>

                <div class="list-box">
                <img src="images/DD.jpg">
                <a href="search.php"> Đống Đa </a>   
                </div>

                <div class="list-box">
                <img src="images/TX.jpg">
                <a href="search.php"> Thanh Xuân </a>   
               

                </div>
            </div>
            
        </div>
    </div>

       
    `)
}


function addFooter() {
 document.write(`
    <footer id="footer" class="show">
        <div class="footer-info">
            <div class="container">
                <div class="inner">
                    <a class="footer-logo" href="index.php"> <img src="images/homelogo.png"></a>
                    <div class="content">

                        <div class="block block-1">
                            <h2>Hệ thống</h2>
                            <ul>
                                <li><a href="search.php">Phòng trọ</a></li>
                                <li><a href="search.php">Nhà, căn hộ cho thuê</a></li>
                                <li><a href="search.php">Tìm ở ghép</a></li>
                                <li><a href="room_post.php">Cho thuê</a></li>
                            </ul>
                        </div>
                
                        <div class="block block-2">
                            <h2>Kết nối với chúng tôi</h2>
                            <ul>
                                <li>Hotline: <a href="tel:0332661579">033.266.1579</a></li>
                                
                                <li>Email: <a href="mailto:trantoan29072003@gmail.com" target="_blank">trantoan29072003@gmail.com</a></li>
                                <li class="social">
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <img src="https://tromoi.com/frontend/home/images/fb_icon.svg" alt="Facebook">
                                    </a> 
                                    <a href="https://www.youtube.com/" target="_blank">
                                        <img src="https://tromoi.com/frontend/home/images/ytb_icon.svg" alt="Youtube">
                                    </a>
                                    <a href="https://www.tiktok.com/" target="_blank">
                                        <img src="https://tromoi.com/frontend/home/images/tik_tok.svg" alt="TikTok" sizes="36">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
 `)    
}


function addReport() {
    document.write(`
    <div class="section box box-contract">
    <div class="container">
        <div class="box-header"> <h1 class="box-title text-center text-upper text-black">Hỗ trợ khách hàng và phản hồi </h1> </div>
        <div class="description "> 
            <p class="text-center">
            Bạn cần hỗ trợ 
                <span class="highlight">
                Tìm kiếm, Đăng tin, Thanh toán?
                </span> 
                Liên hệ với chúng tôi ngay qua các hình thức:
            </p>
        </div>
        <div class="box-body">
            <div class="inner section">
                
                <div class="item" data-aos="fade-up">
                    <div class="image"><img src="https://tromoi.com/frontend/home/images/icon/mail.svg"></div>
                    <div class="content">
                        <div class="title">Email</div>
                        <div class="description">
                                <p>Chúng tôi sẽ trả lời thắc mắc của bạn trong vòng 24 giờ.</p>
                                <a href="mailto:21020091@vnu.edu.vn" target="_blank">Email ngay</a>
                        </div>
                    </div>
                </div>
                
                <div class="item" data-aos="fade-up">
                    <div class="image"><img src="https://tromoi.com/frontend/home/images/icon/messenger.svg"></div>
                    <div class="content">
                        <div class="title">Facebook</div>
                        <div class="description">
                            <p>Nhắn tin với chúng tôi trên nền tảng facebook messenger</p>
                            <a href="https://www.facebook.com/" target="_blank">Gửi tin nhắn</a>
                        </div>
                    </div>
                </div>
                
                <div class="item" data-aos="fade-up">
                    <div class="image"><img src="https://tromoi.com/frontend/home/images/icon/zalo.svg"></div>
                    <div class="content">
                        <div class="title">Zalo</div>
                        <div class="description">
                            <p>Nhắn tin hoặc gọi cho chúng tôi trên nền tảng Zalo</p>
                            <a href="https://zalo.me/0368432906" target="_blank">Liên hệ ngay</a>
                        </div>
                    </div>
                </div>
   
            </div>
        </div>
    </div>
   </div>
    `)
}