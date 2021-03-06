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
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>

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

   <section class="instagram spad" style=" background: #FDF3EA; height: 800px; width: 2000px;padding-bottom: 20px" >
        <div class="container" style=" background: white; margin-top: 50px;margin-bottom: 5px;margin-left: 50px;">
            <div class="row">
                <div class="contact__text">
                   <h3 style="color: black">ĐÁNH GIÁ</h3>
                </div>
                <div style="margin-left: 80px">
                  <form style="height: 400px;width: 500px; margin-top: 100px;";  method="POST" action="../cake/danh_gia_thuc_hien.php" enctype="multipart/form-data">
                 <table style="height:auto;width: 500px" cellpadding="10px">
                     <tr>
                       <th >Họ tên</th>
                       <th><input type="text" name="txtHoTen" style="width: 150%"></th>
                    </tr>
                    <tr>
                        <th>Ảnh</th>
                        <th><input type="file" name="txtAnhMinhHoa" style="width: 100%"></th>
                    </tr>
                    <tr>
                        <th>Địa chỉ</th>
                        <th><input type="text" name="txtDiaChi" style="width: 150%"></th>
                    </tr>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th><input type="text" name="txtTenSanPham" style="width: 150%"></th>
                    </tr>
                    <tr>
                        <th>Nội dung</th>
                        <th><textarea name="txtNoiDung" style="width: 150%"></textarea></th>
                    </tr>
                    <tr>
                        <th>Mức độ hài lòng</th>
                        <th>
                            <select name="txtHaiLong" id="">
                                <option value="0">---Chọn---</option>
                                <option value="1">1. Rất không hài lòng</option>
                                <option value="2">2. Không hài lòng</option>
                                <option value="3">3. Hài lòng</option>
                                <option value="4">4. Rất hài lòng</option>
                                <option value="5">5. Cực kỳ hài lòng</option>
                            </select>    
                        </th>
                    </tr>
                    <tr>
                        <th></th>
                        <th colspan="3" align="center">
                        <input type="submit" name="Danhgia" style="width: 50%;height:position: center; background: #FC741A;" value="Đánh giá"></input></th>
                    </tr>
                 </table>
                </form>                        
              </div>
            </div>
        </div>
    </section>


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