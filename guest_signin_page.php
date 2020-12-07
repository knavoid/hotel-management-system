    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BHotel</title>
    <title>Martine</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!-- magnific CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/gijgo.min.css">
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
                <form action="action/guest_signin.php" method="POST">
                 <div class ="row justify-content-center">
                    <a href = "index.php"><h1>B Hotel</h1></a>
                </div>
                 <div class ="row justify-content-center">
                    <input type="text" id="id" name="id" class ="input_row" placeholder = "id">
                </div>
                 <div class ="row justify-content-center">
                    <input type="PASSWORD" id="pw" name="pw" class = "input_row" placeholder="password">
                </div>
                <div class ="row justify-content-center">
                    <button class ="btn_1" id="login"> Sign in </button>
                </div>
                </form>
            <div class ="row justify-content-center">
            <p>Don't have an account? <a href="guest_signup_page.php">Sign up</a></p>
    </section>


    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <script src="js/custom.js"></script>

    <script src="js/sign.js"></script>


</body>

</html>