<!doctype html>
<?php session_start() ?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BHotel | Sign Out</title>
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
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- magnific CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/gijgo.min.css">
    <!-- niceselect CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- slick CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
</head>
<style>
body {
    background-color : #f5f6f7;
}
</style>
<body>

    <section class="login section_padding">
        <div class="container">
            <div class ="row justify-content-center">
                <a href = "index.php"><h1>B Hotel</h1></a>
            </div>

            <form name="HMS" method="POST" action="action/guest_signup.php" onsubmit="return checkInformation()">
            <div class = "content">
                <div class = "row justify-content-center">
                    <div class="field">
                        <label for="name">ID</label>
                        <input type="text" maxlength="20" class = "up_row" name="id" id="id"/>
                     </div>
                </div>
                <div class = "row justify-content-center">
                    <div class="field">
                        <label for="password">Password</label>
                        <input type="password" maxlength="20" class = "up_row" name="pw" id="password"/>
                    </div>
                </div>
                <div class = "row justify-content-center">
                    <div class="field">
                        <label for="password2">Confirm</label>
                        <input type="password" maxlength="20" name="pw2" class = "up_row" id="password2"/>
                    </div>
                </div>
                <div class = "row justify-content-center">
                    <div class="field">
                        <label for="name">Name</label>
                        <input type="text" maxlength="20" class = "up_row" name="name" id="name"/>
                    </div>
                </div>

                <div class = "row justify-content-center">
                    <div class="field">
                        <label for="phone">Phone</label>
                        <input type="text" maxlength="11" class = "up_row" name="phone" id="phone"/>
                    </div>
                </div>
                    <ul class="actions row justify-content-center">
                        <input type=submit  class ="btn_1" value="Create Account" />
                        <input type=reset  class ="btn_2" value="Reset" />
                    </ul>
                </form>
            </div>
        </div>
    </section>

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

    <script src="js/sign.js"></script>

</body>

</html>