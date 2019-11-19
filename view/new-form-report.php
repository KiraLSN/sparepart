<?php

include('conexao.php');

include('login/verifica_login.php');

include('login/redirect.php');

if(isset($_GET['codigo'])){
    $codigo = $_GET['codigo'];
}

$matricula = $_SESSION['matricula'];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="uza - Model Agency HTML5 Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Live Report - Innovation</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.ico">
    <!-- ICONE DE ATALHOS -->
    <link rel="apple-touch-icon" href="images/ICONETRAI.png" type="image/x-icon" />
    <link rel="shortcut icon" href="images/ICONETRAI.png" type="image/x-icon" />

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="form.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

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
                        <form action="index.php" method="post">
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
                    <a class="nav-brand" href="index.php">
                        <h2>Relatório de <?php echo $_SESSION['nome'];?> </h2>
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

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="current-item"><a href="./index.php">Home</a></li>


                                <li><a href="#">Reatórios</a>
                                    <ul class="dropdown">

                                        <li><a href="report-diario.php">Reatório Diario </a></li>
                                        <li><a href="report-mensal.php">- Relatorio Mensal</a></li>
                                        <li><a href="report.php">- Relatorio Geral</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Intruções</a>
                                    <ul class="dropdown">
                                        <li><a href="./blog.html">- Uso do Sistema</a></li>
                                        <li><a href="./single-blog.html">- Procedimentos de Manutenção do AGV</a></li>
                                    </ul>
                                </li>
                                <li><a href="./contact.html">Contatos</a></li>
                                <li><a style="color: red" href="login/sair.php">Logout</a></li>
                            </ul>




                        </div>
                        <!-- Nav End -->

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
            <img src="./img/core-img/curve-1.png" alt="" width="300">
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


            <?php 
                                    
                                    ?>
            <div class="row">

                <!-- Single Blog Post -->
                <div class="col-12 col-lg-4">

                    <!-- Post Content -->

                    <div class="single-blog-post bg-img mb-80" style="background-image: url(./img/bg-img/8.jpg);">
                        
                        

                        <div id="formulario" class="post-content">
                            <span class="post-date" id="datou"><?php echo date("d ") ."de". date(" M "). "de ". date("Y") ?></span>
                            <h3 id="numcar">
                                    <label>Reporte de Atividade</label>
                                </h3>
                            <form method="post" action="formCheck.php">
                                <div>
                                    <label for="atividade">ATIVIDADE: </label>
                                <input type="text" id="atividade" name="atividade" placeholder="Titulo da Atividade">
                                    </div>
                                <div>
                                    <label for="razao">RAZÃO: </label>
                                <input type="text" id="razao" name="razao" placeholder="Escreva a razão">
                                    </div>
                                <div>
                                    <label for="save">SAVE: </label>
                                <input type="text" id="save" name="save" placeholder="Descreva o principal ganho da melhoria">
                                    </div>
                                <div>
                                    <label for="prazo">PRAZO: </label>
                                <input type="date" id="prazo" name="prazo" placeholder="Prazo">
                                    </div>
                                <div>
                                    <label for="dificuldade">DIFICULDADE: </label>
                                <input type="text" id="dificuldade" name="dificuldade" placeholder="Principal dificuldade">
                                    </div>
                                <div>
                                    <label for="contramedida">CONTRAMEDIDA: </label>
                                <input type="text" id="contramedida" name="contramedida" placeholder="Contramedida Tomada">
                                    </div>
                                <div>
                                    
                                    <label for="PERCENT">% CONCLUIDO: </label>
                                <input type="range" list="tickmarks" min="0" max="100" id="percent" name="percent" value="0">
                                    <datalist id="tickmarks">
  <option value="0" label="0%">
  <option value="10">
  <option value="20">
  <option value="30">
  <option value="40">
  <option value="50" label="50%">
  <option value="60">
  <option value="70">
  <option value="80">
  <option value="90">
  <option value="100" label="100%">
</datalist>
                                    <label id="porcent"></label>
                                    </div>
                                <div>
                                <button id="btnCadastrar" name="btnCadastrar" type="submit" class="btn uza-btn btn-3 mt-15">Cadastrar Atividade</button>
                                    </div>
                            </form>
                        </div>
                    </div>



                </div>
            </div>
        </div>


        <span id="teste"></span>

    </section>
    <!-- ***** Blog Area End ***** -->

<script>
    
    </script>

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
    <script src="js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js -->
    <script src="js/uza.bundle.js"></script>
    <!-- Active js -->
    <script src="js/default-assets/active.js"></script>

    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/jquery-ui.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/owl.carousel.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/ajaxchimp.js"></script>
    <script src="js/scrollUp.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/wow.min.js"></script>

    <script src="js/main.js"></script>
    <script src="js/check.js"></script>




</body>

</html>
