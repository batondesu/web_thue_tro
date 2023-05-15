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
    $list_id = [];
    $count = 0;
    $city = 'TP. Hồ Chí Minh';
    $district = 'Quận Tân Bình';

    $conn = new mysqli("localhost", "root", "", "room_rent");
    $sql = "SELECT * FROM room_info" ;
    $result = $conn->query($sql);

    while ($row = $result->fetch_array()) {
        if ( $row['city'] == $city && $row['district'] == $district ) {
            $list_id[++$count] = $row['room_id'];
           // echo $row['room_id'].' ';
        }
    }
?>

<?php
    $link_url ="";
    if (isset($_GET['user_id'])) {
        $link_url = "&user_id=";
        $link_url .= $_GET['user_id'];
    }

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $left = ($page - 1) * 10 + 1;
    $right = $left + 9;
    $curPage = ceil($count/10);
?>

    
    <div class="module-header">
              Có <?php echo $count ?> kết quả
          </div>
          <div class="module-content hostel hostel-list">	       
      <?php
          if (isset($_GET['user_id'])) {
            $link_url = "&user_id=";
            $link_url .= $_GET['user_id'];
            //echo $link_url;
          }
          for ($u = $left; $u <= min($right,$count - 1) ; ++$u) {
                  
                  $room_id = $list_id[$u];
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
                                      <a href="chitietphong.php?name=<?php echo $row['room_id'].$load_link ?>" 
                            
                                      style="background-image:url('<?php echo $list_image[1] ?>')">
                                        
                                      </a>
                                  </div>

                                  <div class="info col">
                                      <div class="star">
                                          <span class="local">
                                              <a href="chitietphong.php?name=<?php echo $row['room_id'].$load_link ?>">
                                                  <?php echo $row['city'] ?>
                                              </a>							
                                          </span>
                                      </div>
                                      <h4 class="title hot">
                                          <a href="chitietphong.php?name=<?php echo $row['room_id'].$load_link ?>">
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
      ?>                  <div class="paginator">
                              <ul class="pagination">
                                  <?php   
                                      if ( $page == 1 ) {
                                          ?><li class="disabled">
                                              <span>«</span>
                                          </li><?php
                                      } else {
                                          ?><li> 
                                              <a href="search.php?page=<?php $pre=$page-1; echo $pre ?><?php echo $link_url ?>">
                                              «
                                              </a>
                                          </li><?php
                                      }

                                      for ($i = max($page-2,1) ; $i<$page; ++$i) { 
                                          ?><li> 
                                              <a href="search.php?page=<?php echo $i?><?php echo $link_url ?>">
                                                  <?php echo $i ?>
                                              </a>
                                          </li><?php
                                      }

                                          ?><li class="active" >
                                              <span><?php echo $page ?></span>
                                          </li><?php

                                      for ($i = $page+1 ; $i<=$curPage; ++$i) { 
                                          ?><li> 
                                              <a href="search.php?page=<?php echo $i?><?php echo $link_url ?>">
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
                                              <a href="search.php?page=<?php $pos=$page+1; echo $pos?><?php echo $link_url ?>">
                                              »
                                              </a>
                                          </li><?php
                                      } 
                                  ?> 
                              </ul>											
                          </div>
                      </div>
    
</div>
</body>
</html>