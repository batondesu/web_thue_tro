<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="signup.css">
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Đăng ký</title>
	<link href="images/logo1.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!-- Vendor CSS Files -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="https://hotrolaptrinh.github.io/js/tech/tech.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
	<main id="main">
		<div id="head" class="container-fluid"> 
		    <div class="row ">
				<div class="col-lg-1">
					
					<a href="index.php"> <img width="110px" src="./images/logo1.png" alt=""></a>
				</div>
				<div class="col-lg-2 text-left my-auto pt-4">
					<h1 class="text-center " >Trọ Tốt</h1>
				</div>
				<div class="col-lg-8 mx-auto my-auto">
					<h2 class="text-center text-right  pt-4">Chào mừng bạn đến với Trọ Tốt</h2>
				</div>
		    </div>
	   </div>

		<div id="thanh-ngang"></div>

		<section id="hero" class="d-flex">
			<div class="container-fluid col-lg-6">
				<div class="row bg-white rounded-bottom-5 round-top-5">
					<div class=" col-lg-2"></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
						<h3 class="mb-2">ĐĂNG KÝ TÀI KHOẢN</h3>
						<form action="signup_check.php" method="post" >
							<div class="row">

                            <?php if (isset($_GET['error'])) { ?>
     		                    <p class="error"><?php echo $_GET['error']; ?></p>
     	                    <?php } ?>

                            <?php if (isset($_GET['success'])) { ?>
                                <p class="success"><?php echo $_GET['success']; ?></p>
                            <?php } ?>

								<div class="col-12">
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fa fa-user"></i></span>
										</div>
                                            <?php if (isset($_GET['name'])) { ?>
                                            <input type="text" 
                                                   name="name" 
                                                   class="form-control"
                                                   placeholder="Nhập tài khoản"
                                                   value="<?php echo $_GET['name']; ?>"><br>
                                        <?php }else{ ?>
                                            <input type="text" 
                                                   name="name" 
                                                   class="form-control"
                                                   placeholder="Nhập tài khoản"><br>
                                        <?php }?>
									</div>
								</div>


								<div class="col-12">
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fa fa-key"></i></span>
										</div>
										<input 
                                            type="password" 
                                            name="password" 
                                            id="password" 
                                            class="form-control" 
                                            placeholder="Nhập mật khẩu"/>
										<div class="input-group-append">
											<span class="input-group-text xemMK"><i class="fa fa-eye"></i></span>
										</div>
									</div>
								</div>

								<div class="col-12">
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fa fa-rotate-left"></i></span>
										</div>
										<input 
                                            type="password" 
                                            name="nhaplaipassword" 
                                            id="nhaplaipassword" 
                                            class="form-control" 
                                            placeholder="Nhập lại mật khẩu"/>
										<div class="input-group-append">
											<span class="input-group-text xemMK"><i class="fa fa-eye"></i></span>
										</div>
									</div>
								</div>

								<div class="col-12">
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fa fa-envelope"></i></span>
										</div>
										<input 
                                            type="text" 
                                            name="email"  
                                            class="form-control" 
                                            placeholder="Nhập email"/>
									</div>
								</div>

								<div class="col-12">
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fa fa-phone"></i></span>
										</div>
										<input 
                                            type="text" 
                                            name="phone"  
                                            class="form-control" 
                                            placeholder="Nhập số điện thoại"/>
									</div>
								</div>

								<div class="col-md-6 pr-0">
									<button type="submit" name="dangky" class="btn btn-primary px-4">
										<i class="fa fa-user-plus"></i> Đăng ký</button>
								</div>


								<div class="col-md-6 pr-0">
									<a class="btn btn-success px-4" href="./login.php">
										<i class="fa fa-sign-in"></i> Đăng nhập</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</main><!-- End #main -->
	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
	<div id="preloader"></div>
	<!-- Vendor JS Files -->
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>
	<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
	<script src="assets/vendor/counterup/counterup.min.js"></script>
	<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/venobox/venobox.min.js"></script>
	<script src="assets/vendor/aos/aos.js"></script>
	<!-- Template Main JS File -->
	<script src="https://hotrolaptrinh.github.io/js/tech/main.js"></script>


</body>
</html>