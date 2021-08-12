<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Neron</title>
</head>

<body>

    <!--Header  ============================================================= -->
    <header class="header" id="header">
        <div class="auto_container">
            <div class="header_wrap">
                <a href="index.html" class="header_logo">
                    <img src="images/logo.png" alt="">
                </a>

                <div class="navs_bg">
                    <nav class="navs">
                        <a href="{{route('pages.index')}}" class="nav_link {{ (\Request::route()->getName() == 'pages.index') ? 'active' : '' }}">Home</a>
                        <a href="{{route('pages.about')}}" class="nav_link {{ (\Request::route()->getName() == 'pages.about') ? 'active' : '' }}">About us</a>
                        <a href="{{route('pages.services')}}" class="nav_link {{ (\Request::route()->getName() == 'pages.services') ? 'active' : '' }}">Services</a>
                        <a href="{{route('pages.portfolio')}}" class="nav_link {{ (\Request::route()->getName() == 'pages.portfolio') ? 'active' : '' }}">Portfolio</a>
                    </nav>
                </div>
                <div class="burger">
                    <img src="images/svg/menu (1).svg" alt="">
                </div>
            </div>
        </div>
    </header>
    <!--Header  end ========================================================= -->
 




    @yield('page')





    <!--Footer ============================================================= -->
    <footer class="footer">
        <div class="auto_container">
            <div class="footer_wrap">
                <div class="copyright">
                    Copyright ©  2020-2021 Neron IT Solutions. All rights reserved.
                </div>
                <div class="footer_contact">
                    <div class="footer_row">
                        <div class="footer_icon">
                            <img src="images/svg/mail.svg" alt="">
                        </div>
                        <a href="#" class="footer_text">
                            index@neron.com
                        </a>
                    </div>
                    <div class="footer_row">
                        <div class="footer_icon">
                            <img src="images/svg/phone.svg" alt="">
                        </div>
                        <div class="footer_text">
                            + (993) 12 12 12 12
                        </div>
                    </div>
                </div>
                <div class="scroll">
                    footer
                </div>
            </div>
        </div>
    </footer>
    <!--Footer end ========================================================= -->


    <script src="js/jquery.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/main.js"></script>
</body>

</html>