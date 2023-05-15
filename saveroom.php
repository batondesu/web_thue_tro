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
    <link rel="stylesheet" href="css/guest.scss">
    <link rel="stylesheet" href="css/reset.scss">
    <link rel="stylesheet" href="css/global.scss">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.scss">
    <link rel="stylesheet" href="css/header.css"> 
    <link rel="stylesheet" href="css/hostel.scss">
    <link rel="stylesheet" href="css/listsave.css">
    

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
        include 'header.php';

        $user_id = $_GET['user_id'];
        
        $conn = new mysqli("localhost", "root", "", "room_rent");
        $sql = "SELECT count(room_id) AS total FROM room_booking
                WHERE user_id = $user_id" ;
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        
        $count = $row['total'];
        $curPage = ceil($count/10);
    ?>

    <?php    
    
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
        $left = ($page - 1) * 10;
        $right = $left + 10;

        $sql = "SELECT room_id FROM room_booking
                WHERE  user_id = $user_id
                LIMIT $left,$right" ;

        $result = $conn->query($sql);
    ?>

    
    <div id="main-body">	
        <div class="main-content">
            <div class="container">
                <div class="module module-saved">
                    <div class="module-header">
                        Tin lưu trữ
                        <p class="description">Nơi lưu trữ tin của bạn.</p>
                    </div>
                    <div class="module-content hostel hostel-list">	       
    <?php
        if ( $result->num_rows > 0 ){
            while ($id = $result->fetch_array()){
                $room_id = $id['room_id'];
                $sql = "SELECT *, i.image FROM room_info r
                        LEFT JOIN image_vid i
                        ON i.room_id = r.room_id
                        WHERE r.room_id = $room_id";
                $res = $conn->query($sql);
                $row = $res->fetch_assoc(); 

                $image_url = $row["image"];
                $list_image = [];
                $dem = 0;

                $image_url .= " ";
                $image = "";
                for ($i = 0 ; $i < strlen($image_url); ++$i) {
                    if ( substr($image, -4) == ".jpg" || ($image_url[$i] == " " && substr($image, -4) != ".jpg") ) {
                        $list_image[++$dem] = $image;
                        $image = "";
                        }
                    else {
                        $image .= $image_url[$i];
                    }
                }
    ?>   
                        <div class="item hot column" title="<?php echo $row['title'] ?>">
                            <div class="border">
                                <div class="image">	
                                    <a href="chitietphong.php?user_id=<?php echo $user_id ?>&name=<?php echo $row['room_id'] ?>" style="background-image:url('<?php echo $list_image[1] ?>')">
                                        
                                    </a>
                                </div>

                                <div class="info col">
                                    <div class="star">
                                        <span class="local">
                                            <a href="chitietphong.php?user_id=<?php echo $user_id ?>&name=<?php echo $row['room_id'] ?>">
                                                <?php echo $row['city'] ?>
                                            </a>							
                                        </span>
                                    </div>
                                    <h4 class="title hot">
                                        <a href="chitietphong.php?user_id=<?php echo $user_id ?>&name=<?php echo $row['room_id'] ?>">
                                        <?php echo $row['title'] ?>					
                                        </a>
                                    </h4>
                                    <div class="location-area ">
                                        <dl class="address">
                                            <dt> <?php echo $row['address'] ?> </dt>
                                        </dl>
                                    </div>
                                    <dl class="contact">
                                        <div class="price">
                                            Khoảng <?php echo $row['price'] ?> triệu VNĐ/tháng
                                        </div>
                                        <span class="published">
                                            <?php echo $row['last_update'] ?>
                                        </span>
                                    </dl>
                                </div>
                            </div>										                
                        </div>     
    <?php
            }
        }
    ?>                  <div class="paginator">
                            <ul class="pagination">
                                <?php   
                                    if ( $page == 1 ) {
                                        ?><li class="disabled">
                                            <span>«</span>
                                        </li><?php
                                    } else {
                                        ?><li> 
                                            <a href="saveroom.php?user_id=<?php echo $user_id?>&page=<?php $pre=$page-1; echo $pre ?>">
                                            «
                                            </a>
                                        </li><?php
                                    }

                                    for ($i = max($page-2,1) ; $i<$page; ++$i) { 
                                        ?><li> 
                                            <a href="saveroom.php?user_id=<?php echo $user_id?>&page=<?php echo $i?>">
                                                <?php echo $i ?>
                                            </a>
                                        </li><?php
                                    }

                                        ?><li class="active" >
                                            <span><?php echo $page ?></span>
                                        </li><?php

                                    for ($i = $page+1 ; $i<=$curPage; ++$i) { 
                                        ?><li> 
                                            <a href="saveroom.php?user_id=<?php echo $user_id?>&page=<?php echo $i?>">
                                                <?php echo $i ?>
                                            </a>
                                        </li><?php
                                    } 
                                    if ( $page == $curPage ) {
                                        ?><li class="disabled">
                                            <span>»</span>
                                        </li><?php
                                    } else {
                                        ?><li> 
                                            <a href="saveroom.php?user_id=<?php echo $user_id?>&page=<?php $pos=$page+1;echo $pos?>">
                                            »
                                            </a>
                                        </li><?php
                                    } 
                                ?> 
                            </ul>											
                        </div>
                    </div>
                </div>
            </div>		
        </div>
    </div>
                                    
    <script> addFooter(); </script>

</body>
</html>