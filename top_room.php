<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!--<link rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/header.css">-->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous" />

    <style>
        .img-fluid.d-block {
            height: 22vh;
        }

        .card {
            transition: transform 0.3s ease;
            height: 550px;
        }

        .card-text-truncate {
             display: -webkit-box;
            -webkit-line-clamp: 7;
            -webkit-box-orient: vertical;
            overflow-y: auto;
        }
    </style>
</head>

<body>
    <?php $conn = new mysqli("localhost", "root", "", "room_rent");
        $sql = "SELECT r.*,i.image, (r.price / r.size) AS abc FROM `room_info` r
            LEFT JOIN image_vid i
            ON i.room_id=r.room_id
            WHERE r.status2 = 'yes'
            ORDER BY abc
            LIMIT 8" ;
        $result = $conn->query($sql);
    ?>

    <section id="gallery"> 
    <h1 style="margin-left: 110px; font-color = #cb6b28; " > Lựa Chọn Nổi Bật </h1>
    <div class="container">
        <div class="row">
            <?php 
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_array()) { 
                        $link = "";
                        $link .= "chitietphong.php?name=";
                        
                        $link .= $row["room_id"];
                        if (isset($_GET['user_id'])) {
                            $link .= "&user_id=";
                            $link .= $_GET['user_id'];
                        }
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
                        <div class="col-lg-3 mb-3">
                    <div class="card">
                        <img src="<?php echo $list_image[1] ?>" alt=""
                            class="card-img-top img-fluid d-block mx-auto">
                        <div class="card-body">
                            <P style="color:#828282" class="recipe-desc"> <?php echo $row["city"] ?>
                            </P>
                            <h6 style="color:blue" class="card-title">
                                <?php echo $row["title"] ?>
                            </h6>
                            <div class="card-text card-text-truncate mb-3">
                                <p style="color:#828282" class="recipe-desc">Địa chỉ: <?php echo $row["address"]?>, <?php echo $row["district"] ?>, <?php echo $row["ward"] ?>
                                </p>
                                <p class="recipe-desc">Diện tích: <?php echo $row["size"] ?>m²
                                 </p>
                                 <p class="recipe-desc">Giá: Khoảng <?php echo $row["price"] ?> triệu VNĐ/tháng
                                 </p>
                            </div>
                            <a href="<?php echo $link ?>" name="<?php echo $row["room_id"] ?>" class="btn btn-outline-success btn-sm">Read More</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i
                                    class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            <?php
                    }
                } 
            ?>
        </div>
    </div>
    </section>

</body>

 </html>