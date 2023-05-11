<?php
    include "admin/database.php";
?>

<?php
    class roominfo {
        private $db;
        public function __construct() {
            $this->db = new Database();
        }

        public function show_room($room_id, $tbl) {
            $query = "SELECT * FROM $tbl WHERE room_id = $room_id";
            $result = $this->db->select($query);
            return $result;
        }
    }
?>

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

    <!-- css -->
    <link rel="stylesheet" href="css/chitietphong.css">
    <link rel="stylesheet" href="css/header.css">

    <!-- js -->
    <script src="js/owl_image.js"> </script>
    <script src="js/main.js"> </script>

    <!-- lib owl carousel -->
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>



</head>

<body>
<section>
    <!-- FOOTER -->

    <script> addHeader(); </script>

    <?php 
        $room_id = $_GET['name'];
        $conn = new mysqli("localhost", "root", "", "room_rent");
        $sql = "SELECT r.*,i.image, u.* FROM room_info r
                JOIN image_vid i ON i.room_id = r.room_id
                JOIN rental_room rr ON rr.room_id = r.room_id
                JOIN users u ON u.user_id = rr.user_id" ;
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        $image_url = $row["image"];
        $list_image = [];
        $dem = 0;

        $image_url .= " ";
        $image = "";
        for ($i = 0 ; $i < strlen($image_url); ++$i) {
            if ( substr($image, -4) == ".jpg" ) {
                $list_image[++$dem] = $image;
                $image = "";
                }
            else {
                $image .= $image_url[$i];
            }
        }
        $jsonArray = json_encode($list_image);
        $jsonNumber = json_encode($dem);
        
    ?>

    
        <div id="main-body" style="height: auto !important; min-height: 0px !important;">
            <div id="hostel-detail" style="height: auto !important;">
                <div class="container" style="height: auto !important;">
                    
                    <!------------------->
                    <div class="image">
			            <div class="owl-carousel owl-theme">
                            <script>
                                var jsonArray = <?php echo $jsonArray; ?>;
                                var jsArray = JSON.parse(jsonArray);
                                var jsonNumber = <?php echo $jsonNumber; ?>;
                                var numberArray = JSON.parse(jsonNumber);
                                joinImage(numberArray, jsArray);
                            </script>
                        </div>
                    </div>
                    
                    <!------------------->
                    <div class="container" style="height: auto !important;">
                        <div class="main-content" class="main" style="height: auto !important;">
                            <div class="center" style="height: auto !important;">
                                <div class="hostel hostel-detail">
                                    <div class="module">
                                        <div class="moduletitle">
                                            <div class="blog-title">
                                                <h3> <?php echo $row["title"] ?> </h3>
                                            </div>
                                            <div class="social-date">
                                                <a href="javascript:void(0);" onclick="saveHostel(20642,23417)" class="tag saved heart-20642">Lưu tin</a>
                                            </div>
                                        </div>
                                        <div class="modulecontent">
                                            <div class="box-content">
                                                <div class="info-wrapper">
                                                    <dl>
                                                        <dt>Địa chỉ:</dt>
                                                        <dd> <?php echo $row["note"].' '.$row["ward"].' '.$row["district"].' '.$row["city"] ?> </dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Giá:</dt>
                                                        <dd>
                                                            Khoảng <?php echo $row["price"] ?> triệu VND/1 tháng
                                                        </dd>
                                                    </dl>
                                                    <div class="info">
                                                        <div class="i-left">
                                                            <dl>
                                                                <dt>Hình thức:</dt>
                                                                <dd>
                                                                    <?php echo $row["type"] ?> 
                                                            </dd>
                                                            </dl>
                                                            <dl>
                                                                <dt>Diện tích:</dt>
                                                                <dd>Khoảng <?php echo $row["size"] ?> m<sup>2</sup></dd>
                                                            </dl>
                                                            <dl>
                                                                <dt>Ở tối đa:</dt>
                                                                <dd>
                                                                    <?php echo $row["size"]/10 ?> người
                                                                </dd>
                                                            </dl>
                                                            <dl>
                                                                <dt>Ngày cập nhật:</dt>
                                                                <dd class="published">17-04-2023 13:25:33</dd>
                                                            </dl>

                                                        </div>
                                                        <div class="i-right">
                                                            <dl>
                                                                <dt>Người đăng:</dt>
                                                                <dd>
                                                                    <span><?php echo $row["user_name"] ?></span>
                                                                </dd>
                                                            </dl>
                                                            <dl>
                                                                <dt>Điện thoại:</dt>
                                                                <dd class="phone">
                                                                    <a href="tel:<?php echo $row["tele"] ?>">
                                                                        <span><?php echo $row["tele"] ?></span>
                                                                    </a>
                                                                </dd>
                                                            </dl>
                                                            <dl>
                                                                <dt>Facebook:</dt>
                                                                <dd>
                                                                    <?php echo $row["facebook"] ?>
                                                                </dd>
                                                            </dl>
                                                            <dl>
                                                                <dt>Zalo:</dt>
                                                                <dd>
                                                                    <?php echo $row["zalo"] ?>
                                                                </dd>
                                                            </dl>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="py-20"></div>
                                                
                                                <div class="box-info-review" id="hostel-review">
                                                    <h2 class="title">0 <i class="fa fa-star"></i> (Có 0 bài đánh giá)</h2>
                                                    <div class="nav-tabs-custom">
                                                        <ul class="nav nav-tabs">
                                                        <li class="active">
                                                            <a href="#tab_1" data-toggle="tab" aria-expanded="true">Đánh giá</a>
                                                        </li>
                                                        <li class="">
                                                            <a data-toggle="modal" data-target="#box-review" class="port">Viết đánh giá</a>
                                                        </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                        <div class="tab-pane active" id="tab_1">
                                                            <div class="item">
                                                            <div class="content-review">
                                                                <p style="padding: 0 10px">Chưa có đánh giá nào</p>
                                                                <a href="#" class="more-review">Xem thêm <span class="fa fa-angle-right"></span></a>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <script type="text/javascript">var hash=window.location.hash;if(hash!=""){var check=$("ul.nav.nav-tabs").find('li a[href="'+hash+'"]');if(check.length>0){$("ul.nav.nav-tabs li").removeClass("active");$("ul.nav.nav-tabs").find('li a[href="'+hash+'"]').parent().addClass("active");$(".tab-content .tab-pane").removeClass("active");$(".tab-content").find(".tab-pane#"+hash.substring(1)).addClass("active");}$("html,body").animate({scrollTop:0},"duration");}</script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar" class="sidebar" style="height: auto !important;">
                                <div class="sidebar__inner" style="height: auto !important;">
                                    <div class="box-contact right">
                                        <h2>Liên hệ chủ trọ</h2>
                                        <dl>
                                            <dt><i class="fa-regular fa-circle-user"></i></dt>
                                            <dd>
                                                <h3> <?php echo $row["user_name"] ?> </h3>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt><i class="fa-regular fa-envelope"></i></dt>
                                            <dd>
                                                <a href="mailto:<?php echo $row["email"] ?>"><?php echo $row["email"] ?></a>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt><i class="fa-solid fa-phone"></i></dt>
                                            <dd>
                                                <a href="tel:<?php echo $row["tele"] ?>"><?php echo $row["tele"] ?></a>
                                            </dd>
                                        </dl>
                                        <div class="phone">
                                            <a class="btn-global" href="tel:<?php echo $row["tele"] ?>"> Gọi ngay </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-----------------
                    <div class="modal fade" id="box-review" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content box-info-review">
                                <div class="modal-header">
                                    <h5 class="modal-title">Viết đánh giá</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="item form-review">
                                    <div class="login">
                                        <p>
                                            Xin vui lòng
                                            <a class="frm-login" href="https://id.ohi.vn/authorize/?response_type=code&amp;client_id=9aa0f7e44df1b62cee9afa9c6e802286&amp;redirect_uri=https://tromoi.com/authenticate&amp;state=https://tromoi.com/s/20451">đăng nhập</a>
                                            để viết đánh giá.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->

                </div> 
            </div>

    <!-- FOOTER -->
    <script>addFooter();</script>

</section>
</body>
</html>