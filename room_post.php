<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trọ Tốt</title>
    <link rel="shortcut icon" href="images/logo1.png" />
    
    <!-- url icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <!-- css -->
    <link rel="stylesheet" href="css/trangchu.css">
    <link rel="stylesheet" href="css/header.css">
    <!-- js -->
    <script src="js/main.js"> </script>
    <script src="js/home.js"> </script>
    <!-- lib owl carousel -->
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    
	<style>
    .body{
        margin-top:20px;
        color: #1a202c;
        text-align: left;
        background-color: #e2e8f0;    
    }
    .main-body {
        padding: 15px;
    }
    .card {
        box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
    }
    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0,0,0,.125);
        border-radius: .25rem;
    }
    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1rem;
    }
    .select {
      border-color: #fff;
    }
    </style>
</head>
<body>
    
    <?php 
      include 'header.php';
      if(!isset($_GET['user_id'])) { ?>
      <h2 class="text-center">Bạn chưa đăng nhập</h2>
    <?php } else { ?>
    <?php $user_id = $_GET['user_id']; ?>
    <div class="container">
        <div class="main-body">
        <h2 class="text-center">Đăng bài thuê phòng</h2>
            <form class="card" action="room_post_update.php?user_id=<?php echo $user_id?>" method="post">
                
                <?php if (isset($_GET['error'])) { ?>
     		        <h4><?php echo $_GET['error']; ?></h4>
     	        <?php } ?>
                <?php if (isset($_GET['success'])) { ?>
                    <h4><?php echo $_GET['success']; ?></h4>
                <?php } ?>
                <div class="card-body">        
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Tiêu đề*</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" 
                           name="title" 
                           class="form-control"
                           placeholder="Nhập tiêu đề đăng phòng">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Giá*</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" 
                           name="price" 
                           class="form-control"
                           placeholder="Nhập giá phòng(VND)">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Diện tích*</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" 
                           name="size" 
                           class="form-control"
                           placeholder="Nhập diện tích phòng(m²)">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Tỉnh, Thành Phố*</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <select name="calc_shipping_provinces" style="height: 33px; width: 840px; color:#828282; -color:#828282">
                      <option value="">Chọn thành phố</option>
                    </select>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Quận, Huyện*</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <select name="calc_shipping_district" style="height: 33px; width: 840px; color:#828282">
                      <option value="Chọn quận,huyện">Chọn quận huyện</option>
                    </select>
                    </div>
                  </div>
                  <hr>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Xã, Phường*</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" 
                           name="ward" 
                           class="form-control"
                           placeholder="Nhập xã, phường">
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Địa chỉ*</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" 
                           name="address" 
                           class="form-control"
                           placeholder="Nhập địa chỉ(tên đường, số nhà,...)">
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Ghi chú</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" 
                           name="note" 
                           class="form-control"
                           placeholder="Nhập ghi chú">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Kiểu phòng*</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <select name="type" style="height: 33px; width: 840px; color:#828282">
                      <option value="Phòng trọ">Phòng trọ</option>
                      <option value="Phòng ghép">Trọ ghép</option>
                      <option value="Nhà nguyên căn">Nhà nguyên căn</option>
                    </select>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Ảnh phòng trọ*</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" 
                           name="image" 
                           class="form-control"
                           placeholder="Nhập link ảnh phòng trọ (link1,link2,link3,....)">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"> Video phòng trọ</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" 
                           name="vid" 
                           class="form-control"
                           placeholder="Nhập video phòng trọ (link1,link2,link3,....)">
                    </div>
                  </div>
                  <hr>
                    <div class="col-sm-12">
                    <button name="post" type="submit" class="btn btn-info ">
                         Post
                    </button>
                    </div>
            </div>
          </div>
        </div>
    </div>
    <?php } ?>
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
    
    </script>
</body>
</html>