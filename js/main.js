function addHeader() {
    document.write(`        
	<div class="header group">
        <div class="logo">
            <a href="index.html">
                <img src="images/logo.jpg" alt="Trang chủ" title="Trang chủ">
            </a>
        </div> 
        <!-- End Logo -->

        <div class="menu">
            <ul class="top-nav-quicklink flexContain">
                <li><a href="search.html"> PHÒNG TRỌ</a></li>
                <li><a href="search.html"> NHÀ NGUYÊN CĂN</a></li>
                <li><a href="search.html"> TRỌ GHÉP</a></li>
                <li><a href="lease.html"> CHO THUÊ</a></li>
            </ul> 
        </div> 
        <!-- End Menu -->

        <div class="member">
                <div onclick="checkDangNhap()">
                    <li><a href="login.html"> ĐĂNG NHẬP</a></li>
                </div>

                <div onclick="checkDangKy()">
                    <li><a href="signup.html"> ĐĂNG KÝ</a></li>
                </div>

                <div class="userMenu hide">
                    <a href="user.html"><i class="fa fa-user" aria-hidden="true"></i> Tài Khoản</a>
                    <a onclick="if(window.confirm('Xác nhận đăng xuất ?')) logOut();"><i class="fa fa-sign-out"></i> Đăng xuất</a>
                </div>
        </div>
        <!-- End Member -->
    </div> 
    <!-- End Header -->`
    )
}