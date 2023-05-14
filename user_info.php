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


    </style>
</head>
<body>

    
    <?php
        include 'header.php';

        $conn = new mysqli("localhost", "root", "", "room_rent"); 
        $user_id = $_GET['user_id'];
        $sql = "SELECT * FROM users WHERE user_id = $user_id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $user_name = $row["User_name"];
        $account_name = $row["account_name"];
        $password = $row["password"];
        $email = $row["email"];
        $tel = $row["tel"];
        $address = $row["address"];
    ?>


    <div class="container">
        <div class="main-body">
        <h2 class="text-center">Thông tin người dùng</h2>
            <div class="card">

            <?php if (isset($_GET['error'])) { ?>
     		    <h4><?php echo $_GET['error']; ?></h4>
     	    <?php } ?>
            <?php if (isset($_GET['success'])) { ?>
                <h4><?php echo $_GET['success']; ?></h4>
            <?php } ?>

                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">User name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $user_name ?>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Account name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $account_name ?>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $password ?>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $email ?>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $tel ?>
                    </div>
                  </div>
                  <hr>

                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $address ?>
                    </div>
                  </div>
                  <hr>

                    <div class="col-sm-12">
                      <a class="btn btn-info "
                         href="user_info_edit.php?user_id=<?php echo $user_id?>">
                         Edit</a>
                    </div>

            </div>
        </div>
    </div>
</div>

</body>
</html>
