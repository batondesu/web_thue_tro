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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header.scss">
    <link rel="stylesheet" href="css/header.css" /> 

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
        $user_id = 3;
        $conn = new mysqli("localhost", "root", "", "room_rent");
        $sql = "SELECT * FROM users
                WHERE user_id = $user_id" ;
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    ?>
    
    <section>
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

                <div class="box-user" action="checkUser.php" method="post">
                    <ul class="nav-user">
                        <?php
                            session_start();
                                if ($_GET['user_id'] == null) {
                                    //echo "Chưa đăng nhập";
                            ?>
                                        <li class="signup">
                                        <a class="dangky" href="signup.php"> ĐĂNG KÝ</a>
                                        </li>
                                        <li class="login">
                                            <a class="dangnhap" href="login.php"> ĐĂNG NHẬP</a>
                                        </li>
                            <?php    
                                }
                            ?>

                            <?php   
                                if ($_GET['user_id']) {
                                //echo "Đã đăng nhập";
                                ?>
                                <form action="checkDropdown.php" method="post">
                                    <li class="dropdown" name="ifclick">
                                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            <i class="fa-solid fa-bars"></i>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li class="user-heading">
                                                <div class="info">
                                                    <h1> <?php echo $row["User_name"] ?> </h1>
                                                    <p>
                                                        Tài khoản : 
                                                        <span class="username">
                                                            <?php echo $row["account_name"] ?>
                                                        </span>
                                                    </p>
                                                    <div class="row-button">
                                                        <a class="btn" href="https://user.php">
                                                            <i class="fa fa-tachometer"></i> 
                                                            Trang cá nhân
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>	

                                            <li class="divider"></li>

                                            <li> <a href="https://tromoi.com/authenticate/logout">
                                                    <i class="fa fa-sign-out"></i> 
                                                    Đăng xuất
                                                </a>
                                            </li>
                                        </ul>      
                                    </li>
                                </form>

                                <!-- xu ly dropdown -->
                                <?php 
                                    if (isset($_POST["aria-expanded"])) 
                                
                                ?>
                                    
                        <?php  
                            } 
                        ?>
                </div>
                <label class="search-form_button"></label>

            </div>
        </div>
    </div> 
    <!-- End Header -->
    </section>
</body>
</html>


