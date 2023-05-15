<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tìm kiếm</title>
    <link href="images/logo1.png" rel="icon" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- 
    <link rel="stylesheet" href="css/search.css">-->
    <link rel="stylesheet" href="css/listsave.css">
    <link rel="stylesheet" href="css/guest.scss">
    <link rel="stylesheet" href="css/reset.scss">
    <link rel="stylesheet" href="css/global.scss">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.scss">
    <link rel="stylesheet" href="css/header.css"> 
    <link rel="stylesheet" href="css/hostel.scss">
    <link rel="stylesheet" href="css/listsave.css">
    <script> src="js/main.js" </script>
</head>
<body>
  <?php include 'header.php' ?>

  <div id="main-body">
    <div class="main-content">
      <div class="container">
        <div class="module module-saved">
          <div class="module-header">
            <form id="sidebar" >
              <div class="vi-tri">
                <table class="location ">
                  <tr>
                      <th colspan="2" for="city ">ĐỊA ĐIỂM ,VỊ TRÍ</th>
                  </tr>  
                  <tr class="last-row">  
                    <td> 
                      <select name="calc_shipping_provinces" >
                        <option value="">Chọn thành phố</option>
                      </select>
                    </td>
                    <td>
                      <select name="calc_shipping_district" >
                        <option value="">Chọn quận huyện</option>
                      </select>
                    </td>
                    <input class="billing_address_1" name="" type="hidden" value="">
                    <input class="billing_address_2" name="" type="hidden" value="">
                  </tr>
              </table>
              </div>
                
              <div class="the-loai">
                <table class="type ">
                  <tr>
                      <th colspan="2" >TÌM KIẾM THEO LOẠI HÌNH</th>
                  </tr>

                  <tr class="first-row"> 
                      <td >
                        <label>
                          <input type="radio" name="loai-hinh" value="Phòng trọ"<?php if (isset($_GET['type'])) if ($_GET['type'] == 'Phòng trọ') echo 'checked' ?>>
                          <span class="checkmark"></span>
                            Phòng trọ
                        </label> 
                      </td>
                      <td class="last">
                        <label>
                          <input type="radio" name="loai-hinh" value="Nhà nguyên căn"<?php if (isset($_GET['type'])) if ($_GET['type'] == 'Nhà nguyên căn') echo 'checked' ?>>
                          <span class="checkmark"></span>
                            Nhà nguyên căn
                        </label>
                      </td>
                  </tr>
                  <tr class="last-row">
                      <td >
                        <label>
                          <input type="radio" name="loai-hinh" value="Trọ ghép"<?php if (isset($_GET['type'])) if ($_GET['type'] == 'Trọ ghép') echo 'checked' ?>>
                          <span class="checkmark"></span>
                            Trọ ghép
                        </label> 
                      </td>
                      <td class="last">
                        <label>
                          <input type="radio" name="loai-hinh" value="all" <?php if (isset($_GET['type'])) if ($_GET['type'] == 'all') echo 'checked' ?>>
                          <span class="checkmark"></span>
                            Tùy chọn
                        </label>
                      </td>
                  </tr>
              </table>
              </div>
              
              <div class="gia-tien">
                <table class="Price ">
                <tr>
                  <th>TÌM KIẾM THEO GIÁ</th>
                </tr>
                <tr>
                  <td>
                    <label>
                      <input type="radio" name="price" value="all" <?php if (isset($_GET['price'])) if ($_GET['price'] == 'all') echo 'checked' ?>>
                      <span class="checkmark"></span>
                      Tất cả
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>
                      
                      <input type="radio" name="price" value="0" <?php if (isset($_GET['price'])) if ($_GET['price'] == 0) echo 'checked' ?>>
                      <span class="checkmark"></span>
                      Dưới 1 triệu
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>
                      <input type="radio" name="price" value="1" <?php if (isset($_GET['price'])) if ($_GET['price'] == 1) echo 'checked' ?>>
                      <span class="checkmark"></span>
                      1 triệu - 2 triệu
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>
                      <input type="radio" name="price" value="2" <?php if (isset($_GET['price'])) if ($_GET['price'] == 2) echo 'checked' ?>>
                      <span class="checkmark"></span>
                      2 triệu - 3 triệu
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>
                      <input type="radio" name="price" value="3" <?php if (isset($_GET['price'])) if ($_GET['price'] == 3) echo 'checked' ?>>
                      <span class="checkmark"></span>
                      3 triệu - 5 triệu
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>
                      <input type="radio" name="price" value="5" <?php if (isset($_GET['price'])) if ($_GET['price'] == 5) echo 'checked' ?>>
                      <span class="checkmark"></span>
                      5 triệu - 7 triệu
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>
                      <input type="radio" name="price" value="7" <?php if (isset($_GET['price'])) if ($_GET['price'] == 7) echo 'checked' ?>>
                      <span class="checkmark"></span>
                      7 triệu - 10 triệu
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>
                      <input type="radio" name="price" value="10" <?php if (isset($_GET['price'])) if ($_GET['price'] == 10) echo 'checked' ?>>
                      <span class="checkmark"></span>
                      10 triệu - 15 triệu
                    </label>
                  </td>
                </tr>
                <tr >
                  <td >
                    <label>
                      <input type="radio" name="price" value="15" <?php if (isset($_GET['price'])) if ($_GET['price'] == 15) echo 'checked' ?>>
                      <span class="checkmark">Trên 15 triệu</span>
                    </label>
                  </td>
                </tr>
              </table>
              </div>
              <div><button type="submit">TÌM KIẾM </button></div>
              
            </form>
          </div>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://web8802.com/wp-content/themes/hienads/assets/js/quanhuyen.js"></script>
          <script>
            if (address_2 = localStorage.getItem('address_2_saved')) {

              $('select[name="calc_shipping_district"] option').each(function() {

                if ($(this).text() == address_2) {

                  $(this).attr('selected', '')

                }

              })

              $('input.billing_address_2').attr('value', address_2)

            }

            if (district = localStorage.getItem('district')) {

              $('select[name="calc_shipping_district"]').html(district)

              $('select[name="calc_shipping_district"]').on('change', function() {

                var target = $(this).children('option:selected')

                target.attr('selected', '')

                $('select[name="calc_shipping_district"] option').not(target).removeAttr('selected')

                address_2 = target.text()

                $('input.billing_address_2').attr('value', address_2)

                district = $('select[name="calc_shipping_district"]').html()

                localStorage.setItem('district', district)

                localStorage.setItem('address_2_saved', address_2)

              })

            }

            $('select[name="calc_shipping_provinces"]').each(function() {

              var $this = $(this),

                stc = ''

              c.forEach(function(i, e) {

                e += +1

                stc += '<option value=' + e + '>' + i + '</option>'

                $this.html('<option value="">Tỉnh / Thành phố</option>' + stc)

                if (address_1 = localStorage.getItem('address_1_saved')) {

                  $('select[name="calc_shipping_provinces"] option').each(function() {

                    if ($(this).text() == address_1) {

                      $(this).attr('selected', '')

                    }

                  })

                  $('input.billing_address_1').attr('value', address_1)

                }

                $this.on('change', function(i) {

                  i = $this.children('option:selected').index() - 1

                  var str = '',

                    r = $this.val()

                  if (r != '') {

                    arr[i].forEach(function(el) {

                      str += '<option value="' + el + '">' + el + '</option>'

                      $('select[name="calc_shipping_district"]').html('<option value="">Quận / Huyện</option>' + str)

                    })

                    var address_1 = $this.children('option:selected').text()

                    var district = $('select[name="calc_shipping_district"]').html()

                    localStorage.setItem('address_1_saved', address_1)

                    localStorage.setItem('district', district)

                    $('select[name="calc_shipping_district"]').on('change', function() {

                      var target = $(this).children('option:selected')

                      target.attr('selected', '')

                      $('select[name="calc_shipping_district"] option').not(target).removeAttr('selected')

                      var address_2 = target.text()

                      $('input.billing_address_2').attr('value', address_2)

                      district = $('select[name="calc_shipping_district"]').html()

                      localStorage.setItem('district', district)

                      localStorage.setItem('address_2_saved', address_2)

                    })

                  } else {

                    $('select[name="calc_shipping_district"]').html('<option value="">Quận / Huyện</option>')

                    district = $('select[name="calc_shipping_district"]').html()

                    localStorage.setItem('district', district)

                    localStorage.removeItem('address_1_saved', address_1)

                  }

                })

              })

            })
            var listcity=['An Giang','Bà rịa - Vũng tàu','Bạc Liêu','Bắc Kạn','Bắc Giang','Bắc Ninh','Bến Tre','Bình Dương',
                          'Bình Định','Bình Phước','Bình Thuận','Cà Mau','Cao Bằng','Cần Thơ', 'Đà Nẵng','Đắk Lắk','Đắk Nông',
                          'Đồng Nai','Đồng Tháp','Điện Biên','Gia Lai','Hà Giang','Hà Nam','Hà Nội','Hà Tĩnh','Hải Dương','Hải Phòng',
                          'Hậu Giang','Hòa Bình','Hưng Yên','TP. Hồ Chí Minh','Khánh Hòa','Kiên Giang','Kon Tum','Lai Châu','Lâm Đồng','Lạng Sơn','Lào Cai',
                          'Long An','Nam Định','Nghệ An','Ninh Bình','Ninh Thuận','Phú Thọ','Phú Yên','Quảng Bình','Quảng Nam','Quảng Ngãi',
                          'Quảng Ninh','Quảng Trị','Sóc Trăng','Sơn La','Tây Ninh','Thái Bình','Thái Nguyên','Thanh Hóa','Thừa Thiên Huế','Tiền Giang',
                          'Trà Vinh','Tuyên Quang','Vĩnh Long','Vĩnh Phúc','Yên Bái'];
            </script>

            <script>
              document.getElementById("sidebar").addEventListener("submit", function(event) {
                event.preventDefault(); // Ngăn chặn hành vi mặc định của form (tải lại trang)

                // Lấy dữ liệu từ bảng
                var tableData = getTableData();

                // Gửi dữ liệu lên server hoặc thực hiện xử lý khác
                sendData(tableData);
              });

              function getTableData() {
                var table = document.getElementById("sidebar");
                var rows = table.getElementsByTagName("tr");
                var data = [];

                for (var i = 0; i < rows.length; i++) {
                  var row = rows[i];
                  var rowData = [];

                  var cells = row.getElementsByTagName("td");
                  for (var j = 0; j < cells.length; j++) {
                    var cell = cells[j];
                    // Lấy giá trị từ ô input, select hoặc phần tử khác
                    var value = cell.querySelector('input[type="radio"]:checked');
                    if (value) {
                      var radioValue = value.value;

                      rowData.push(radioValue);
                      break;
                    }
                    value = cell.querySelector('select');
                    if ( value ) {
                      rowData.push(value.value);
                    }
                    
                  }

                  data.push(rowData);
                }

                return data;
              }

              function sendData(data) {
                console.log(data);
                var link = "";
                for (var i = 0; i < data.length; ++i) {
                    if (data[i].length == 2 && data[i][0] != "") {
                      link += "city=";
                      var pos = parseInt(data[i][0]) - 1;
                      //
                      var city = listcity[pos];
                      console.log(pos, ' ', city);
                      link += encodeURIComponent(city);
                      link += "&district=";
                      var district = data[i][1];
                      link += encodeURIComponent(district);
                    }
                    if ( i >= 6 && data[i][0] != null ) link += "&price=" + data[i][0];
                    if ( i < 6 && data[i][0] != null && data[i].length != 2) {
                      $type = data[i][0];
                      link += "&type=";
                      link += encodeURIComponent($type);
                    }
                  }
                //window.onload.hr
                if ( link.charAt(0) == "&" ) link = link.substring(1);
                console.log(data); // In dữ liệu ra console để kiểm tra

                var url = new URL(window.location.href);
                var user_id = url.searchParams.get("user_id"); 

                link = "search.php?" + link;
                if ( user_id != null ) {
                  link += "&user_id=";
                  link +=user_id;
                }
                console.log(link);
                 window.location.href = link;
              }
          </script>
          
          <?php 
            $list_id = [];
            $count = 0;
            $city = "";
            $district = "";
            $type = "all";
            $price = "all";
            if ( isset($_GET['city'] )) {$city = $_GET['city'];}
            if ( isset($_GET['district'] )) {$district = $_GET['district'];}
            if ( isset($_GET['type'] )) {$type = $_GET['type'];}
            if ( isset($_GET['price'] )) {
              $price = $_GET['price'];
              if ($price != "all") {
                if ($price < 3) $right1 = intval($price) + 1;
                else if ($price < 7) $right1 = intval($price) + 2;
                else if ($price < 10) $right1 = intval($price) + 3;
                else if ($price < 15) $right1 = intval($price) + 5;
                else if ($price == 15) $right1 = intval($price) + 1000;
              }
              else { $right1 = 100;}
            }
            //echo $price.' '.$right1;
            
            

            $conn = new mysqli("localhost", "root", "", "room_rent");
            $sql = "SELECT * FROM room_info" ;
            $result = $conn->query($sql);

            while ($row = $result->fetch_array()) {
              if ( $city != "" && $district != "" && $type == "all" && $price == "all"){
                if ( $city == $row['city'] && $district == $row['district']) {$list_id[++$count] = $row['room_id'];}}
              
              if ( $city != "" && $district == "" && $type == "all" && $price == "all"){
                if ( $city == $row['city']) {$list_id[++$count] = $row['room_id'];}}
              
              if ( $city == "" && $district == "" && $type == "all" && $price == "all"){
                {$list_id[++$count] = $row['room_id'];}}

              if ( $city != "" && $district != "" && $type != "all" && $price == "all"){ 
                if ( $city == $row['city'] && $district == $row['district'] && $type == $row['type']) {$list_id[++$count] = $row['room_id'];}}
              
              if ( $city != "" && $district == "" && $type != "all" && $price == "all"){ 
                if ( $city == $row['city'] && $type == $row['type']) {$list_id[++$count] = $row['room_id'];}}
              
              if ( $city == "" && $district == "" && $type != "all" && $price == "all"){ 
                if ($type == $row['type']) {$list_id[++$count] = $row['room_id'];}}

              if ( $city != "" && $district != "" && $type == "all" && $price != "all"){ 
                if ( $city == $row['city'] && $district == $row['district'] && $price <= $row['price'] && $row['price'] <= $right1) 
                {$list_id[++$count] = $row['room_id'];}}
            
              if ( $city != "" && $district == "" && $type == "all" && $price != "all"){ 
                if ($city == $row['city'] && $price <= $row['price'] && $row['price'] <= $right1) {$list_id[++$count] = $row['room_id'];}}  
              
              if ( $city == "" && $district == "" && $type == "all" && $price != "all"){ 
                if ($price <= $row['price'] && $row['price'] <= $right1) {$list_id[++$count] = $row['room_id'];}} 
              
              if ( $city != "" && $district != "" && $type != "all" && $price != "all"){ 
                if ($city == $row['city'] && $district == $row['district'] && $type == $row['type'] && $price <= $row['price'] && $row['price'] <= $right1) 
                {$list_id[++$count] = $row['room_id'];}}

              if ( $city != "" && $district == "" && $type != "all" && $price != "all"){
                if ($city == $row['city'] && $type == $row['type'] && $price <= $row['price'] && $row['price'] <= $right1) 
                {$list_id[++$count] = $row['room_id'];}}

              if ( $city != "" && $district == "" && $type != "all" && $price != "all"){ 
                if ($type == $row['type'] && $price <= $row['price'] && $row['price'] <= $right1) 
                {$list_id[++$count] = $row['room_id'];}}

              if ( $city != "" && $district != "" && $type == "all" && $price == "all"){
                if ( $city == $row['city'] && $district == $row['district']) {$list_id[++$count] = $row['room_id'];}}

              if ( $city == "" && $district == "" && $type != "all" && $price != "all"){
                if ( $type == $row['type'] && $price <= $row['price'] && $row['price'] <= $right1 ) {$list_id[++$count] = $row['room_id'];}}
            }
            
            $list_id = array_unique($list_id);
            //print_r($list_id);
            $list_id = array_values($list_id);
            $count = count($list_id);
           
            for ($ii = 0 ; $ii < $count; ++$ii) {
              //echo $list_id[$ii].' ';
            }
              // echo $count.' '.$city.' '.$district.' '.$type.' '.$price.'<br/>';
            
            $load_link = "";
            if (isset($_GET['user_id'])) {
              $load_link = "&user_id=";
              $load_link .= $_GET['user_id'];
            }

            $page = 0;
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 1;
            }
            $left = ($page - 1) * 10 ;
            $right = $left + 9;
            $curPage = ceil($count/10);
            //$count--;
            
            $next_link = $_SERVER['QUERY_STRING'];
            if (isset($_GET['page'])) $next_link = substr($next_link, 7);
            //echo $next_link;
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
                                              <a href="search.php?page=<?php $pre=$page-1; echo $pre.'&'.$next_link ?>">
                                              «
                                              </a>
                                          </li><?php
                                      }

                                      for ($i = max($page-2,1) ; $i<$page; ++$i) { 
                                          ?><li> 
                                              <a href="search.php?page=<?php echo $i.'&'.$next_link ?>">
                                                  <?php echo $i ?>
                                              </a>
                                          </li><?php
                                      }

                                          ?><li class="active" >
                                              <span><?php echo $page ?></span>
                                          </li><?php

                                      for ($i = $page+1 ; $i<=$curPage; ++$i) { 
                                          ?><li> 
                                              <a href="search.php?page=<?php echo $i.'&'.$next_link ?>">
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
                                              <a href="search.php?page=<?php $pos=$page+1; echo $pos.'&'.$next_link ?>">
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

</body>
</html>