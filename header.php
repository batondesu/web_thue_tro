<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Trọ Tốt</title>
    <link rel="shortcut icon" href="images/logo1.png" />
    
    <!-- url icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">

     <!---->
    <link rel="stylesheet" href="css/trangchu.css">
    <link rel="stylesheet" href="css/header.css"> 

    <!-- js -->
    <script src="js/main.js"> </script>
    <script src="js/home.js"> </script>

    <!-- lib owl carousel -->
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>

</head>


<body>

    <?php
         /* 
        $link = $_SERVER['REQUEST_URI'];
        
        $check = substr($link, strlen($link) - 9, 7);
        if ($check == "user_id" ) {
            $user_id = substr($link, -1);
        }

        $user_id = 1; 
        $conn = new mysqli("localhost", "root", "", "room_rent");
        $sql = "SELECT * FROM users
                WHERE user_id = $user_id" ;
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();*/
    ?>
    
    <?php
        $link = "";
        $id = "";
        if ( isset($_GET['user_id'])) {
            $link .= "user_id=";
            $link .= $_GET['user_id'];
            $id = '&user_id=';
            $id .=$_GET['user_id']; 
        } 
    ?>

    <section id="header">
    <div class="header">
        <div class="container">
            <div class="container-inner full">
                <div class="logo">
                    <a href="index.php?<?php echo $link ?>">
                        <img src="images/logo.png" alt="Trang chủ" title="Trang chủ">
                        <i> Trọ Tốt </i>
                    </a>
                </div> 
                <!-- End Logo -->

                <div class="menu">
                    <ul class="nav-top">
                        <li><a href="search.php?type=Phòng%20trọ<?php echo $id ?>"> PHÒNG TRỌ</a></li>
                        <li><a href="search.php?type=Nhà%20nguyên%20căn<?php echo $id ?>"> NHÀ NGUYÊN CĂN</a></li>
                        <li><a href="search.php?type=Trọ%20ghép<?php echo $id ?>"> TRỌ GHÉP</a></li>
                        
                        <?php 
                            if (!isset($_GET['user_id'])) {
                        ?>
                            <li>
                                <a href="login.php?name_url=room_post"> ĐĂNG BÀI</a> 
                            </li>
                        <?php 
                            }
                        ?>
                        <?php 
                            if (isset($_GET['user_id'])) {
                        ?>
                            <li>
                                <a href="room_post.php?<?php echo $link ?>"> ĐĂNG BÀI</a>
                            </li>
                        <?php
                            }
                        ?>

                    </ul> 
                </div> 
                <!-- End Menu -->

                

                <div class="box-user">
                        <?php 
                            if(!isset($_GET['user_id'])) {
                                //echo "nhanh";
                        ?>
                                <ul class="nav-inout">
                                    <li class="signup">
                                        <a class="dangky" href="signup.php"> ĐĂNG KÝ</a>
                                    </li>
                                    <li class="login">
                                        <a class="dangnhap" href="login.php"> ĐĂNG NHẬP</a> 
                                    </li>
                                </ul>
                        <?php
                            }
                        ?>

                        <?php 
                            if(isset($_GET['user_id'])) {
                                $user_id = $_GET['user_id'];
                                $conn = new mysqli("localhost", "root", "", "room_rent");
                                $sql = "SELECT * FROM users
                                        WHERE user_id = $user_id" ;
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();

                        ?>
                            <div class="user-info">
                                <ul class="nav-user">
                                    <li class="dropdown">   
                                        <button class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            <img src="images/ava.png">
                                        </button>

                                        <ul class="dropdown-menu" role="menu">
                                            <li class="user-heading">
                                                <div class="user-wrapper">
                                                    <div class="info">
                                                        <h1> <?php echo $row["User_name"] ?> </h1>
                                                        <p>
                                                            Tài khoản : 
                                                            <span class="username">
                                                                <?php echo $row["account_name"] ?>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>	
                                            <li class="divider"></li>
                                            <li> 
                                                <a href="<?php if (isset($_GET['user_id'])) echo "user_info.php?user_id=".$_GET['user_id']; else echo "login.php" ?>">
                                                    <i class="fa fa-user"></i> 
                                                    Trang cá nhân
                                                </a>
                                            </li>
                                                           
                                            <?php if ($row["permission"] == "admin") { ?>
                                            <li class="divider"></li>
                                            <li> 
                                                <a href="admin_browse.php?user_id=<?php echo $user_id?>">
                                                    <i class="fa fa-check-square-o"></i> 
                                                    Duyệt bài
                                                </a>
                                            </li>
                                            <?php } ?>

                                            <li class="divider"></li>
                                            <li>
                                                <a href="saveroom.php?user_id=<?php echo $user_id ?>">
                                                    <i class="fa fa-save"></i> 
                                                    Tin đã lưu
                                                </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="user's_room_post.php?user_id=<?php echo $user_id ?>">
                                                    <i class="fa fa-list"></i> 
                                                    Quản lý tin
                                                </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li> 
                                                <a href="index.php">
                                                    <i class="fa fa-sign-out" aria-hidden="true"></i> 
                                                    Đăng xuất
                                                </a>
                                            </li>
                                        </ul>      
                                    </li>
                                </ul>
                            </div>
                        <?php
                            }
                        ?>

                                <!-- xu ly dropdown -->
                                <script>
                                    var dropdownToggle = document.querySelector('.dropdown-toggle');
                                    var dropdownContent = document.querySelector('.dropdown-menu');

                                        dropdownToggle.addEventListener('click', function() {
                                        dropdownContent.style.display = (dropdownContent.style.display === 'none') ? 'block' : 'none';
                                    });
                                </script>                   
                </div>
            </div>
        </div>
    </div> 
    <!-- End Header -->
    </section>
</body>
</html>


