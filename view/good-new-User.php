<?php header("refresh: 2; ../index.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="uza - Model Agency HTML5 Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Spare Part</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <!-- ICONE DE ATALHOS -->
    <link rel="apple-touch-icon" href="images/ICONETRAI.png" type="image/x-icon" />
    <link rel="shortcut icon" href="img/ICONETRAI.png" type="image/x-icon" />

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="../view/css/home.css">
    <script src="../controller/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>

    <!-- ***** Top Search Area Start ***** -->
    <div class="top-search-area">
        <!-- Search Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <!-- Form -->
                        <form action="index.html" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Top Search Area End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="uzaNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html">
                        <h2>Spare Part</h2>
                    </a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>



                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <section class="welcome-area">



        <!-- Single Welcome Slide -->

        <!-- Background Curve -->

        <div class="background-curve">
            <img class="enfeite" src="./img/core-img/curve-1.png" alt="">
        </div>








    </section>
    <!-- ***** Welcome Area End ***** -->








    <!-- ***** Blog Area Start ***** -->
    <section class="uza-blog-area">

        <!-- Background Curve -->

        <div class="blog-bg-curve">
            <img src="./img/core-img/curve-4.png">
        </div>




        <div class="container">


            <form action="#" method="post">
                <!--
            (<a href="http://zxing.appspot.com/scan?ret=http://105.112.244.57:8090/agv-checklist/index2.php?codigo={CODE}">Click para ler o Código QR</a>):
     -->
                <?php 
     if(isset($_GET['codigo'])){
         $codigo = $_GET['codigo'];
         echo $codigo;
     }else{
         $codigo = "";
     }
     
     ?>
                <input type="text" name="cod" value="<?= $codigo ?>" hidden />
            </form>
            <!-- TESTE COM APP DE SCANNER INSTALADO -->







            <div class="row">

                <!-- Single Blog Post -->
                <h3 class="informativo">Cadastrado Com Sucesso.</h3>
                <div class="col-12 col-lg-4">
                    <img src="img/good2.gif" class="img-qr" id="img-qr">
                    <div class="single-blog-post bg-img mb-80" style="background-image: url(./img/bg-img/8.jpg);">
                        <!-- Post Content -->



                        <div id="formulario" class="post-content" style="display: none">

                        </div>
                    </div>



                </div>
            </div>
        </div>


        <span id="teste"></span>

    </section>
    <!-- ***** Blog Area End ***** -->



    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area section-padding-80-0">
        <div class="container">

            <div class="row" style="margin-bottom: 30px;">

                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());

                </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>

        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- ******* All JS Files ******* -->
    <!-- jQuery js -->
    <script src="../controller/js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="../controller/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../controller/js/bootstrap.min.js"></script>
    <!-- All js -->
    <script src="../controller/js/uza.bundle.js"></script>
    <!-- Active js -->
    <script src="../controller/js/default-assets/active.js"></script>

    <script src="../controller/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../controller/js/vendor/jquery-ui.js"></script>
    <script src="../controller/js/vendor/bootstrap.min.js"></script>

    <script src="../controller/js/owl.carousel.min.js"></script>
    <script src="../controller/js/contact-form.js"></script>
    <script src="../controller/js/ajaxchimp.js"></script>
    <script src="../controller/js/scrollUp.min.js"></script>
    <script src="../controller/js/magnific-popup.min.js"></script>
    <script src="../controller/js/wow.min.js"></script>

    <script src="../controller/js/main.js"></script>
    <script src="../controller/js/check.js"></script>



</body>

</html>
