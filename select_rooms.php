<!doctype html>
<?php 
    session_start();
    if (!isset($_SESSION["customer_name"])) {
        echo "<script> alert('Unauthorized access.'); </script>";
        echo "<script> location.href='index.html'; </script>";
    }
?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Martine</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!-- magnific CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/gijgo.min.css">
    <!-- niceselect CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- slick CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu">
            <div class="main_menu_iner">
                <div class="container">
                    <div class="row align-items-center ">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                                <a class="navbar-brand" href="main.php"> <img src="img/logo.png" alt="logo"> </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
    
                                <div class="collapse navbar-collapse main-menu-item justify-content-center"
                                    id="navbarSupportedContent">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="main.php">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about.html">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="packages.html">packages</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.html">Contact</a>
                                        </li>
                                        <li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
											role="button" data-toggle="dropdown" aria-haspopup="true"
											aria-expanded="false">
											My Page
										</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="reservation_content.php">Reservation Contents</a>
											<a class="dropdown-item" href="#">Complain</a>
										</div>
									</li>
                                    </ul>
                                </div>
                                <a href="#" class="btn_1 d-none d-lg-block">book now</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>Reservation</h2>
                            <p>Select Room</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- about us css start-->
    <section class="about_us section_padding">
        <div class="container">

            <?php
                // 체크인 날짜부터 체크아웃 날짜까지의 날짜들을 배열안에 저장
                $dates = array();

                $cid = explode("/", $_POST['check_in_date']);
                $cod = explode("/", $_POST['check_out_date']);

                $cid = (string)$cid[2] . "-" . (string)$cid[0] . "-" . (string)$cid[1];
                $cod = (string)$cod[2] . "-" . (string)$cod[0] . "-" . (string)$cod[1];

                $date = $cid;
                while ($date !== $cod) {
                    array_push($dates, $date);
                    $date = date("Y-m-d", strtotime($date . "+1 days"));
                }
                array_push($dates, $cod);

                $_SESSION['guests'] = $_POST['guests'];
                $_SESSION['dates'] = serialize($dates);
            ?>
            


            <!-- 예약 기본 정보 -->
            <h2 >Rooms: <?=$_POST['rooms']?> </h2>
            <h2>Date: <?=$_POST['check_in_date']?> ~ <?=$_POST['check_out_date']?> </h2>
            <h2>Guests: <?=$_POST['guests']?> </h2>
            <p> <?= count($dates) ?> days <?= count($dates) - 1 ?> nights </p>
            <p id="NOR" style="visibility:hidden"><?=$_POST['rooms']?></p>


            <!-- 객실 선택을 위한 checkbox -->
            <form action="action/reservation.php" method="post" onsubmit="return checkNumberOfRooms()">
                <input type="checkbox" id="room" name="rooms[]" value="101"> 101
                <input type="checkbox" id="room" name="rooms[]" value="102"> 102
                <input type="checkbox" id="room" name="rooms[]" value="103"> 103
                <input type="checkbox" id="room" name="rooms[]" value="104"> 104
                <input type="checkbox" id="room" name="rooms[]" value="105"> 105
                <input type="checkbox" id="room" name="rooms[]" value="106"> 106
                <input type="checkbox" id="room" name="rooms[]" value="107"> 107
                <input type="checkbox" id="room" name="rooms[]" value="108"> 108
                <input type="checkbox" id="room" name="rooms[]" value="109"> 109
                <input type="checkbox" id="room" name="rooms[]" value="110"> 110 <br/>
                <input type="checkbox" id="room" name="rooms[]" value="201"> 201
                <input type="checkbox" id="room" name="rooms[]" value="202"> 202
                <input type="checkbox" id="room" name="rooms[]" value="203"> 203
                <input type="checkbox" id="room" name="rooms[]" value="204"> 204
                <input type="checkbox" id="room" name="rooms[]" value="205"> 205
                <input type="checkbox" id="room" name="rooms[]" value="206"> 206
                <input type="checkbox" id="room" name="rooms[]" value="207"> 207
                <input type="checkbox" id="room" name="rooms[]" value="208"> 208
                <input type="checkbox" id="room" name="rooms[]" value="209"> 209
                <input type="checkbox" id="room" name="rooms[]" value="210"> 210 <br/>
                <input type="submit" value="Book Now"> 
            </form>
            
            
            <p id="selected_dates"></p>




            
        </div>
    </section>
    <!-- about us css end-->

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-5">
                    <div class="single-footer-widget">
                        <h4>Discover Destination</h4>
                        <ul>
                            <li><a href="#">Miami, USA</a></li>
                            <li><a href="#">California, USA</a></li>
                            <li><a href="#">London, UK</a></li>
                            <li><a href="#">Saintmartine, Bangladesh</a></li>
                            <li><a href="#">Mount Everast, India</a></li>
                            <li><a href="#">Sidney, Australia</a></li>
                            <li><a href="#">Miami, USA</a></li>
                            <li><a href="#">California, USA</a></li>
                            <li><a href="#">London, UK</a></li>
                            <li><a href="#">Saintmartine, Bangladesh</a></li>
                            <li><a href="#">Mount Everast, India</a></li>
                            <li><a href="#">Sidney, Australia</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="single-footer-widget">
                        <h4>Subscribe Newsletter</h4>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                    required="" type="email">
                                <button class="click-btn btn btn-default text-uppercase"> <i class="far fa-paper-plane"></i>
                                </button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                        type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div>
                        <p>Subscribe our newsletter to get update news and offers</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="single-footer-widget footer_icon">
                        <h4>Contact Us</h4>
                        <p>4156, New garden, New York, USA
                                +880 362 352 783</p>
                        <span>contact@martine.com</span>
                        <div class="social-icons">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- magnific js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- masonry js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- masonry js -->
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    
    <script src="js/room_select.js" type="text/javascript"></script>
    
</body>

</html>