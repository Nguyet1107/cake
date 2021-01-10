<?php 
    /*session_start();
    if (!isset($_SESSION['logged'])){
        header("location:login.php");
        edit();
    }*/
;?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cake | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>


<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__cart">
            <div class="offcanvas__cart__links">
                <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                <a href="#"><img src="img/icon/heart.png" alt=""></a>
            </div>
            <div class="offcanvas__cart__item">
                <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                <div class="cart__price">Cart: <span>$0.00</span></div>
            </div>
        </div>
        <div class="offcanvas__logo">
            <a href="./index.php"><img src="img/logo.png" alt=""></a>
            <div class="shop_name">
                <a href="./index.php>">Macrina Bakery</a>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__option">
            <ul>
                <li>VND </li>
                <li>VIE </li>
                <li>
                    <?php 
                        if (isset($_SESSION['logged'])) { 
                        $ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");
                         //2.lấy dl mong muốn
                            $sql="SELECT * from tbl_dang_nhap where ten_dang_nhap='".$_SESSION["taikhoan"]."'  ";
                            $thong_tin=mysqli_query($ket_noi,$sql);
                            $row=mysqli_fetch_array($thong_tin);

                            ?>
                            <a href="user/thong_tin_ca_nhan.php?id=<?php echo $row["id_dang_nhap"] ?>"><?php echo $_SESSION["taikhoan"] ?> </a>
                            <li> <a href="user/logout.php">Đăng xuất</a></li>
                            <?php } else { ?>
                            <a href="user/login.php" >Đăng nhập</a>
                            <li>
                            <a href="user/dang_ky.php">Đăng kí</a>
                            </li>
                    <?php } ?>
                </li>
                <li><a href="#">Đăng nhập</a> <span class="arrow_carrot-down"></span></li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header__top__inner">
                            <div class="header__top__left">
                                <ul>
                                    <li>VND </li>
                                    <li>VIE </li>
                                    <li><a href="#">Đăng nhập</a> <span class="arrow_carrot-down"></span></li>
                                </ul>
                            </div>
                            <div class="header__logo">
                                <a href="./index.php"><img src="img/logo.png" alt=""></a>
                                <div class="shop_name">
                                   <a href="./index.php">Macrina Bakery</a>
                            </div>
                            </div>
                            <div class="header__top__right">
                                <div class="header__top__right__links">
                                    <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                                    <a href="#"><img src="img/icon/heart.png" alt=""></a>
                                </div>
                                <div class="header__top__right__cart">
                                    <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                                    <div class="cart__price">Giỏ hàng: <span>$0.00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li class="active"><a href="./about.php">About</a></li>
                            <li><a href="./shop.php">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./shop-details.php">Shop Details</a></li>
                                    <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                                    <li><a href="./checkout.php">Check Out</a></li>
                                    <li><a href="./wisslist.php">Wisslist</a></li>
                                    <li><a href="./Class.php">Class</a></li>
                                    <li><a href="./blog-details.php">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.php">Blog</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>About</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="./index.php">Home</a>
                        <span>About</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__img">
                       <img src="img/about-img6.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span>Giới thiệu</span>
                            <h2>Macrina Bakery-sự đơn giản và sẻ chia</h2>
                        </div>
                        <p>Ý tưởng của Macrina Bakery được gieo mầm khi Leslie Mackie đang theo học tại trường nấu ăn và tiếp tục bén rễ trong suốt sự nghiệp đầu bếp đầu tiên và trong những chuyến du lịch của cô.</p>
                        <p>Leslie Mackie từng nói:"Khi tìm kiếm một cái tên cho tiệm bánh mới này, tôi muốn một cái gì đó không liên quan đến bất kỳ quốc gia hay nền văn hóa nào, nhưng phản ánh triết lý của tôi. Đầu tiên tôi thích âm thanh của cái tên Macrina, nhà thần bí và nhìn xa trông rộng của Hy Lạp thế kỷ thứ 4, sau đó tôi phát hiện ra rằng qua nghiên cứu, Macrina bắt đầu một trong những cộng đồng đầu tiên có tài sản chung và nhấn mạnh một cuộc sống đơn giản, tự túc. Quan tâm nhiều như tôi làm về mối liên hệ giữa bánh mì và sự hiệp thông chia sẻ xảy ra trong các bữa ăn, có một mối liên hệ tự nhiên với triết lý của cộng đồng Macrina. Triết lý của tiệm bánh là nâng cao cả sản phẩm tự nhiên và hương vị của các loại ngũ cốc khác nhau. Các món nướng được tạo ra từ táo Tây Bắc, khoai tây, quả nam việt quất và quả phỉ, cũng như bột mì, lúa mạch đen, lúa mạch và kiều mạch. Macrina Casera, bánh mì nhà, được phát triển để có thể ăn trong bất kỳ bữa ăn nào, bổ sung cho tất cả các loại thực phẩm. Những đầu bếp tại Macrina luôn tìm tòi, thử nghiệm và kết hợp những nguyên liệu mới mẻ để chế biến lên những chiếc bánh không chỉ đẹp về vẻ bề ngoài mà còn đem đến một hương vị khó quên cho khách hàng."
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about__bar">
                        <div class="about__bar__item">
                            <p>Trang trí</p>
                            <div id="bar1" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="95"></span>
                            </div>
                        </div>
                        <div class="about__bar__item">
                            <p>Hương vị</p>
                            <div id="bar3" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="90"></span>
                            </div>
                            <div class="about_picture">
                                <img src="img/hero/hero-1.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span><a href="../cake/danh_gia.php">Đánh giá</a>
                </a>
            </span>
                        <h2>Cảm nhận của khách hàng</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial__slider owl-carousel">
                    <?php
                    $ket_noi= mysqli_connect("localhost","root","","cua_hang_banh");

                   $sql ="
                   SELECT *
                   FROM tbl_danh_gia order by id_danh_gia DESC
                   ";
                   //caau lenh lay ra du lieu mong muon
                   $noi_dung = mysqli_query($ket_noi, $sql);
                   //4.
                   $i=2;
                   while ($row= mysqli_fetch_array($noi_dung)) {
                    $i++;
                    ;?>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                
                                <div class="testimonial__author__pic"> 
                                    <img src="img/đánh giá/<?php echo $row["hinh_anh"];?>">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5><?php echo $row["ho_ten"];?></h5>
                                    <span><?php echo $row["dia_chi"];?></span>
                                </div>
                            </div>
                            <div class="rating">
                                <span><?php echo $row["id_muc_do_hai_long"];?>/5</span>
                            </div>
                            <p><?php echo $row["noi_dung"];?></p>
                            <p><?php echo $row["ten_san_pham"];?></p>
                        </div>
                    </div>
                     <?php
                }
                ;?>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <div class="section-title">
                        <span>Đội ngũ nhân viên</span>
                        <h2>Sweet Staff </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    $ket_noi= mysqli_connect("localhost","root","","cua_hang_banh");

                   $sql ="
                   SELECT *
                   FROM tbl_nhan_vien order by id_nhan_vien DESC
                   ";
                   //caau lenh lay ra du lieu mong muon
                   $noi_dung = mysqli_query($ket_noi, $sql);
                   //4.
                   $i=0;
                   while ($row= mysqli_fetch_array($noi_dung)) {
                    $i++;
                    ;?>
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="team__item set-bg" data-setbg="img/team/<?php echo $row["hinh_anh"];?>"">
                        <div class="team__item__text">
                            <h6><?php echo $row["ho_ten"];?></h6>
                            <span><?php echo $row["cong_viec"];?></span>
                            <div class="team__item__social">
                                <a href="<?php echo $row["facebook"];?>""><i class="fa fa-facebook"></i></a>
                                <a href="<?php echo $row["instagram"];?>""><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ;?>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>Giờ làm việc</h6>
                        <ul>
                            <li>Thứ 2 - Thứ 6: 08:00 am – 08:30 pm</li>
                            <li>Thứ 7 - Chủ nhật: 10:00 am – 16:30 pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p>Bánh là niềm đam mê bất tận của chúng tôi-đem lại cho bạn những dư vị đậm chất của Macrina Bakery.</p>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/macrina_cafe_/"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__newslatter">
                        <h6>Theo dõi</h6>
                        <p>Cập nhật những thông tin mới nhất</p>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <p class="copyright__text text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      </p>
                  </div>
                  <div class="col-lg-5">
                    <div class="copyright__widget">
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Site Map</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.barfiller.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>